<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<html>
<head>
<title>系统登录界面</title>
<link rel="stylesheet" href="__PUBLIC__/Login/CSS/style.css" />

	
</head>
<body>
<div class="box">
<h1>学生档案管理系统<h1>
<center>
  <form action="__URL__/doLogin" method="POST">
用户名:<input type="text"name="txtUserName" id="txtUserName" autofocus="autofocus" required="required" class="email"><br>
密&nbsp;码:<input type="password" name="txtPassWord" id="txtPassWord" required="required" class="email"> <br>
  
  <button type="submit" class="btn">验证用户</button>
  <input type="reset" class="btn">

  </form>	
</center>
</div>

</body>

</html>