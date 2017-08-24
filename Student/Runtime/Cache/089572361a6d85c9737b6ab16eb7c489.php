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
        <li class="active"><a href="__APP__/Admin/Index">查看系统数据<span class="sr-only">(current)</span></a> </li>
        <li><a href="#">个人信息(未完成)</a> </li>
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
          
          <p>姓名:<?php echo ($dataadmin['XingMin']); ?>编号：<?php echo ($dataadmin['HaoMa']); ?> 角色：<?php echo ($dataadmin['Roler']); ?> </p>
          <hr>
          <p><a href="#" class="btn btn-success" role="button">个人基本信息</a></p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="thumbnail">
<div class="caption">
          
          <p>系统中学生数据总人数：<?php echo ($datahuizhong['studentCount']); ?> 
            系统中教师数据总人数：<?php echo ($datahuizhong['teacherCount']); ?> <br>
          评价记录数：<?php echo ($datahuizhong['CommentCount']); ?><br>
		
          <hr>
          <p><a href="#" class="btn btn-success" role="button">系统中数据汇总展示</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
	

<div class="container">
  	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-6">
      		<h2>第一步导入\出学生基本信息表</h2>
            <strong>请选择电子表格文件用于上传
			<form action="__URL__/StudentImport" enctype="multipart/form-data" method="post" >
				<input type="file" name="excel" />
				<input type="submit" value="提交" >
			</form>
			</br><a href="__URL__/exportstudent" target="_blank">导出</a>
    	</div>
    	<div class="col-lg-4 col-md-6 col-sm-6">
      		<h2>第二步导入\出教师信息信息</h2>
      		<div class="media">
        		<div class="media-left"> <a href="#"> <img class="media-object" src="file:///E|/web/images/35X35.gif" alt="..."> </a></div>
        	<div class="media-body">
          		<h4 class="media-heading"></h4>
          		请选择电子表格文件用于上传
				<form action="__URL__/TeacherImport" enctype="multipart/form-data" method="post" >
					<input type="file" name="excel" />
					<input type="submit" value="提交" >
				</form>
			</br> 
			</div>
      	</div>
    	<div class="media">
        	<div class="media-left"> <a href="#"> <img class="media-object" src="file:///E|/web/images/35X35.gif" alt="..."> </a> </div>
        		<div class="media-body">
          		<h4 class="media-heading">导出教师基本信息表</h4>
          		<a href="__URL__/exportteacher" target="_blank">导出</a> 
        		</div>
      		</div>
    	</div>
    	<div class="col-lg-4 col-sm-12">
      		<h2>第五步成长记录评价信息导出</h2>
      		<a href="__URL__/exportteacherComment" target="_blank">导出</a></p>
    	</div>
  	</div>


  	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-6">
      		<h2>第三步导入\出学生专业部信息表</h2>
            <strong>请选择电子表格文件用于上传
			<form action="__URL__/departmentImport" enctype="multipart/form-data" method="post" >
				<input type="file" name="excel" />
				<input type="submit" value="提交" >
			</form>
			</br><a href="__URL__/exportdepartment" target="_blank">导出</a>
    	</div>
    	<div class="col-lg-4 col-md-6 col-sm-6">
      		<h2>第四导入\出班级信息</h2>
      		<div class="media">
        		<div class="media-left"> <a href="#"> <img class="media-object" src="file:///E|/web/images/35X35.gif" alt="..."> </a></div>
        	<div class="media-body">
          		<h4 class="media-heading"></h4>
          		请选择电子表格文件用于上传
				<form action="__URL__/ClassImport" enctype="multipart/form-data" method="post" >
					<input type="file" name="excel" />
					<input type="submit" value="提交" >
				</form>
			</br> 
			</div>
      	</div>
    	<div class="media">
        	<div class="media-left"> <a href="#"> <img class="media-object" src="file:///E|/web/images/35X35.gif" alt="..."> </a> </div>
        		<div class="media-body">
          		<h4 class="media-heading">导出班级基本信息表</h4>
          		<a href="__URL__/ClassExport" target="_blank">导出</a> 
        		</div>
      		</div>
    	</div>
    	
  	</div>
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