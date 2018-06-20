<?php
session_start();
#接受提交过来的用户名及密码
$username = trim($_POST['name']);//用户名
$password = trim($_POST['passwd']);//密码
$code = trim($_POST["captcha"]);
 	//将字符串都转成小写然后再进行比较
 if (strtolower($code) != strtolower($_SESSION['captcha_code'])){
     echo '请输入正确的验证码';
header("refresh:1;url=index.php");
exit;
}
#拿着提交过来的用户名和密码去数据库查找，看是否存在此用户名以及其密码  
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
header("refresh:3;url=index.php");
     print('<br>三秒后自动跳转到新闻网~~');
}
?> 