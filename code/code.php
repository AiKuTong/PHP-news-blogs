<?php
   //载入验证码类
   require "Captcha.class.php";
   //实例化对象
   $captcha = new Captcha();
   //生成验证码图片
   $captcha->generate(70,22,5);
?>
