<!--
★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★




※※※※※※※※※※※※※※※※※※※※※※※※※※※※※※※※※
※                        〓TongSir博客〓                       ※
※                        域名:TongSir.cn                       ※
※   ╭══════════════════════════╮                                ※
※  ‖      新闻  网页  贴吧  知道  图片  视频              ‖      ※
※  ‖     ┏━━━━━━━━━━━━━━━━┑┌────┒ ‖  ※
※  ‖主站 ┃  TongSir                       ││百度一下┃ ‖  ※
※  ‖     ┖────────────────┘┕━━━━┛ ‖  ※
※  ╰═══════════════════════════╯  ※
※                   联系邮箱:admin@tongsir.cn                  ※
※※※※※※※※※※※※※※※※※※※※※※※※※※※※※※※※※




TongSir博客:是一个分享个人每天学习后的成果、个人所见、所闻及所得的资源共享型博客，
            专注于分享Linux，Java，wp优化及有趣软件等。本人平时特别喜欢折腾，
           并把折腾的结果分享出来供大家参考。既不是技术大牛，也不会神一般的存在，仅此而已。




★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★



	 请记住，F12一定要保留原创出处！！！
	 请记住，F12一定要保留原创出处！！！
	 请记住，F12一定要保留原创出处！！！
	 请记住，F12一定要保留原创出处！！！
	 请记住，F12一定要保留原创出处！！！


★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
-->
<!DOCTYPE HTML>
<html>
<head>
<title>枣庄学院新闻网</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<link href="index.css" type="text/css" rel="stylesheet" media="all">
	    <link rel="stylesheet" href="./css/reset.css">
	<link rel='stylesheet' id='main-style-css'  href='css/style.css' type='text/css' media='all' />
	
<link rel='stylesheet' id='bootstrap-css'  href='css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='_main-css'  href='css/main.css' type='text/css' media='all' />
<link rel='stylesheet' id='Grace-style-css'  href='css/style1.css' type='text/css' media='all' />
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script type="text/javascript" src="ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="ueditor/lang/zh-cn/zh-cn.js"></script>
<link href="css/article.css" type="text/css" rel="stylesheet" media="all">

<script type="text/javascript">
function Submit()
{
if(document.login['name'].value=='')
	{
	alert ("请输入用户名!");
	document.login.name.focus();
	}
	else if(document.login['passwd'].value=='')
	{
	alert ("请输入密码!");
	document.login.passwd.focus();
	}
	else
	document.getElementById("login").submit();
}
function Submit2()
{
if(document.message['message'].value=='')
	{
	alert ("您没有填写评论信息哦!");
	document.message.message.focus();
	}
	else
	document.getElementById("message").submit();
}
</script>
</head>
<body>
<?php
include("sqlcon.php");

session_start();
if(!empty($_SESSION["acc"]))
$session=$_SESSION["acc"];
?>

<!-- 顶部导航栏 -->
<nav id="top-navi" class="headroom">
    <div id="menu-btn">
        <div class="menu-btn-bar"></div>
        <div class="menu-btn-bar"></div>
        <div class="menu-btn-bar"></div>
    </div>
    
    <div class="top-navi-content">
        <a class="top-navi-logo" href="http://tongsir.cn">
                        <img src="images/logo.png" alt="TongSir博客">
                    </a>
        
    
        
<div class="main-menu">
<ul id="menu-%e5%8d%9a%e5%ae%a2%e4%b8%bb%e8%8f%9c%e5%8d%95" class="menu">
<li id="menu-item-1202" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1202"><a href="index.php">首页</a></li>
<li id="menu-item-1203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1203"><a href="register.php">新用户注册</a></li>

</ul>
</div>
</div>
</nav>


<br><br><br><br><br><br><br>
<div id="content">
	<div id="con_left">
		<div id="con_left_article">
			<div id="con_left_article_title">
				&nbsp;正文
			</div>
			<div id="con_left_article_content">
				<?php
				if(!empty($_GET['articleid']))
				{
					$articlesql=mysqli_query($conn,"select * from article where articleid=$_GET[articleid];");
					$articlerow=mysqli_fetch_object($articlesql);
					echo "<center><h3>$articlerow->title</h3></center>";
					echo "<center><h6>$articlerow->time</h6></center>";
					
					echo htmlspecialchars_decode($articlerow->content);
				}
				?>
			</div>
		</div>
		<div id="con_right_message">
			<div id="con_right_message_title">
				&nbsp;评论
			</div>
			<div id="con_right_message_content_2">
				<span id="con_right_message_content_2_1">最近评论：</span><br>
				<?php
				$messagesql=mysqli_query($conn,"select * from message where articleid=$_GET[articleid] order by messageid desc limit 0,5;");
				while($messagerow=mysqli_fetch_object($messagesql))
				{
				echo $messagerow->content.' '.$messagerow->time.'<br>';
				}
				?>
			</div>
			<div id="con_right_message_content_1">
				<form name="message" id="message" method="post" action="tomessage.php?articleid=<?php echo $_GET['articleid']; ?>">
				<textarea name="message" cols="28" rows="5"></textarea>
				</form>
				<div id="con_right_login_content_submit" <?php if(!empty($_SESSION["acc"])) echo 'onClick="Submit2();"'; else echo 'style="background:#999;"'; ?>>
					<?php if(!empty($_SESSION["acc"])) echo '提交'; else echo '登录后可以评论'; ?>
				</div>
			</div>
		</div>
	</div>
	<div id="con_right">
		<div id="con_right_login">
			<div id="con_right_login_content">
				<?php
				if(!empty($_SESSION["acc"]))
				{
				$accsql=mysqli_query($conn,"select name from acc where accid=$session;");
				$accrow=mysqli_fetch_object($accsql);
				echo "尊敬的 $accrow->name <br><br>
					您已经登录！<br><br>
					<a href='index.php'>返回首页</a>";
				}
				else
				{
				?>
				<form name="login" id="login" method="post" action="handle_login.php">
				<input name="name" type="text" size="18" maxlength="16" placeholder="用户名"><br><br>
				<input name="passwd" type="password" size="18" maxlength="16" placeholder="密码"><br><br>
				 <input name="captcha" type="text" size="1" maxlength="10" placeholder="验证码" />
				<img src="code/code.php" alt="" width="100" height="32" class="captcha" style="height:43px;cursor:pointer;" onclick="this.src=this.src+'?'">  
				</form>

				<div id="con_right_login_content_submit" onClick="Submit();">
					登录
				</div>
				    <div id="rside">
				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>

<?php
mysqli_close($conn);
?>
</body>
</html>