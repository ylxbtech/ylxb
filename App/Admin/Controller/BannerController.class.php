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
use Think\Upload;

class BannerController extends CommonController{
    //Banner列表，注意list为PHP中的保留字符
    public function lis(){
        $banner=D('Banner');
        $picList = $banner->order('sort asc')->select();
        $this->assign('picList',$picList);  //banner图片列表
        $this->display();
    }
    //增加Banner
    public function add(){
        if (IS_POST) {
            //Banner图片上传
            if ($_FILES['banner']['tmp_name']!=''){
                $upload=new Upload();   // 实例化上传类
                $upload->maxSize=7340032 ;// 设置附件上传大小，单位为字节，这里为7M
                $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath='./'; // 设置附件上传根目录
                $upload->savePath='Uploads/banner/';      // 设置附件上传子目录
                // 上传单个文件
                $info   =   $upload->uploadOne($_FILES['banner']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功 获取上传文件信息
                    $picPath=$info['savepath'].$info['savename'];   //上传成功的路径
                }
            }else{
                $this->success("Banner为空或上传错误！");
            }

            $banner=D('Banner');
            if ($banner->addBanner(I('post.url'),$picPath)){
                $this->success("新增Banner成功！", U('Banner/lis'));
            }else{
                $this->success("新增Banner失败！");
            }

            return;
        }
        $this->display();
    }
    //修改
    public function edit(){
        if (IS_POST) {
            //Banner图片上传
            if ($_FILES['banner']['tmp_name']!=''){
                $upload=new Upload();   // 实例化上传类
                $upload->maxSize=7340032 ;// 设置附件上传大小，单位为字节，这里为7M
                $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath='./'; // 设置附件上传根目录
                $upload->savePath='Uploads/banner/';      // 设置附件上传子目录
                // 上传单个文件
                $info   =   $upload->uploadOne($_FILES['banner']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功 获取上传文件信息
                    $picPath=$info['savepath'].$info['savename'];   //上传成功的路径
                }
            }else{
                $this->success("Banner为空或上传错误！");
            }

            $banner=D('Banner');
            if ($banner->editBanner(I('post.url'),$picPath)){
                $this->success("修改Banner成功！", U('Banner/lis'));
            }else{
                $this->success("修改Banner失败！");
            }

            return;
        }
        $this->display();
    }
    //删除
    public function del(){
        $banner=D('Banner');
        if ($banner->delete(I('id'))){
            $this->success("删除Banner成功！",U('lis'));
        }else{
            $this->error("删除Banner失败！");
        }
    }

    //排序
    public function sort(){
//        dump($_POST);
        $banner=D('Banner');
        foreach ($_POST as $id=>$sort){
            $banner->where(array("id"=>$id))->setField("sort",$sort);
        }
        $this->success("排序完成！",U('lis'));
    }
}