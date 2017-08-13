<?php
/**
 * Created by PhpStorm.
 * User: a5040
 * Date: 2017/8/11
 * Time: 15:37
 */

namespace Home\Controller;


use Home\Model\DocumentModel;

class NoticeController extends HomeController
{
    //查看小区通知
    public function index(){
        $model=M('document')->alias('d')->join('onethink_picture da  ON d.id = da.id')->field('d.description,d.id,d.title,da.path,d.create_time,d.view')->select();
        //var_dump($model);exit;
        $this->assign('list', $model);
        $this->display();
    }
    public function detail($id){
        $model=M('document')->alias('d')->join('onethink_document_article da  ON d.id = da.id')->field('d.id,d.title,da.content,d.create_time')->where(['d.id'=>$id])->select();
        //var_dump($model);exit;

        $this->assign('list', $model);
        $this->display();
    }

}
