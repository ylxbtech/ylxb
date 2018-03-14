<?php if (!defined('THINK_PATH')) exit();?>
<!--head-->
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>yl_blog</title>
    <link rel="shortcut icon" href="/testylxb/Public/Admin/img/ylxb-logo1.png" />
    <link rel="stylesheet" type="text/css" href="/testylxb/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/testylxb/Public/Admin/css/main.css"/>
    <script type="text/javascript" src="/testylxb/Public/Admin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="<?php echo U('Index/index');?>" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="https://ylxb.tech/" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="<?php echo U('Index/index');?>">欢迎您，<?php echo (session('username')); ?></a></li>
                <li><a href="/testylxb/index.php/Admin/Manager/edit/id/<?php echo (session('id')); ?>">修改密码</a></li>
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

<!--content-->
<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span style="color: red">欢迎来到YL_BLOG后端管理界面</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>快捷操作</h1>
            </div>
            <div class="result-content">
                <div class="short-wrap">
                    <a href="<?php echo U('Article/add');?>"><i class="icon-font">&#xe001;</i>新增文章</a>
                    <a href="<?php echo U('Cate/add');?>"><i class="icon-font">&#xe048;</i>新增栏目</a>
                    <a href="<?php echo U('Link/add');?>"><i class="icon-font">&#xe052;</i>新增链接</a>
                    <a href="#"><i class="icon-font">&#xe01e;</i>作品评论</a>
                </div>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                            <label class="res-lab"><?php echo ($key); ?>：</label><span class="res-info"><?php echo ($v); ?></span>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>使用帮助</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">YL_BLOG</label>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>