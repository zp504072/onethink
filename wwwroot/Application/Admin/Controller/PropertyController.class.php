<?php
/**
 * Created by PhpStorm.
 * User: a5040
 * Date: 2017/8/10
 * Time: 14:18
 */

namespace Admin\Controller;


class PropertyController extends AdminController
{
    public function index()
    {
        $pid = i('get.pid', 0);

        $map = array('status' => array('gt', -1),);
        $list = M('property')->order('id asc')->select();
        $this->assign('list', $list);
        $this->display();
    }

    public function add()
    {
        if (IS_POST) {
            $Property = D('Property');
            $data = $Property->create();
            if ($data) {
                $id = $Property->add();
                if ($id) {
                    $this->success('新增成功', U('index'));
                    //记录行为
                    action_log('update_channel', 'channel', $id, UID);
                } else {
                    var_dump($Property->getError());
                    exit;
                    $this->error('新增失败');

                }
            } else {
                $this->error($Property->getError());
            }
        }

        $this->display('edit');
    }

    public function edit($id = 0)
    {
        if (IS_POST) {
            $Property = D('Property');
            $data = $Property->create();
            if ($data) {
                if ($Property->save()) {
                    //记录行为
                    action_log('update_channel', 'channel', $data['id'], UID);
                    $this->success('编辑成功', U('index'));
                } else {
                    $this->error('编辑失败');
                }

            } else {
                $this->error($Property->getError());
            }

        }else {
            $info = array();
            /* 获取数据 */
            $info = M('Property')->find($id);

            if(false === $info){
                $this->error('获取配置信息错误');
            }


            $this->assign('info', $info);
            $this->display();
        }
    }
    public function del(){
        $id = array_unique((array)I('id',0));

        if ( empty($id) ) {
            $this->error('请选择要操作的数据!');
        }

        $map = array('id' => array('in', $id) );
        if(M('Property')->where($map)->delete()){
            //记录行为
            action_log('update_channel', 'channel', $id, UID);
            $this->success('删除成功');
        } else {
            $this->error('删除失败！');
        }
    }
}