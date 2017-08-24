<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<html>
<head>
<title>楚雄教师主界面</title>

<link rel="stylesheet" href="__PUBLIC__/student/css/bootstrap.css" />
<link rel="stylesheet" href="__PUBLIC__/css/style.css" />
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
        <li class="active"><a href="__APP__/Teacher/">班级信息查询<span class="sr-only">(current)</span></a> </li>
        <li><a href="__APP__/Teacher/TeaInfoXG">个人信息修改</a> </li>
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

<div class="container" >
  <div class="row">
    <div class="col-sm-6">
      <div class="thumbnail">
<div class="caption">
         
          <p>姓名:<?php echo ($datatea['TeacherXingMing']); ?>&nbsp;&nbsp;教师号：<?php echo ($datatea['TeacherID']); ?>&nbsp;&nbsp;所在系：<?php echo ($datatea['DepartMentName']); ?> </p>
          <hr>
          <p><a href="#" class="btn btn-success" role="button">个人基本信息</a></p>
        </div>
      </div>
    </div>
    
  </div>
</div>
	

	
<center>
<div id="middle"><h3>这里是教师功能显示模块</h3>
<table width="90%" border="1" id="table-4">
  	<tr>
    <td width="70%">班级信息</td>
    <td width="20%">功能</td>
    <td width="10%">备注</td>
  </tr>
  <?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
 
	  <td>班级编号：<?php echo ($vo["ClassID"]); ?>班级名称：<?php echo ($vo["ClassName"]); ?>入学时间：<?php echo ($vo["RXSJ"]); ?> 
	  </td>
	<td><a href="__APP__/Teacher/TeacherClassManager/ClassID/<?php echo ($vo["ClassID"]); ?>" class="btn btn-success" role="button">评价</a></td>
	<td>备注</td>
   
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>	
</div>
</center>
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