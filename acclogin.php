<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>新闻网-用户登录</title>  
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
	<link href="register.css" type="text/css" rel="stylesheet" media="all">

</head>
<body>

<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">           
            </div>         
            <form method="post">
            <div class="panel loginbox">
                <div class="text-center margin-big padding-big-top"><h1>用户登陆中心</h1></div>
                <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input input-big" name="name" size="18" maxlength="16" placeholder="用户名" data-validate="required:请填写用户名" />
                            <span class="icon icon-user margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="passwd" size="18" maxlength="16" placeholder="密码" data-validate="required:请填写密码" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>

               
		<div style="padding:30px;"><input type="submit" class="button button-block bg-main text-big input-big" value="登录">
                       
                </div>
            </form>          
        </div>
    </div>
</div><script type="text/javascript">
document.getElementById("neirong").style.height=document.getElementById("neirong").offsetWidth*1.17+"px";
</script>
<?php
include("sqlcon.php");
if(!empty($_POST['name']) && !empty($_POST['passwd']))
{
$accsql=mysqli_query($conn,"select accid,password from acc where name='$_POST[name]';");
$accrow=mysqli_fetch_object($accsql);
if(@$accrow->password==md5($_POST['passwd']))
{
session_start();
$_SESSION["acc"]=$accrow->accid;
mysqli_close($conn);
$url = 'index.php';
header("Location:$url");
}
else
echo "<script>alert('用户名或密码错误！');</script>";
}
?>

</body>
</html>