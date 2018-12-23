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
<link href="css/index.css" type="text/css" rel="stylesheet" media="all">
	    <link rel="stylesheet" href="./css/reset.css">
	<link rel='stylesheet' id='main-style-css'  href='css/style.css' type='text/css' media='all' />
	
<link rel='stylesheet' id='bootstrap-css'  href='css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='_main-css'  href='css/main.css' type='text/css' media='all' />
<link rel='stylesheet' id='Grace-style-css'  href='css/style1.css' type='text/css' media='all' />
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script type="text/javascript" src="ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="ueditor/lang/zh-cn/zh-cn.js"></script>
  <link rel="shortcut icon""http://lab.tongsir.cn/favicon.ico" />
<link rel="icon" href="http://lab.tongsir.cn/favicon.ico"/>
	
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
</script>
</head>
<body class="home blog">

<?php
include("sqlcon.php");
session_start();
if(!empty($_SESSION["acc"]))
$session=$_SESSION["acc"];

if(@$_GET["link"]=="logoff")
{
unset($_SESSION["acc"]);
$url = 'index.php';
header("Location:$url");
}
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
<li id="menu-item-1203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1203"><a href="adminlogin.php">管理员登陆</a></li>
<li id="menu-item-1203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1203"><a href="http://tongsir.cn:8888/share/b8c415a6c52245b4dfdb0032a3c8ba5adb7f9a0743a624f29095e911231ceb0c">本站源码下载</a></li>
  
  </ul>
</div>
</div>
</nav>


<br><br><br><br><br><br><br>
<div id="content">
	<div id="con_left">
		<div id="con_left_hot">
			<div id="con_left_hot_title">
				&nbsp;最新新闻
			</div>
			<div id="con_left_hot_content" style="overflow:hidden;">
				<ol>
				<?php
				include("sqlcon.php");
				
				$articlesql=mysqli_query($conn,"select * from article;");
				while($articlerow=mysqli_fetch_object($articlesql))
				{
					
					echo "<li><a href='article.php?articleid=$articlerow->articleid' target='_blank'>$articlerow->title</a> $articlerow->time</li>";
				}
				?>
				</ol>
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
					您已经登录！ <a href='index.php?link=logoff'>注销</a><br><br>
					";
				}
				else
				{
				?>
				<form name="login" id="login" method="post" action="handle_login.php">
                  <p>注册的用户可以发表评论</p>
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

</div>
<div id="footer" class="two-s-footer clearfix">
	<div class="footer-box">
		<div class="container">
			
			
			<div class="nav-footer">
						</div>
			<div class="copyright-footer">
				<p>Copyright © 2018 <a class="site-link" href="https://tongsir.cn" title="新闻网" rel="home">新闻网</a> 

									<a href="http://www.miitbeian.gov.cn" rel="external nofollow" target="_blank">鲁ICP备17045457号</a>
								<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1273515696'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/z_stat.php%3Fid%3D1273515696%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>							</div>
						<div class="links-footer">
				<span>友情链接：</span>
				<a href="https://qujingge.com" target="_blank">取经阁丨无弹窗书友最值得收藏的网络小说阅读网</a>
<a href="http://dhso.top" target="_blank">喜饭搜索</a>
<a href="http://www.iamy.vip" target="_blank">小Y资源站</a>
<a href="https://www.kjarbo.com" target="_blank">林里克斯|专注于Linux的运维平台</a>
<a href="http://uzz.fanya.chaoxing.com/portal" target="_blank">枣庄学院网络教育平台</a>
<a href="http://www.1024s.cn/" target="_blank">越权|一位爱折腾的少年</a>
<a href="http://www.tecms.net" target="_blank">默笙博客</a>
			</div>					</div>
	</div></div>

<?php
mysqli_close($conn);
?>

</body>
</html>