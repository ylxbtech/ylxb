<?php
/**
 * Created by PhpStorm.
 * User: Road
 * Date: 2018/2/27
 * Time: 13:29
 */

namespace Admin\Controller;
use function PHPSTORM_META\elementType;
use Think\Controller;

class CateController extends CommonController{
    //栏目列表，注意list为PHP中的保留字符
    public function lis(){
        $cate=D('Cate');
        $rows=$cate->listCate();
        $this->assign('rows',$rows);
        $this->display();
    }
    //增加
    public function add(){
        if (IS_POST) {
            $cate = D('Cate');
            if ($cate->addCate(I('post.catename'))){
                $this->success("添加栏目成功！", U('lis'));
            }else{
                $this->success("添加栏目失败！");
            }
            return;
        }
        $this->display();
    }
    //修改
    public function edit(){
        $cate=D('Cate');
        $cater=$cate->find(I("id"));
        $this->assign('cater',$cater);
        if (IS_POST) {
            $cate = D('Cate');
            if ($cate->editCate(I('post.id'),I('post.catename'))){
                $this->success("修改栏目成功！", U('lis'));
            }else{
                $this->success("修改栏目失败！");
            }
            return;
        }
        $this->display();
    }
    //删除
    public function del(){
        $cate=D('cate');
        if ($cate->delete(I('id'))){
            $this->success("删除栏目成功！",U('lis'));
        }else{
            $this->error("删除栏目失败！");
        }
    }

    //排序
    public function sort(){
//        dump($_POST);
        $cate=D('Cate');
        foreach ($_POST as $id=>$sort){
            $cate->where(array("id"=>$id))->setField("sort",$sort);
        }
        $this->success("排序完成！",U('lis'));
    }
}