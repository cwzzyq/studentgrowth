<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>学生档案管理系统管理员欢迎您</title>
</head>
<body>
楚雄技师学院
欢迎你来
请选择电子表格文件用于上传

	<form action="__URL__/fielexport" enctype="multipart/form-data" method="post" >
		<input type="file" name="excel" />
		<input type="submit" value="提交" >
	</form>
</body>
</html>