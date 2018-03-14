<?php
/**
 * Created by PhpStorm.
 * User: Road
 * Date: 2018/2/27
 * Time: 14:54
 */

//文章的视图模型

namespace Admin\Model;
use Think\Model\ViewModel;

class ArticleViewModel extends ViewModel{
    public $viewFields = array(
        'Article'=>array('id','title','pic'),   //'_type'=>'LEFT'
        'Cate'=>array('catename','_on'=>'Article.cateid=Cate.id'),//,'_type'=>'RIGHT'
    );
}