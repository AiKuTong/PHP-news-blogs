<?php
include("sqlcon.php");
session_start();
if(!empty($_SESSION["acc"]))
$session=$_SESSION["acc"];

if(!empty($_POST['message']))
	mysqli_query($conn,"insert into message(content,accid,articleid) values('$_POST[message]',$session,$_GET[articleid]);");
mysqli_close($conn);
$url = 'article.php?articleid='.$_GET['articleid'];
header("Location:$url");
?>