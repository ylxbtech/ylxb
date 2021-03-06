<?php if (!defined('THINK_PATH')) exit();?><!--head-->
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>yl_blog</title>
    <link rel="shortcut icon" href="/Public/Admin/img/ylxb-logo1.png" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/main.css"/>
    <script type="text/javascript" src="/Public/Admin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="<?php echo U('Index/index');?>" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="http://localhost/yl_blog/index.php/Home/" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="<?php echo U('Index/index');?>">欢迎您，<?php echo (session('username')); ?></a></li>
                <li><a href="/index.php/Admin/Manager/edit/id/<?php echo (session('id')); ?>">修改密码</a></li>
                <li><a href="<?php echo U('Login/logout');?>">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<!--menu-->
<div class="sidebar-wrap">
    <div class="sidebar-title">
        <h1>菜单</h1>
    </div>
    <div class="sidebar-content">
        <ul class="sidebar-list">
            <li>
                <a href="#"><i class="icon-font">&#xe003;</i>操作</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Banner/lis');?>"><i class="icon-font">&#xe008;</i>Banner</a></li>
                    <li><a href="<?php echo U('Article/lis');?>"><i class="icon-font">&#xe008;</i>文章</a></li>
                    <li><a href="<?php echo U('Cate/lis');?>"><i class="icon-font">&#xe005;</i>栏目</a></li>
                    <li><a href="<?php echo U('Link/lis');?>"><i class="icon-font">&#xe052;</i>链接</a></li>
                    <li><a href="<?php echo U('Manager/lis');?>"><i class="icon-font">&#xe006;</i>管理员</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>



<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Index/index');?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo U('Manager/lis');?>">管理员管理</a><span class="crumb-step">&gt;</span><span>修改管理员</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('Manager/edit');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo ($managers["id"]); ?>" name="id">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>管理员名称：</th>
                                <td>
                                    <!--<input class="common-text required" id="catename" name="catename" size="50" value="<?php echo ($cater["catename"]); ?>" type="text">-->
                                    <p><?php echo ($managers["username"]); ?></p>
                                </td>
                            </tr>

                            <!--<tr>
                                <th><i class="require-red">*</i>原密码：</th>
                                <td>
                                    <input class="common-text required" id="oripassword" name="oripassword" size="50" placeholder="请输入原密码"  type="password">
                                </td>
                            </tr>-->

                            <tr>
                                <th><i class="require-red">*</i>新密码：</th>
                                <td>
                                    <input class="common-text required" id="password" name="password" size="50" placeholder="请输入新密码"  type="password">
                                </td>
                            </tr>

                            <!--
                            <tr>
                                <th><i class="require-red">*</i>确认新密码：</th>
                                <td>
                                    <input class="common-text required" id="rpassword" name="rpassword" size="50" placeholder="确认新密码"  type="password">
                                </td>
                            </tr>
                            -->
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <a class="btn btn6" href="<?php echo U('Manager/lis');?>">返回</a>
                                    <!--<input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">-->
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>