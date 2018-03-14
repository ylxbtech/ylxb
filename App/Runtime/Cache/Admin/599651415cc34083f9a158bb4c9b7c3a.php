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
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Index/index');?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">链接管理</span></div>
        </div>

        <div class="result-wrap">
            <form name="myform" id="myform" method="post" action="<?php echo U('Link/sort');?>">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo U('Link/add');?>"><i class="icon-font"></i>新增链接</a>
                        <!--<a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>-->
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i><input type="submit" value="更新排序"></a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>排序</th>
                            <th>ID</th>
                            <th>标题</th>
                            <th>链接</th>
                            <th>描述</th>
                            <th>操作</th>
                        </tr>

                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rows): $mod = ($i % 2 );++$i;?><tr>
                                    <td class="tc">
                                        <input name="id" value="<?php echo ($rows["id"]); ?>" type="checkbox">
                                    </td>
                                    <!--<td class="tc"><input name="id[]" value="<?php echo ($rows["id"]); ?>" type="checkbox"></td>-->
                                    <td>
                                        <!--<input name="ids[]" value="<?php echo ($rows["id"]); ?>" type="hidden">-->
                                        <input class="common-input sort-input" name="<?php echo ($rows["id"]); ?>" value= "<?php echo ($rows["sort"]); ?>" type="text">
                                    </td>
                                    <td><?php echo ($rows["id"]); ?></td>
                                    <td title=""><a target="_blank" href="<?php echo ($rows["url"]); ?>" title="标题"><?php echo ($rows["title"]); ?></a></td>
                                    <td title=""><a target="_blank" href="<?php echo ($rows["url"]); ?>" title="链接"><?php echo ($rows["url"]); ?></a></td>
                                    <td title=""><a target="_blank" title="描述"><?php echo ($rows["desc"]); ?></a></td>
                                    <td>
                                        <a class="link-update" href="/testylxb/index.php/Admin/Link/edit/id/<?php echo ($rows["id"]); ?>">修改</a>
                                        <a class="link-del" onclick="return confirm('确认删除？')" href="/testylxb/index.php/Admin/Link/del/id/<?php echo ($rows["id"]); ?>">删除</a>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"><?php echo ($page); ?></div>

                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>