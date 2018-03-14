<?php
/**
 * Created by PhpStorm.
 * User: Road
 * Date: 2018/2/27
 * Time: 14:54
 */

namespace Admin\Model;
use Think\Model;

class CateModel extends Model{
    //自动验证
    protected $_validate=array(
        array('catename','require','添加栏目不能为空！',1,'regex',3), // 在新增的时候验证是否为空
        array('catename','','栏目名称已经存在！',1,'unique',3), // 在新增的时候验证name字段是否唯一

    );

    //栏目列表
    public function listCate(){
        $rows=$this->order("sort asc")->select();
        return $rows;
    }

    //增加栏目
    public function addCate($catename){
        $data['catename']=$catename;
        if ($this->create($data)){
            $aid=$this->add($data);
        }
        return $aid;
    }

    //修改栏目
    public function editCate($id,$catename){
        $data['id']=$id;
        $data['catename']=$catename;
        if ($this->create($data)){
            $aid=$this->save();
        }
        return $aid;
    }

    //删除栏目
    public function delCate($id){
        $w=array(
            'id'=>$id,
        );
        $this->where($w)->delete();

    }


}