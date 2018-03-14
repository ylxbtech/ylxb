<?php
/**
 * Created by PhpStorm.
 * User: Road
 * Date: 2018/2/27
 * Time: 23:03
 */

namespace Admin\Controller;
use function PHPSTORM_META\elementType;
use Think\Controller;
use Think\Page;

class LinkController extends CommonController{
    //链接列表，注意list为PHP中的保留字符
    public function lis(){
        //数据分页
        $link=D('Link');
        $count=$link->count();   //查询总记录数
        $page=new Page($count,5);           //实例化分页类 传入总记录数和每页显示的数量5
        $show = $page->show();// 分页显示输出
        $list = $link->order('sort asc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display();
    }
    //增加链接
    public function add(){
        if (IS_POST) {
            $link= D('Link');
            if ($link->addLink(I('post.title'),I('post.url'),I('post.desc'))){
                $this->success("添加链接成功！", U('Link/lis'));
            }else{
                $this->success("添加链接失败！");
            }
            return;
        }
        $this->display();
    }
    //修改
    public function edit(){
        $link=D('Link');
        $links=$link->find(I("id"));
        $this->assign('links',$links);
        if (IS_POST) {
            $link = D('Link');
            if ($link->editLink(I('post.id'),I('post.title'),I('post.url'),I('post.desc'))){
                $this->success("修改成功！", U('Link/lis'));
            }else{
                $this->success("修改失败！");
            }
            return;
        }
        $this->display();
    }
    //删除
    public function del(){
        $link=D('Link');
        if ($link->delete(I('id'))){
            $this->success("删除链接成功！",U('lis'));
        }else{
            $this->error("删除链接失败！");
        }
    }

    //排序
    public function sort(){
//        dump($_POST);
        $link=D('Link');
        foreach ($_POST as $id=>$sort){
            $link->where(array("id"=>$id))->setField("sort",$sort);
        }
        $this->success("排序完成！",U('lis'));
    }
}