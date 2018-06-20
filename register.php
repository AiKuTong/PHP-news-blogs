<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>新用户注册</title>  
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
	<link href="register.css" type="text/css" rel="stylesheet" media="all">
<script type="text/javascript">
function Submit()
{
var s=parseInt(document.register['phone'].value);
if(document.register['name'].value=='')
	{
	alert ("您未填写用户名，请输入吧!");
	document.register.name.focus();
	}
	else if(document.register['passwd1'].value=='')
	{
	alert ("请输入密码!");
	document.register.passwd1.focus();
	}
	else if(document.register['passwd2'].value=='')
	{
	alert ("请输入确认密码!");
	document.register.passwd2.focus();
	}
	else if(document.register['passwd1'].value!=document.register['passwd2'].value)
	{
	alert ("两次输入密码不一致!");
	document.register.passwd2.focus();
	}
	else if(!(/^1\d{10}$/g.test(s)))
	{
	alert ("亲，手机号码很重要哦，请输入吧!");
	document.register.phone.focus();
	}
	else if(document.register['address'].value=='')
	{
	alert ("您未填写住址，请输入吧!");
	document.register.address.focus();
	}
	else
	document.getElementById("register").submit();
}
</script>	
</head>
<body>
<?php
include("sqlcon.php");
if(!empty($_POST['name']) && !empty($_POST['passwd1']) && !empty($_POST['passwd2']) && !empty($_POST['phone']) && !empty($_POST['address']))
	{
	$password=md5($_POST['passwd1']);
	$sql=mysqli_query($conn,"insert into acc(name,password,phone,address) values('$_POST[name]','$password','$_POST[phone]','$_POST[address]');");
	if($sql)
		{
		echo "<script>alert('注册成功！用户名为：$_POST[name]，3秒后自动转到登录页面！');</script>";
		echo "<script type='text/javascript'>setTimeout(\"window.location.href='acclogin.php'\",3000);</script>";
		}
		else
		echo "<script>alert('注册失败！');</script>";
	}
mysqli_close($conn);
?>
<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">           
            </div>         
            <form name="register" id="register" method="post" action="">
            <div class="panel loginbox">
                <div class="text-center margin-big padding-big-top"><h1>用户注册中心</h1></div>
                <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input input-big" name="name" size="18" maxlength="16" placeholder="用户名" data-validate="required:请填写用户名" />
                            <span class="icon icon-user margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="passwd1" size="18" maxlength="16" placeholder="密码" data-validate="required:请填写密码" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
					 <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="passwd2"  size="18" maxlength="16" placeholder="确认密码" data-validate="required:请再次填写密码" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
                   <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input input-big" name="phone"  size="18" maxlength="11" placeholder="手机号" data-validate="required:请填写手机号" />
                            
                        </div>
                    </div>
					<div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input input-big" name="address"  size="18" maxlength="25" placeholder="住址" data-validate="required:请填写住址" />
                            
                        </div>
                    </div>
                </div>
               
			<div class="button button-block bg-main text-big input-big" onClick="Submit();" align="center">
			注册
		</div>
            </form>          
        </div>
    </div>
</div>

</body>
</html>