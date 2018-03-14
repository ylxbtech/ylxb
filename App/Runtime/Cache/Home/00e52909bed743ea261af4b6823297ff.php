<?php if (!defined('THINK_PATH')) exit();?>





<!--head-->
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
    <link rel="shortcut icon" href="/testylxb/Public/Home/img/ylxb-logo1.png" />
    <script src="/testylxb/Public/Home/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/testylxb/Public/Home/css/ys.css" type="text/css">
    <script type="text/javascript" src="/testylxb/Public/Home/js/ys.js"></script>
    <script type="text/javascript" src="/testylxb/Public/Home/js/fhdb.js"></script>
    <link rel="stylesheet" href="/testylxb/Public/Home/css/animated-border.min.css">
</head>


<!--头部导航条-->
<div id="headbox">
    <div class="headcontent clearfix"><a href="<?php echo U('Index/index');?>" style="color: white;font-size: 48px;font-family: 'Comic Sans MS';line-height: 50px">
        <li id="logo"></li></a>
        <div class="navbox">
            <ul class="nav">
                <li><a href="<?php echo U('Index/index');?>" class="ui-box top-slideOpposite">首页</a></li>
                <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><li><a href="/testylxb/index.php/Home/Cate/index/id/<?php echo ($cate["id"]); ?>"class="ui-box top-slideOpposite"><?php echo ($cate["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                <li><a href="/testylxb/index.php/Admin/Login/index" class="loginico"></a></li>
            </ul>
        </div>
    </div>
</div>


<head>
    <title>一路相伴</title>
</head>

<body>

<div id="contentbox">
    <div class="content clearfix">
        <!-- 3D banner -->
        <section class="tplbwz">
            <div class="cover">
                <div class="div_a">
                    <ul id="banner">
                        <div id="stra">
                            <?php if(is_array($picList)): $i = 0; $__LIST__ = $picList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$banner): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($banner["url"]); ?>" target="_blank" style="width:1220px;height:450px;background:url('/testylxb/<?php echo ($banner["pic"]); ?>') no-repeat; display:block;"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </div>

                    </ul>
                    <div class="btn">
                        <span class="hover"></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </section>
        <!--  3D banner end -->

        <!--科普 改为内容-->
        <div class="newArticle clearfix">
            <p class="newArticle_bt">最新文章&消息(不定期更新)</p>
            <ul class="newArticle_list">

                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><a href="/testylxb/index.php/Home/Article/index/id/<?php echo ($new["id"]); ?>" target="_blank">
                        <li style="padding-right: 20px" class="ui-box forwardBorderTrain">
                            <img src="/testylxb/<?php echo ($new["pic"]); ?>" width="300px" height="200px" style="margin-left: 20px;float: left;margin-right: 50px">
                            <h2><?php echo ($new["title"]); ?></h2>
                            <p>最后修改时间：<?php echo (date('Y-m-d H:i:s',$new["time"])); ?> &emsp; <!--所属栏目：<?php echo ($list["catename"]); ?>--></p>
                            <h3><?php echo ($new["desc"]); ?></h3>
                        </li>
                    </a><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--分页-->
                <div class="list-page"><?php echo ($page); ?></div>


            </ul>
        </div>

    </div>
</div>



<!--banner 3D-->
<script>
    var origin = {
        X: document.body.clientWidth / 2,
        Y: document.body.clientHeight / 8
    };
    var o = document.querySelector('.cover');
    document.querySelector('section').onmouseover=function(){
        document.querySelector('section').addEventListener('mousemove', function (e) {
            var rotate = {x: 1 - e.pageY / origin.Y, y: e.pageX / origin.X - 1};
            var transform = "rotateX(" + rotate.x *10 + "deg) rotateY(" + rotate.y * 10 + "deg)";
            o.style.transform = transform;
            o.style.boxShadow = -parseInt(rotate.y * 20) + 'px '+ parseInt(rotate.x * 20+20)+ 'px ' + '400px #333';
        });
    };
    document.querySelector('section').onmouseout=function(){
        o.style.transform ="rotateX(0deg) rotateY(0deg)";
        o.style.boxShadow ='0px 0px';
    }

</script>

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