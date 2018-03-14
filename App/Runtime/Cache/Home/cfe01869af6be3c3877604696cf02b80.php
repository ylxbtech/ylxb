<?php if (!defined('THINK_PATH')) exit();?><!--head-->
<!--©ylxb.tech      QQ：1831405008
─────────▄──────────────▄
────────▌▒█───────────▄▀▒▌
────────▌▒▒▀▄───────▄▀▒▒▒▐
───────▐▄▀▒▒▀▀▀▀▄▄▄▀▒▒▒▒▒▐
─────▄▄▀▒▒▒▒▒▒▒▒▒▒▒█▒▒▄█▒▐
───▄▀▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▀██▀▒▌
──▐▒▒▒▄▄▄▒▒▒▒▒▒▒▒▒▒▒▒▒▀▄▒▒▌
──▌▒▒▐▄█▀▒▒▒▒▄▀█▄▒▒▒▒▒▒▒█▒▐
─▐▒▒▒▒▒▒▒▒▒▒▒▌██▀▒▒▒▒▒▒▒▒▀▄▌
─▌▒▀▄██▄▒▒▒▒▒▒▒▒▒▒▒░░░░▒▒▒▒▌
─▌▀▐▄█▄█▌▄▒▀▒▒▒▒▒▒░░░░░░▒▒▒▐
▐▒▀▐▀▐▀▒▒▄▄▒▄▒▒▒▒▒░░░░░░▒▒▒▒▌
▐▒▒▒▀▀▄▄▒▒▒▄▒▒▒▒▒▒░░░░░░▒▒▒▐
─▌▒▒▒▒▒▒▀▀▀▒▒▒▒▒▒▒▒░░░░▒▒▒▒▌
─▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▐
──▀▄▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▄▒▒▒▒▌
────▀▄▒▒▒▒▒▒▒▒▒▒▄▄▄▀▒▒▒▒▄▀
───▐▀▒▀▄▄▄▄▄▄▀▀▀▒▒▒▒▒▄▄▀
──▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▀▀
-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/Public/Home/img/ylxb-logo1.png" />
    <script src="/Public/Home/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/Public/Home/css/ys.css" type="text/css">
    <script type="text/javascript" src="/Public/Home/js/ys.js"></script>
    <script type="text/javascript" src="/Public/Home/js/fhdb.js"></script>
    <link rel="stylesheet" href="/Public/Home/css/animated-border.min.css">
</head>


<!--头部导航条-->
<div id="headbox">
    <div class="headcontent clearfix"><a href="<?php echo U('Index/index');?>" style="color: white;font-size: 48px;font-family: 'Comic Sans MS';line-height: 50px">
        <li id="logo"></li></a>
        <div class="navbox">
            <ul class="nav">
                <li><a href="<?php echo U('Index/index');?>" class="ui-box top-slideOpposite">首页</a></li>
                <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><li><a href="/index.php/Home/Cate/index/id/<?php echo ($cate["id"]); ?>"class="ui-box top-slideOpposite"><?php echo ($cate["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                <li><a href="/index.php/Admin/Login/index" class="loginico"></a></li>
            </ul>
        </div>
    </div>
</div>

<head>
    <title>YLXB-<?php echo ($article["title"]); ?></title>
</head>

<body>

<div id="contentbox">
    <div class="content clearfix">
        <div class="newArticle clearfix" style="max-width: 1138px;padding: 40px">

            <p style="font-size: 30px;text-align: center;"><?php echo ($article["title"]); ?></p>
            <p style="text-align: center;margin-top: 10px;margin-bottom: 10px"><span>所属分类：<?php echo ($catename); ?></span>&emsp;<span>最后修改时间：<?php echo (date('Y-m-d H:i:s',$article["time"])); ?></span></p>

                <!--<?php echo ($article["content"]); ?>-->
                <?php echo htmlspecialchars_decode($article['content']) ?>
            <p style="margin-top: 10px">
            <p>封面图片：</p>
                <img src="/<?php echo ($article["pic"]); ?>" style="max-width: 1180px">
            </p>
        </div>
	
<!--PC和WAP自适应版-->
<script type="text/javascript"> 
(function(){ 
var appid = 'cytvLdhfx'; 
var conf = 'prod_7d16ff36c27bf8e8b2ea4a10b8efe6f2'; 
var width = window.innerWidth || document.documentElement.clientWidth; 
if (width < 960) { 
window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("https://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>

    </div>
</div>



</body>
<!--bottom-->

<a href="#0" class="cd-top">Top</a>

<div id="bottom">
    <div class="bottomnr clearfix">
        <div class="bottom1">
            <h4>我很支持他们</h4>
            <div style="cursor: pointer" class="link">
                <?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$links): $mod = ($i % 2 );++$i;?><a href="<?php echo ($links["url"]); ?>" target="_blank" title="<?php echo ($links["desc"]); ?>"><?php echo ($links["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>


            </div>
            <h4>反馈邮箱：</h4>
            <p><a href="mailto:bug@ylxb.tech" title="点击发送反馈邮件">bug@ylxb.tech</a></p>
        </div>

        <div class="bottom2">
            <h4>关于本站</h4>
            <p>Copyright © 2018 ylxb. All rights reserved.</p>
            <p>蜀ICP备16036346号&emsp;&emsp;Versions 1.0.1</p>
            <h4>注释</h4>
            <p>ylxb寓意一路相伴，开头的yl是我名字的拼音首字母，xb的意思不可言传只可体会，域名以.tech结尾，主要是做PHP开发的所以选了这个技术的域名</p>
            <br>
            <p><b>推荐：</b>使用PC端Chrome浏览器，分辨率在1440×900-1920×1080访问最佳</p>
        </div>

    </div>

</div>

<script type="application/javascript">
    $(function () {
        $('.dhxx ul a').click(function () {
            alert('测试');
        })
    });
</script>

</html>