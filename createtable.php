<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('数据库连接失败！ ' . mysqli_error());
  }

if (mysqli_query($con,"CREATE DATABASE news character set utf8"))
  {
  echo "成功创建数据库！";
  }
else
  {
  echo "创建数据库失败！ " . mysqli_error();
  }
mysqli_select_db($con,"news");
$sql = "CREATE TABLE admin
(
adminid smallint NOT NULL AUTO_INCREMENT,
PRIMARY KEY(adminid),
name varchar(64) NOT NULL,
password char(32)
)";
mysqli_query($con,$sql);

$sql = "CREATE TABLE acc
(
accid smallint NOT NULL AUTO_INCREMENT,
PRIMARY KEY(accid),
name varchar(64) NOT NULL,
password char(32),
phone char(11),
address varchar(64)
)";
mysqli_query($con,$sql);

$sql = "CREATE TABLE article
(
articleid smallint NOT NULL AUTO_INCREMENT,
PRIMARY KEY(articleid),
title varchar(64),
content text,
time timestamp
)";
mysqli_query($con,$sql);

$sql = "CREATE TABLE message
(
messageid smallint NOT NULL AUTO_INCREMENT,
PRIMARY KEY(messageid),
content text,
articleid smallint,
accid smallint,
time timestamp
)";
mysqli_query($con,$sql);

$sql = "insert into admin(name,password) values('admin','96e79218965eb72c92a549dd5a330112')";
mysqli_query($con,$sql);

mysqli_close($con);
?>