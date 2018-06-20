
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>新闻网后台管理中心</title>  
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>  
</head>
<body>
<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">           
            </div>         
            <form  method="post">
            <div class="panel loginbox">
                <div class="text-center margin-big padding-big-top"><h1>新闻网后台管理中心</h1></div>
                <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input input-big" name="name" placeholder="登录账号" data-validate="required:请填写账号" />
                            <span class="icon icon-user margin-small"></span>
                        </div>
                    </div>
					
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="passwd" placeholder="登录密码" data-validate="required:请填写密码" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
					
						
                <div style="padding:30px;"><input type="submit" class="button button-block bg-main text-big input-big" value="登录">
                     
                </div>
                
            </div>
            </form>          
        </div>
    </div>
	<script type="text/javascript">
document.getElementById("neirong").style.height=document.getElementById("neirong").offsetWidth*1.17+"px";
</script>
<?php
include("sqlcon.php");
 	header("Content-Type:text/html;charset=utf-8");
 	//开启session
 	session_start();
 	//获取用户输入的验证码字符串
 	$code = trim($_POST["captcha"]);
 	//将字符串都转成小写然后再进行比较

 		if(!empty($_POST['name']) && !empty($_POST['passwd']))
	{
$adminsql=mysqli_query($conn,"select adminid,password from admin where name='$_POST[name]';");
$adminrow=@mysqli_fetch_object($adminsql);
if(@$adminrow->password==md5($_POST['passwd']))
	{
$_SESSION["admin"]=$adminrow->adminid;
mysqli_close($conn);
$url = 'admin.php';
header("Location:$url");
	}
else{
echo "<script>alert('用户名或密码错误！');</script>";
} 
	}
	
	
?>


</body>
</html>