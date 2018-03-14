<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    public function index(){
        $article=D('Article')->find(I('id'));
        $this->assign('article',$article);
        $this->catename($article['cateid']);
        $this->display();
    }

    public function catename($cateid){
        $catename=D('Cate')->find($cateid);
        $this->assign('catename',$catename['catename']);
    }
}