<?php
/**
 * Created by PhpStorm.
 * User: Road
 * Date: 2018/2/27
 * Time: 14:54
 */

namespace Admin\Model;
use Think\Model;

class LinkModel extends Model{
    //自动验证
    protected $_validate=array(
        array('title','require','链接标题不能为空！',1,'regex',3), //验证是否为空
        array('title','','链接标题已经存在！',1,'unique',3), // 字段是否唯一
        array('url','require','链接不能为空！',1,'regex',3), //验证是否为空
        array('url','','链接已经存在！',1,'unique',3), // 字段是否唯一
    );

    //链接列表
    public function listLink(){
        $rows=$this->select();
        


        return $rows;
    }

    //增加链接
    public function addLink($title,$url,$desc){
        $data=array(
            'title'=>$title,
            'url'=>$url,
            'desc'=>$desc
        );
        if ($this->create($data)){
            $aid=$this->add($data);
        }
        return $aid;
    }

    //修改链接
    public function editLink($id,$title,$url,$desc){
        $data=array(
            'id'=>$id,
            'title'=>$title,
            'url'=>$url,
            'desc'=>$desc,
        );
        if ($this->create($data)){
            $aid=$this->save();
        }
        return $aid;
    }

    //删除链接
    public function delLink($id){
        $w=array(
            'id'=>$id,
        );
        $this->where($w)->delete();

    }


}