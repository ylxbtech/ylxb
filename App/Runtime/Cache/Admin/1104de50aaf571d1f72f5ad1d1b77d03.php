<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/yl_blog/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/yl_blog/Public/Admin/css/main.css"/>
    <script type="text/javascript" src="/yl_blog/Public/Admin/js/libs/modernizr.min.js"></script>

    <!--Ueditor 测试-->
    <script type="text/javascript" charset="utf-8" src="/yl_blog/Public/Admin/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/yl_blog/Public/Admin/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="__UEDEITOR__/lang/zh-cn/zh-cn.js"></script>

</head>
<body>
<!--head-->
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>yl_blog</title>
    <link rel="shortcut icon" href="/yl_blog/Public/Admin/img/ylxb-logo1.png" />
    <link rel="stylesheet" type="text/css" href="/yl_blog/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/yl_blog/Public/Admin/css/main.css"/>
    <script type="text/javascript" src="/yl_blog/Public/Admin/js/libs/modernizr.min.js"></script>
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
                <li><a href="/yl_blog/index.php/Admin/Manager/edit/id/<?php echo (session('id')); ?>">修改密码</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Index/index');?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo U('Article/lis');?>">文章管理</a><span class="crumb-step">&gt;</span><span>修改文章</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('Article/edit');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>标题：</th>
                            <td>
                                <input class="common-text required" id="title" name="title" size="50" value="<?php echo ($articler["title"]); ?>" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>描述：</th>
                            <td>
                                <textarea class="common-text required" id="desc" name="desc" style="font-size: 16px;padding: 4px 4px;width: 420px;height: 50px;margin-top: 15px"><?php echo ($articler["desc"]); ?></textarea>
                            </td>
                        </tr>

                        <tr style="line-height: 0px ">
                            <th><i class="require-red">*</i>内容：</th>
                            <td><textarea name="content" id="editor" type="text/plain" style="width:1024px;height:500px;"><?php echo ($articler["content"]); ?></textarea></td>
                        </tr>

                        <tr>
                            <th><i class="require-red">*</i>图片：</th>
                            <td>
                                <input type="file" name="pic">
                                <?php if($articler["pic"] != ''): ?><a target="_blank" href="/yl_blog/<?php echo ($rows["pic"]); ?>" title="点击查看原图"><img src="/yl_blog/<?php echo ($articler["pic"]); ?>" width="100px" height="60px"></a>
                                    <?php else: ?>
                                    无文章封面图片<?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>栏目：</th>
                            <td>
                                <select name="cateid">
                                    <!--<option value="volvo">选择栏目</option>-->
                                    <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><option <?php if($cate['id'] == $articler['cateid']): ?>selected="selected"<?php endif; ?> value="<?php echo ($cate["id"]); ?>"><?php echo ($cate["catename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                <a class="btn btn6" href="<?php echo U('Article/lis');?>">返回</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>

<!--ueditor-->
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');

    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
</script>

</body>
</html>