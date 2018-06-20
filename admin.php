<!DOCTYPE HTML>
<html>
<head>
<title>后台-新闻网</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<link href="css/admin1.css" type="text/css" rel="stylesheet" media="all">
<script src="ajax/store_orderentry_model.js"></script>
<script src="ajax/store_orderentry_color.js"></script>
<script src="ajax/store_orderentry_guzhang.js"></script>
<script type="text/javascript" src="ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
</script>
</head>
<body>
<?php
include("sqlcon.php");



if(empty($_GET['link']))
{
$_GET['link']='home';
}

session_start();
if(empty($_SESSION["admin"]))
{
$url = 'adminlogin.php';
header("Location:$url");
}
else
$session=$_SESSION["admin"];

if($_GET["link"]=="logoff")
{
unset($_SESSION["admin"]);
$url = 'adminlogin.php';
header("Location:$url");
}
?>




<div id="banner_top">
<div id="banner_top_l">
</div>
<div id="banner_top_r">
<a class="top_a" href="admin.php?link=logoff">退出</a>
</div>
</div>

<div id="daohang">
<br><br>
<div<?php if(@$_GET['link']=='home') echo ' id="daohangnow"'; ?>>
<a href="admin.php?link=home"><b>首　　页</b></a>
</div>
<br>
<div<?php if(@$_GET['link']=='add') echo ' id="daohangnow"'; ?>>
<a href="admin.php?link=add"><b>发布新闻</b></a>
</div>
<br>
<div<?php if(@$_GET['link']=='note') echo ' id="daohangnow"'; ?>>
<a href="admin.php?link=note"><b>发布新闻记录</b></a>
</div>
<br>
<div<?php if(@$_GET['link']=='acc') echo ' id="daohangnow"'; ?>>
<a href="admin.php?link=acc"><b>用户管理</b></a>
</div>
</div>


<div id="neirong">
<?php
if($_GET["link"]=="home")
{
?>
<div class="neirongkuang">
<center>
欢迎光临！
</center>
</div>
<?php
}



if($_GET["link"]=="add")
{
if(!empty($_POST['title']) && !empty($_POST['content']))
{
	$content=htmlentities($_POST["content"],ENT_COMPAT,'utf-8');
	$content=@ereg_replace("\r\n","<br>",$content);
	$sql=mysqli_query($conn,"insert into article(title,content) values('$_POST[title]','$content')");
	if($sql)
		echo '添加成功！';
}
?>
<div class="neirongkuang">
<center>
<form name="" method="post" action="">
标题：<input name="title" type="text" size="60" maxlength="64">
<br><br>
<textarea name="content" id="content" rows="25" cols="86" maxlength="10000">
</textarea>
<br>
<br>
<input type="submit" value="发布">
</form>
</center>
</div>
<?php
}



if($_GET["link"]=="note")
{
if(!empty($_GET['delarticleid']))
{
	$sql=mysqli_query($conn,"delete from article where articleid=$_GET[delarticleid]");
	if($sql)
		echo '成功删除！';
}
?>
<div class="neirongkuang">
	<table width="100%">
	<tr><th>编号</th><th>标题</th><th>发布时间</th><th>操作</th></tr>
	<?php
	$articlesql=mysqli_query($conn,"select * from article;");
	while($articlerow=mysqli_fetch_object($articlesql))
	{
		echo "<tr><td>$articlerow->articleid</td><td>$articlerow->title</td><td>$articlerow->time</td><td><a href='admin.php?link=note&delarticleid=$articlerow->articleid'>删除</a></td></tr>";
	}
	?>
	</table>
</div>
<?php
}






if($_GET["link"]=="acc")
{
if(!empty($_GET['delaccid']))
{
	$sql=mysqli_query($conn,"delete from acc where accid=$_GET[delaccid]");
	if($sql)
		echo '成功删除！';
}
?>
<div class="neirongkuang">
	<table width="100%">
	<tr><th>编号</th><th>用户名</th><th>手机号</th><th>住址</th><th>操作</th></tr>
	<?php
	$accsql=mysqli_query($conn,"select * from acc;");
	while($accrow=mysqli_fetch_object($accsql))
	{
		echo "<tr><td>$accrow->accid</td><td>$accrow->name</td><td>$accrow->phone</td><td>$accrow->address</td><td><a href='admin.php?link=acc&delaccid=$accrow->accid'>删除</a></td></tr>";
	}
	?>
	</table>
</div>
<?php
}
?>
</div>
<script type="text/javascript">
if(document.documentElement.clientHeight>500)
{
document.getElementById("daohang").style.height=document.documentElement.clientHeight-78+"px";
document.getElementById("neirong").style.height=document.documentElement.clientHeight-78+"px";
}
</script>
<script type="text/javascript">
        UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:200})
    </script>

<div style="clear:both;"></div>

<?php
mysqli_close($conn);
?>
</body>
</html>