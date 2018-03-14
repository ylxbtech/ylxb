<?php
/**
 * Created by PhpStorm.
 * User: Road
 * Date: 2018/2/27
 * Time: 14:54
 */

namespace Admin\Model;
use Think\Model;

class BannerModel extends Model{
    //自动验证
    protected $_validate=array(
        array('url','require','Banner指向的URL不能为空！',1,'regex',3), // 在新增的时候验证是否为空
        /*array('desc','require','文章描述不能为空！',1,'regex',3), // 在新增的时候验证是否为空
        array('content','require','文章内容不能为空！',1,'regex',3), // 在新增的时候验证是否为空
        array('title','','文章标题已经存在！',1,'unique',3), // 在新增的时候验证name字段是否唯一*/



    );

    //文章列表
    public function listArticle(){
        $rows=$this->order("sort asc")->select();
        return $rows;
    }

    //增加文章
    public function addBanner($url,$pic){
        $data=array(
            'url'=>$url,
            'pic'=>$pic
        );
        if ($this->create($data)){
            $aid=$this->add($data);
        }
        return $aid;
    }

    //修改文章
    public function editBanner($url,$pic){
        $data=array(
            'url'=>$url,
            'pic'=>$pic
        );
        if ($this->create($data)){
            $aid=$this->add($data);
        }
        return $aid;
    }

    //删除文章
    public function delBanner($id){
        $w=array(
            'id'=>$id,
        );
        $this->where($w)->delete();

    }


}