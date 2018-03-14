<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class CateController extends CommonController {
    public function index(){
        $map=array(
            'cateid'=>I('id'),
        );
//        $articleres=D('Article')->where($map)->select();
        //数据分页
        $article=D('Article');
        $count=$article->where($map)->count();   //查询总记录数
        $page=new Page($count,10);           //实例化分页类 传入总记录数和每页显示的数量5
        $show = $page->show();// 分页显示输出
        $list = $article->where($map)->order('time desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
}