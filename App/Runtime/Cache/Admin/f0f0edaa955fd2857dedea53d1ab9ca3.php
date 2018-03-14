<?php if (!defined('THINK_PATH')) exit();?><!--©ylxb.tech
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>YLXB-Admin-Login</title>
    <link rel="stylesheet" type="text/css" href="/testylxb/Public/Admin/css/login.css">
    <link rel="shortcut icon" href="/testylxb/Public/Admin/img/ylxb-logo1.png" />
</head>
<body>

<!--登录-->
<form action="<?php echo U('Login/index');?>" method="post" id="login">
    <div class="login_box">
        <div class="login">
            <div class="dltx"></div>
            <div class="dlwz">	<!--登录位置-->
                <div class="dlbd">	<!--登陆表单-->
                    <div class="zh"><input type="text" id="username" name="username" placeholder="用户名" autocomplete="on"></div>
                    <div class="mm"><input type="password" id="password" name="password" placeholder="密码" autocomplete="off"></div>
                    <div class="yzm">
                        <input type="text" id="Code" name="Code" placeholder="请输入验证码" style="width:170px;position: relative;top: -22px;" autocomplete="off">
                        <img src="<?php echo U('verify');?>" class="changeimg verifyimg yzmtp" style="height: 54px"  alt="验证码加载失败" title="点击即可刷新验证码" onClick="this.src=this.src+'?'+Math.random()">
                    </div>
                    <div class="dl"><input type="submit" id="dlan" value="登录"></div>
                    <div><a href="/testylxb/index.php/Home/Index/index" class="back_home">返回首页</a></div>
            </div>
        </div>
    </div>
</form>

</body>
</html>