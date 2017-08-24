<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<html>
<head>
<title>学生成长记录系统学生主界面</title>
<link rel="stylesheet" href="__PUBLIC__/student/css/bootstrap.css" />


	</head>
	<body>
	<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">楚雄技师学院学生管理系统</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="__APP__/Student/Index">查看记录<span class="sr-only">(current)</span></a> </li>
        <li><a href="__APP__/Student/AllTargetAdd">总规划</a> </li>
        <li><a href="__APP__/Student/AddNewRec">增加档案</a> </li>
        <li><a href="__APP__/Student/StuInfoModi">个人信息</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="__APP__/Student/loginout">退出系统</a> </li>
        <li><a href="#">技术支持</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div class="thumbnail">
<div class="caption">
          
          <p>姓名:<?php echo ($datastu['XingMing']); ?>学号：<?php echo ($datastu['StudentID']); ?> 专业：<?php echo ($datastu['DepartMentName']); ?> 班级：<?php echo ($datastu['ClassName']); ?></p>
          <hr>
          <p><a href="#" class="btn btn-success" role="button">个人基本信息</a></p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="thumbnail">
<div class="caption">
          
          <p>你的总目标：<?php echo ($datastu['AllTarget']); ?> 你的总计划：<?php echo ($datastu['AllStep']); ?>
		最新录入时间：<?php echo ($datastu['RXSJ']); ?>
          <hr>
          <p><a href="#" class="btn btn-success" role="button">学校生涯总目标</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
	
	
<style type="text/css">
* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}

body {
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 12px;
	line-height:30px;
	color:#777;
	
}

.container1 {
	max-width:90%;
	width:100%;
	margin:0 auto;
	position:relative;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#F9F9F9;
	padding:25px;
	margin:5px 0;
}

#contact h3 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#contact button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}
</style>

 <div class="container1">  
	<form action="__APP__/Student/AddRecNewSave" method="POST"id="contact">
		<h3>操作步骤分三步：1选择学期数；2制作本学期的一个目标；3具体实现这个目标的方法.</h3>
		<h4>当前操作的学期数：</h4><select name="SelXueQishu" required>
			<option> </option>
			<option>1</option>		
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
		</select><br>
		<h4>目标</h4>
		<textarea name="txtAllTarget" cols="60" placeholder="请修改成自己的目标" rows="4"required></textarea><br>
		<h4>具体做法</h4>
		<textarea name="txtAllStep" cols="60" placeholder="请表达自己的做法" rows="4"required></textarea><br>
		<h4>自我评价：</h4><select name="SelZQPJ" require>
			<option>非常满意</option>
			<option>满意</option>
			<option>一般</option>
			<option>不满意</option>
		</select><br>
		 <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">提交数据</button>
		
	</form>


 </div>
		
<hr>

<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © 楚雄技师学院信息中心. 版权所有.</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="__PUBLIC__/student/js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="__PUBLIC__/student/js/bootstrap.js"></script>
</body>
</html>