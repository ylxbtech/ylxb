<?php
/**
 * Created by PhpStorm.
 * User: Road
 * Date: 2018/3/5
 * Time: 11:40
 */

namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller{
    public function __construct()
    {
        parent::__construct();
        if (!session('id')){
            $this->error('请您先滚去登录！',U('Login/index'));
        }
    }
}