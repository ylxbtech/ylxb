<?php if (!defined('THINK_PATH')) exit();?><!--head-->
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


<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Index/index');?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">管理员管理</span></div>
        </div>

        <div class="result-wrap">
            <form name="myform" id="myform" method="post" action="<?php echo U('Cate/sort');?>">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo U('Manager/add');?>"><i class="icon-font"></i>新增管理员</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th style="text-align: center">ID</th>
                            <th>管理员用户名</th>
                            <th>最后修改时间</th>
                            <th>操作</th>
                        </tr>

                        <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rows): $mod = ($i % 2 );++$i;?><tr>
                                    <td style="text-align: center"><?php echo ($rows["id"]); ?></td>
                                    <td title=""><a target="_blank" href="#" title=""><?php echo ($rows["username"]); ?></a></td>
                                    <td title=""><?php echo (date('Y-m-d H:i:s',$rows["time"])); ?></td>
                                    <td>
                                        <a class="link-update" href="/testylxb/index.php/Admin/Manager/edit/id/<?php echo ($rows["id"]); ?>">修改</a>
                                        <a class="link-del" onclick="return confirm('确认删除？')" href="/testylxb/index.php/Admin/Manager/del/id/<?php echo ($rows["id"]); ?>">删除</a>

                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>


                    </table>
                    <!--<div class="list-page"> 1 条 1/1 页</div>-->
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>