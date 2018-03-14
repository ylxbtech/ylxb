<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ylxb-About</title>
    <link rel="stylesheet" type="text/css" href="/yl_blog/Public/Home/css/base.css" />
    <link rel="stylesheet" href="/yl_blog/Public/Home/css/jquery-ui.min.css" type="text/css">
    <script type="text/javascript" src="/yl_blog/Public/Home/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/yl_blog/Public/Home/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="/yl_blog/Public/Home/css/about.css" type="text/css">
    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
</head>
<!--head-->
<!--©ylxb.tech      联系QQ：1831405008
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
--来自单生狗的凝视
-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/yl_blog/Public/Home/img/ylxb-logo1.png" />
    <script src="/yl_blog/Public/Home/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/yl_blog/Public/Home/css/ys.css" type="text/css">
    <script type="text/javascript" src="/yl_blog/Public/Home/js/ys.js"></script>
    <script type="text/javascript" src="/yl_blog/Public/Home/js/fhdb.js"></script>
    <link rel="stylesheet" href="/yl_blog/Public/Home/css/animated-border.min.css">
</head>


<!--头部导航条-->

<div id="tbwz">
    <div class="tbnr clearfix"><a href="<?php echo U('Index/index');?>" style="color: white;font-size: 48px;font-family: 'Comic Sans MS';line-height: 50px">
        <li id="logo"></li></a>
        <div class="dhwz">
            <ul class="dhxx">
                <li><a href="<?php echo U('Index/index');?>" class="ui-box top-slideOpposite">首页</a></li>
                <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><li><a href="/yl_blog/index.php/Home/Cate/index/id/<?php echo ($cate["id"]); ?>"class="ui-box top-slideOpposite"><?php echo ($cate["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                <li><a href="/yl_blog/index.php/Admin/Login/index" class="dlys"></a></li>

<!--
                <li><a href="">日常分享</a></li>
                <li><a href="">站内公告</a></li>
                <li><a href="">留言</a></li>
                <li><a href="">关于</a></li>


                -->
            </ul>
        </div>
    </div>
</div>
<body class="demo-1 loading">

<!--<div class="hint" title="提示">您可敲击键盘上的左右方向键或点击下方的切换按钮更换内容</div>-->

<svg class="hidden">
    <symbol id="icon-arrow" viewBox="0 0 24 24">
        <title>arrow</title>
        <polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
    </symbol>
    <symbol id="icon-drop" viewBox="0 0 24 24">
        <title>drop</title>
        <path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
    </symbol>
    <symbol id="icon-github" viewBox="0 0 32.6 31.8">
        <title>github</title>
        <path d="M16.3,0C7.3,0,0,7.3,0,16.3c0,7.2,4.7,13.3,11.1,15.5c0.8,0.1,1.1-0.4,1.1-0.8c0-0.4,0-1.4,0-2.8c-4.5,1-5.5-2.2-5.5-2.2c-0.7-1.9-1.8-2.4-1.8-2.4c-1.5-1,0.1-1,0.1-1c1.6,0.1,2.5,1.7,2.5,1.7c1.5,2.5,3.8,1.8,4.7,1.4c0.1-1.1,0.6-1.8,1-2.2c-3.6-0.4-7.4-1.8-7.4-8.1c0-1.8,0.6-3.2,1.7-4.4C7.4,10.7,6.8,9,7.7,6.8c0,0,1.4-0.4,4.5,1.7c1.3-0.4,2.7-0.5,4.1-0.5c1.4,0,2.8,0.2,4.1,0.5c3.1-2.1,4.5-1.7,4.5-1.7c0.9,2.2,0.3,3.9,0.2,4.3c1,1.1,1.7,2.6,1.7,4.4c0,6.3-3.8,7.6-7.4,8c0.6,0.5,1.1,1.5,1.1,3c0,2.2,0,3.9,0,4.5c0,0.4,0.3,0.9,1.1,0.8c6.5-2.2,11.1-8.3,11.1-15.5C32.6,7.3,25.3,0,16.3,0z"/>
    </symbol>
</svg>
<main>
    <div class="slideshow">
        <div class="slides">
            <div class="slide slide--current">
                <div class="slide__img" style="background-image: url(/yl_blog/Public/Home/img/25.jpg)"></div>
                <h2 class="slide__title">坚持</h2>
                <p class="slide__desc">宝剑锋从磨砺出，梅花香自苦寒来</p>
                <a class="slide__link" href="#" style="display: none">坚持</a>
            </div>
            <div class="slide">
                <div class="slide__img" style="background-image: url(/yl_blog/Public/Home/img/26.jpg)"></div>
                <h2 class="slide__title">恒心</h2>
                <p class="slide__desc">贵有恒何必三更眠五更起,最无益只怕一日曝十日寒</p>
                <a class="slide__link" href="#" style="display: none">毅力</a>
            </div>
            <div class="slide">
                <div class="slide__img" style="background-image: url(/yl_blog/Public/Home/img/27.jpg)"></div>
                <h2 class="slide__title">进取</h2>
                <p class="slide__desc">一个人在科学探索的道路上，走过弯路，犯过错误，并不是坏事，更不是什么耻辱，要在实践中勇于承认和改正错误</p>
                <a class="slide__link" href="#" style="display: none">进取</a>
            </div>
            <div class="slide">
                <div class="slide__img" style="background-image: url(/yl_blog/Public/Home/img/28.jpg)"></div>
                <h2 class="slide__title">理想</h2>
                <p class="slide__desc">启发我并永远使我充满生活乐趣的理想是真、善、美</p>
                <a class="slide__link" href="#" style="display: none">理想</a>
            </div>
        </div>
        <nav class="slidenav">
            <button class="slidenav__item slidenav__item--prev">Previous</button>
            <span>/</span>
            <button class="slidenav__item slidenav__item--next">Next</button>
        </nav>
    </div>
</main>


<script src="assets/js/demo.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/anime.min.js"></script>
<script src="assets/js/demo1.js"></script>
<script type="text/javascript">
    $(function () {
        $('.hint').dialog({
            show: {
                effect: "size",
                duration: 1000
            },
            hide: {
                effect: "size",
                duration: 1000
            }
        });
    });
</script>
</body><!--bottom-->

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
            <p>Copyright © 2016-2018 ylxb. All rights reserved.</p>
            <p>蜀ICP备16036346号&emsp;&emsp;Versions 1.0.0 beta</p>
            <h4>注释</h4>
            <p>ylxb寓意一路相伴，开头的yl是我名字的拼音首字母，xb的意思不可言传只可体会，域名以.tech结尾，主要是做PHP开发的所以选了这个技术的域名</p>
            <br>
            <p><b>推荐：</b>使用PC端Chrome浏览器，分辨率在1920×1080访问最佳</p>
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
</html>