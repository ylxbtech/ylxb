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
use Think\Page;
use Think\Upload;

class ArticleController extends CommonController{
    //栏目列表，注意list为PHP中的保留字符
    public function lis(){
        //数据分页
        $article=D('ArticleView');
        $count=$article->count();   //查询总记录数
        $page=new Page($count,10);   //实例化分页类 传入总记录数和每页显示的数量5
        $show = $page->show();// 分页显示输出
        $list = $article->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display();
    }
    //增加
    public function add(){
        if (IS_POST) {
            //文章封面图片上传
            if ($_FILES['pic']['tmp_name']!=''){
                $upload=new Upload();   // 实例化上传类
                $upload->maxSize=7340032 ;// 设置附件上传大小，单位为字节，这里为7M
                $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath='./'; // 设置附件上传根目录
                $upload->savePath='Uploads/pic/';      // 设置附件上传子目录
                // 上传单个文件
                $info   =   $upload->uploadOne($_FILES['pic']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功 获取上传文件信息
                    $picPath=$info['savepath'].$info['savename'];   //上传成功的路径
                }
            }else{
                $this->success("文章封面为空或上传错误！");
            }
            $article=D('Article');
            if ($article->addArticle(I('post.title'),I('post.desc'),I('post.content'),$picPath,I('post.cateid'))){
                $this->success("新增文章成功！", U('Article/lis'));
            }else{
                $this->success("新增文章失败！");
            }

            return;
        }
        //选择栏目
        $cate=D('Cate');
        $cateres=$cate->select();
        $this->assign('cateres',$cateres);
        $this->display();
    }
    //修改
    public function edit(){

        if (IS_POST) {
            //文章封面图片上传
            if ($_FILES['pic']['tmp_name']!=''){
                $upload=new Upload();   // 实例化上传类
                $upload->maxSize=7340032 ;// 设置附件上传大小，单位为字节，这里为7M
                $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath='./'; // 设置附件上传根目录
                $upload->savePath='Uploads/pic/';      // 设置附件上传子目录
                // 上传单个文件
                $info   =   $upload->uploadOne($_FILES['pic']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功 获取上传文件信息
                    $picPath=$info['savepath'].$info['savename'];   //上传成功的路径
                }
            }else{
                $this->success("文章封面为空或上传错误！");
            }
            $article=D('Article');
            if ($article->editArticle(I('post.title'),I('post.desc'),I('post.content'),$picPath,I('post.cateid'))){
                $this->success("修改文章成功！", U('Article/lis'));
            }else{
                $this->success("修改文章失败！");
            }
            return;
        }

        $article=D('Article');
        $articler=$article->find(I("id"));
        $this->assign('articler',$articler);

        //选择栏目
        $cate=D('Cate');
        $cateres=$cate->select();
        $this->assign('cateres',$cateres);


        $this->display();
    }
    //删除
    public function del(){
        $article=D('Article');
        if ($article->delete(I('id'))){
            $this->success("删除文章成功！",U('lis'));
        }else{
            $this->error("删除文章失败！");
        }
    }

    //排序
    public function sort(){
//        dump($_POST);
        $article=D('Article');
        foreach ($_POST as $id=>$sort){
            $article->where(array("id"=>$id))->setField("sort",$sort);
        }
        $this->success("排序完成！",U('lis'));
    }
}