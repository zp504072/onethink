<?php
/**
 * Created by PhpStorm.
 * User: a5040
 * Date: 2017/8/10
 * Time: 14:18
 */

namespace Home\Controller;


use Think\Page;

class PropertyController extends HomeController
{
    public function index()
    {

        $model = M('property');
        $count=$model->count();
        $Page=new Page($count,2);
        $show=$Page->show();
        $list=$model->limit($Page->firstRow.','.$Page->listRows)->select();
        //var_dump($list);exit;
        $this->assign('list', $list);
        $this->assign('page',$show);
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
                    $this->success('新增成功', U('Index/index'));
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