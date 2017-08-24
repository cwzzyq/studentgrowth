<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<html>
<head>
<title>学生成长记录系统学生主界面</title>
<style type="text/css">
body{
	background:yellow;
}
#menutop{
	height:20px;
	background:green;


}
#middle{
	width:100%;
	float:left;
	background:red;
	}
#header{
	height:50px;
	background:green;

}

</style>
	
	</head>
	<body>
		<center>	<div id="header">楚雄技师学院学生成长管理系统<br>
				姓名:<?php echo ($datastu['XingMing']); ?>学号：<?php echo ($datastu['StudentID']); ?> 专业：<?php echo ($datastu['DepartMentName']); ?> 班级：<?php echo ($datastu['ClassName']); ?> </center>	<br>
			
	</div>
	<div id="menutop">
		<center><a href="__APP__/Student/AllTargetAdd">总规划修改</a>	学期新增	学期修改	修改个人信息
		
		</center>
			
	
	</div>
	<div id="middle">

		<form action="__APP__/Student/XueQiSelect" method="POST">首先选择学期数<select name="SelXueQishu" required>
			<option> </option>
			<option>1</option>		
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
		</select><input type="submit">
		</form>
		<form action="__APP__/Student/RecModiSave" method="POST">
	
		目标<textarea name="txtAllTarget" cols="30" rows="4"required>请修改成自己的目标 </textarea><br>
		具体做法<textarea name="txtAllStep" cols="30" rows="4"required>请表达自己的做法</textarea><br>
		自我评价：<select name="SelZQPJ" require>
			<option>非常满意</option>
			<option>满意</option>
			<option>一般</option>
			<option>不满意</option>
		</select><br>
		<input type="submit">
		</form>

	
	</div>
	

	</body>

</html>