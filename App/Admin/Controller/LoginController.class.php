<?php
/**
 * Created by PhpStorm.
 * User: Road
 * Date: 2018/2/27
 * Time: 23:03
 */

namespace Admin\Controller;
use Think\Controller;
use Think\Verify;

class LoginController extends Controller{
    public function index(){
        $manager=D('Manager');
        if (IS_POST){
            if ($manager->login(I('post.username'),I('post.password'))){
                if ($manager->check_verify(I('post.Code'))){
                    $this->success('登录成功！',U('Index/index'));
                }else{
                    $this->error('验证码错误！');
                }

            }else{
                $this->error('登录失败！');
            }
            return;
        }

        //防止重复登录
        if (session('id')){
            $this->error('您已登录，请不要重复登录！',U('Index/index'));
        }else{
            $this->display();
        }


    }

    public function verify(){
        $Verify =new Verify();
        $Verify->fontSize = 30;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->entry();
    }

    //退出登录
    public function logout() {
        //清理session
        session(null);
        //清除自动登录的cookie
        cookie('auto', null);
        //跳转到正确跳转页
        $this->success('退出成功！', U('Login/index'));
    }


}