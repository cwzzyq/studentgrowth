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
	

	<link rel="stylesheet" href="__PUBLIC__/css/style.css"/>
        <center>
	<div id="middle"><h3>这里是学生评价模块<p>
  学号： <?php echo ($data1['StudentID']); ?> 姓名： <?php echo ($data1['XingMing']); ?></h4></h3><h4>
	
	<table width="90%" border="1" id="table-4">
      <tr>
        <td width="15%">学期数</td>
        <td width="49%">成长记录</td>
        <td width="21%">班主任评语</td>
        <td width="15%">功能</td>
      </tr>
      <tr>
        <td>1</td>
	<td><?php if(is_array($data11)): $i = 0; $__LIST__ = $data11;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>目标：<?php echo ($vo["Target"]); ?>,做法：<?php echo ($vo["Recorder"]); ?>,评价：<?php echo ($vo["ZwPingJia"]); ?><br>
		录入时间：<?php echo ($vo["LuRuShiJian"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
	</td>
	<td><?php echo ($data12[0]['Comment']); ?></td>
        <td><a href="__APP__/Teacher/TeacherComment2/XueQiShu/1/Comment/<?php echo ($data12[0]['Comment']); ?>" class="btn btn-success" role="button">重新评价</a></td>
      </tr>
      <tr>
        <td>2</td>
        <td><?php if(is_array($data21)): $i = 0; $__LIST__ = $data21;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>目标：<?php echo ($vo["Target"]); ?>,做法：<?php echo ($vo["Recorder"]); ?>,评价：<?php echo ($vo["ZwPingJia"]); ?><br>
		录入时间：<?php echo ($vo["LuRuShiJian"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
	</td>
        <td><?php echo ($data22[0]['Comment']); ?></td>
        <td><a href="__APP__/Teacher/TeacherComment2/XueQiShu/2/Comment/<?php echo ($data22[0]['Comment']); ?>" class="btn btn-success" role="button">	重新评价</a>
	</td>
      </tr>
      <tr>
        <td>3
	</td>
        <td><?php if(is_array($data31)): $i = 0; $__LIST__ = $data31;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>目标：<?php echo ($vo["Target"]); ?>,做法：<?php echo ($vo["Recorder"]); ?>,评价：<?php echo ($vo["ZwPingJia"]); ?><br>
		录入时间：<?php echo ($vo["LuRuShiJian"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
	</td>
        <td><?php echo ($data32[0]['Comment']); ?></td>
        <td><a href="__APP__/Teacher/TeacherComment2/XueQiShu/3/Comment/<?php echo ($data32[0]['Comment']); ?>" class="btn btn-success" role="button">	重新评价</a></td>
      </tr>
      <tr>
        <td>4</td>
        <td><?php if(is_array($data41)): $i = 0; $__LIST__ = $data41;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>目标：<?php echo ($vo["Target"]); ?>,做法：<?php echo ($vo["Recorder"]); ?>,评价：<?php echo ($vo["ZwPingJia"]); ?><br>
		录入时间：<?php echo ($vo["LuRuShiJian"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
	</td>
        <td><?php echo ($data42[0]['Comment']); ?></td>
        <td><a href="__APP__/Teacher/TeacherComment2/XueQiShu/4/Comment/<?php echo ($data42[0]['Comment']); ?>" class="btn btn-success" role="button">	重新评价</a></td>
      </tr>
      <tr>
        <td>5</td>
        <td><?php if(is_array($data51)): $i = 0; $__LIST__ = $data51;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>目标：<?php echo ($vo["Target"]); ?>,做法：<?php echo ($vo["Recorder"]); ?>,评价：<?php echo ($vo["ZwPingJia"]); ?><br>
		录入时间：<?php echo ($vo["LuRuShiJian"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?></td>
        <td><?php echo ($data52[0]['Comment']); ?></td>
        <td><a href="__APP__/Teacher/TeacherComment2/XueQiShu/5/Comment/<?php echo ($data52[0]['Comment']); ?>" class="btn btn-success" role="button">			重新评价</a></td>
      </tr>
      <tr>
        <td>6</td>
        <td>><?php if(is_array($data61)): $i = 0; $__LIST__ = $data61;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>目标：<?php echo ($vo["Target"]); ?>,做法：<?php echo ($vo["Recorder"]); ?>,评价：<?php echo ($vo["ZwPingJia"]); ?><br>
		录入时间：<?php echo ($vo["LuRuShiJian"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?></td>
        <td><?php echo ($data62[0]['Comment']); ?></td>
        <td><a href="__APP__/Teacher/TeacherComment2/XueQiShu/6/Comment/<?php echo ($data62[0]['Comment']); ?>" class="btn btn-success" role="button">			重新评价</a></td>
      </tr>
      <tr>
        <td>7</td>
        <td><?php if(is_array($data71)): $i = 0; $__LIST__ = $data71;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>目标：<?php echo ($vo["Target"]); ?>,做法：<?php echo ($vo["Recorder"]); ?>,评价：<?php echo ($vo["ZwPingJia"]); ?><br>
		录入时间：<?php echo ($vo["LuRuShiJian"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?></td>
        <td><?php echo ($data72[0]['Comment']); ?></td>
        <td><a href="__APP__/Teacher/TeacherComment2/XueQiShu/7/Comment/<?php echo ($data72[0]['Comment']); ?>" class="btn btn-success" role="button">			重新评价</a></td>
      </tr>
      <tr>
        <td>8</td>
        <td><?php if(is_array($data81)): $i = 0; $__LIST__ = $data81;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>目标：<?php echo ($vo["Target"]); ?>,做法：<?php echo ($vo["Recorder"]); ?>,评价：<?php echo ($vo["ZwPingJia"]); ?><br>
		录入时间：<?php echo ($vo["LuRuShiJian"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?></td>
        <td><?php echo ($data82[0]['Comment']); ?></td>
        <td><a href="__APP__/Teacher/TeacherComment2/XueQiShu/8/Comment/<?php echo ($data82[0]['Comment']); ?>" class="btn btn-success" role="button">			重新评价</a></td>
      </tr>
  </table></td>
		
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