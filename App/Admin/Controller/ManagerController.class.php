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

class ManagerController extends CommonController{
    //栏目列表，注意list为PHP中的保留字符
    public function lis(){
        $manager=D('Manager');
        $rows=$manager->listManager();
        $this->assign('rows',$rows);
        $this->display();
    }
    //增加
    public function add(){
        if (IS_POST) {
            $manager = D('Manager');
            if (I('post.password')==I('post.rpassword')){
                if ($manager->addManager(I('post.username'),I('post.password'))){
                    $this->success("添加管理员成功！", U('lis'));
                }else{
                    $this->success("添加管理员失败！");
                }
            }else{
                $this->success("输入的密码不一致！");
            }

            return;
        }
        $this->display();
    }
    //修改
    public function edit(){
        $manager = D('Manager');
        $managers=$manager->find(I("id"));
        $this->assign('managers',$managers);
        /*之前写的，修改会失败
        if (IS_POST) {
            if ($managers['password']=md5(I('post.oripassword'))){  //判断输入的原密码是否正确
                if (I('post.password')==I('post.rpassword')){       //判断两次输入的新密码是否一致
                    if ($manager->editManager(I('id'),I('post.password'))){
                        $this->success("修改管理员成功！", U('lis'));
                    }else{
                        $this->success("修改管理员失败！");
                    }
                    $password=$managers['password'];
                    if (I('password')){
                        $data['password']=md5(I('password'));
                    }else{
                        $data['password']=$password;
                    }

                    if ($manager->create($data)){
                        if ($manager->save()){
                            $this->success("修改管理员成功！", U('lis'));
                        }else{
                            $this->error("修改管理员失败！");
                        }
                    }else{
                        $this->error($manager->getError());
                    }


                }else{
                    $this->success("输入的密码不一致！");
                }
            }else{
                $this->error('原密码错误！');
            }
            return;
        }
        */
        if (IS_POST) {
            $manager = D('Manager');
            if ($manager->editManager(I('id'),I('post.password'))){
                $this->success("修改成功！", U('lis'));
            }else{
                $this->success("修改失败！");
            }
            return;
        }


        $this->display();
    }
    //删除
    public function del(){
        $manager=D('Manager');
        $id=I('id');
        if ($id==1){
            $this->error("警告：系统管理员禁止删除！");
        }else{
            if ($manager->delete(I('id'))){
                $this->success("删除管理员成功！",U('lis'));
            }else{
                $this->error("删除管理员失败！");
            }
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