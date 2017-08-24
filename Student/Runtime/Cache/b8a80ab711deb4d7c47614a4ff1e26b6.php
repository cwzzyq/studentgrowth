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
	
	
	
		
<div class="container">
 <form action="__APP__/Student/AllTargetSave" method="POST">
 <div class="row">
    <div class="col-sm-6">
      <div class="thumbnail">
<div class="caption">
          <h3>总目标</h3>
          <textarea name="txtAllTarget" cols="80%" rows="4"required>	<?php echo ($datastu['AllTarget']); ?> </textarea><br>
          
          
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="thumbnail">
<div class="caption">
         <h3>总规划</h3>
         <textarea name="txtAllStep" cols="80%"  rows="4"required>	<?php echo ($datastu['AllStep']); ?> </textarea><br>
          
        </div>
      </div>
    </div>     
  </div> 
<hr>
<input type="submit" class="btn btn-success">
    </form>
<div >
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