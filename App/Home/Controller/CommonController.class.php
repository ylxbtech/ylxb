<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class CommonController extends Controller {
    function __construct()
    {
        parent::__construct();
        $this->nav();
        $this->link();
        $this->newArticle();
        $this->bannerlis();
    }
    //导航
    public function nav(){
        $cate=D('Cate');
        $cateres=$cate->order('sort asc')->select();
        $this->assign('cateres',$cateres);
    }
    //支持链接
    public function link(){
        $link=D('Link');
        $links=$link->order('sort asc')->select();
        $this->assign('links',$links);
    }
    //最新文章
    public function newArticle(){
        /*
        $article=D('Article');
        $newArticle=$article->order('time desc')->limit('10')->select();
        $this->assign('newArticle',$newArticle);
        */
        //数据分页
        $article=D('Article');
        $count=$article->count();   //查询总记录数
        $page=new Page($count,10);           //实例化分页类 传入总记录数和每页显示的数量5
        $show = $page->show();// 分页显示输出
        $list = $article->order('time desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
    }
    //Banner列表，注意list为PHP中的保留字符
    public function bannerlis(){
        $banner=D('Banner');
        $picList = $banner->order('sort asc')->select();
        $this->assign('picList',$picList);  //banner图片列表

    }
}