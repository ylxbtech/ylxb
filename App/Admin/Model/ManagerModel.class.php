<?php
/**
 * Created by PhpStorm.
 * User: Road
 * Date: 2018/2/27
 * Time: 14:54
 */

namespace Admin\Model;
use Think\Model;
use Think\Verify;

class ManagerModel extends Model{
    //自动验证
    protected $_validate=array(
//        array('username','require','管理员用户名不能为空！',1,'regex',3), // 在新增的时候验证是否为空
        array('username','','管理员用户名已经存在！',1,'unique',3), // 在新增的时候验证name字段是否唯一
        array('password','require','管理员密码不能为空！',1,'regex',3), // 在新增的时候验证是否为空
        //-2,'密码长度不合法！'
//        array('password', '6,30', -2, self::EXISTS_VALIDATE,'length'),
//        //-3,'密码和密码确认不一致！'
//        array('rpassword', 'password', '输入的密码不一致！', self::EXISTS_VALIDATE,'confirm'),

        array('verify','check_verify','验证码为空或错误！',1,'callback',4), // 在新增的时候验证是否为空

    );

    //管理员列表
    public function listManager(){
        $rows=$this->order("id desc")->select();
        return $rows;
    }

    //增加管理员
    public function addManager($username,$password){
        $data=array(
            'username'=>$username,
            'password'=>md5($password),
            'time'=>time(),
        );
        if ($this->create($data)){
            $aid=$this->add($data);
        }
        return $aid;
    }

    //修改管理员
    public function editManager($id,$password){
        $data=array(
            'id'=>$id,
            'password'=>md5($password),
            'time'=>time(),
        );
        if ($this->create($data)){
            $aid=$this->save();
        }
        return $aid;

    }

    //删除管理员
    public function delManager($id){
        $w=array(
            'id'=>$id,
        );
        $this->where($w)->delete();

    }

    //管理员登录
    public function login($username,$password){
        $map=array(
            'username'=>$username
        );
        $info=$this->where($map)->find();
        if ($info){
            if ($info['password']==md5($password)){
                session('id',$info['id']);  //在session中存入ID
                session('username',$info['username']);
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    function check_verify($code, $id = ''){
        $verify = new Verify();
        return $verify->check($code, $id);
    }


}