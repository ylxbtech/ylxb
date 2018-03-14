<?php
/**
 * Created by PhpStorm.
 * User: Road
 * Date: 2018/2/27
 * Time: 14:54
 */

namespace Admin\Model;
use Think\Model;

class ArticleModel extends Model{
    //自动验证
    protected $_validate=array(
//        array('title','require','文章标题不能为空！',1,'regex',3), // 在新增的时候验证是否为空
//        array('desc','require','文章描述不能为空！',1,'regex',3), // 在新增的时候验证是否为空
//        array('content','require','文章内容不能为空！',1,'regex',3), // 在新增的时候验证是否为空
//        array('title','','文章标题已经存在！',1,'unique',3), // 在新增的时候验证name字段是否唯一



    );

    //文章列表
    public function listArticle(){
        $rows=$this->order("sort asc")->select();
        return $rows;
    }

    //增加文章
    public function addArticle($title,$desc,$content,$pic,$cateid){
        $data=array(
            'title'=>$title,
            'desc'=>$desc,
            'content'=>$content,
            'pic'=>$pic,
            'cateid'=>$cateid,
            'time'=>time(),
        );
        if ($this->create($data)){
            $aid=$this->add($data);
        }
        return $aid;
    }

    //修改文章
    public function editArticle($title,$desc,$content,$pic,$cateid){
        $data=array(
            'title'=>$title,
            'desc'=>$desc,
            'content'=>$content,
            'pic'=>$pic,
            'cateid'=>$cateid,
            'time'=>time(),
        );
        if ($this->create($data)){
            $aid=$this->save($data);
        }
        return $aid;
    }

    //删除文章
    public function delArticle($id){
        $w=array(
            'id'=>$id,
        );
        $this->where($w)->delete();

    }


}