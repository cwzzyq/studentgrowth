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
	
	<!-- 第一学期控制代码 -->
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-sm-6">
      <div class="panel panel-default panel-success"> 
        <!-- Default panel contents -->
        <div class="panel-heading">
          <h3>第一学期</h3>
        </div>
        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
              <th>记录</th>
              <th>评价</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php if(is_array($data11)): $i = 0; $__LIST__ = $data11;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($key); ?>目标:<?php echo ($vo["Target"]); ?>做法：<?php echo ($vo["Recorder"]); ?>
		自我评价：<?php echo ($vo["ZwPingJia"]); ?>
		<br><?php endforeach; endif; else: echo "" ;endif; ?></th>
            <th>老师评语<br>
		<?php echo ($data12[0]['Comment']); ?><br>
		时间：<?php echo ($data12[0]['LuRuShiJian']); ?></th>
            </tr>
            
            <tr>
              <th scope="row"><p class="text-center"><a href="__APP__/Student/RecModi/XueQiShu/1" class="btn-success btn"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>修改记录</p></th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- 第二学期代码 -->
<div class="col-lg-3 col-sm-6">
      <div class="panel panel-default panel-warning"> 
        <!-- Default panel contents -->
        <div class="panel-heading">
          <h3>第二学期</h3>
        </div>
        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
             <th>记录</th>
              <th>评价</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php if(is_array($data21)): $i = 0; $__LIST__ = $data21;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($key); ?>目标:<?php echo ($vo["Target"]); ?>做法：<?php echo ($vo["Recorder"]); ?>
		自我评价：<?php echo ($vo["ZwPingJia"]); ?>
		<br><?php endforeach; endif; else: echo "" ;endif; ?></th>
            <th>老师评价<br>
		<?php echo ($data22[0]['Comment']); ?><br>
		时间：<?php echo ($data22[0]['LuRuShiJian']); ?></th>
            </tr>
            
            <tr>
              <th scope="row"><p class="text-center"><a href="__APP__/Student/RecModi/XueQiShu/2" class="btn-warning btn"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>修改记录</a></p>
              </th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>


<div class="col-lg-3 col-sm-6">
      <div class="panel panel-default panel-info"> 
        <!-- Default panel contents -->
        <div class="panel-heading">
          <h3>第三学期</h3>
        </div>
        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
              <th>记录</th>
              <th>评价</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php if(is_array($data31)): $i = 0; $__LIST__ = $data31;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($key); ?>目标:<?php echo ($vo["Target"]); ?>做法：<?php echo ($vo["Recorder"]); ?>
		自我评价：<?php echo ($vo["ZwPingJia"]); ?>
		<br><?php endforeach; endif; else: echo "" ;endif; ?></th>
            <th>评语<br>
		<?php echo ($data32[0]['Comment']); ?><br>
		时间：<?php echo ($data32[0]['LuRuShiJian']); ?></th>
            </tr>
             <tr>
              <th scope="row"><p class="text-center"><a href="__APP__/Student/RecModi/XueQiShu/3" class="btn-info btn"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>修改记录</a></p></th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>


<div class="col-lg-3 col-sm-6">
      <div class="panel panel-default panel-danger"> 
        <!-- Default panel contents -->
        <div class="panel-heading">
          <h3>第四学期</h3>
        </div>
        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
              <th>记录</th>
              <th>评价</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php if(is_array($data41)): $i = 0; $__LIST__ = $data41;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($key); ?>目标:<?php echo ($vo["Target"]); ?>做法：<?php echo ($vo["Recorder"]); ?>
		自我评价：<?php echo ($vo["ZwPingJia"]); ?>
		<br><?php endforeach; endif; else: echo "" ;endif; ?></th>
            <th>评语<br>
		<?php echo ($data42[0]['Comment']); ?><br>
		时间：<?php echo ($data42[0]['LuRuShiJian']); ?></th>
            </tr>
            
            <tr>
              <th scope="row"><p class="text-center"><a href="__APP__/Student/RecModi/XueQiShu/4" class="btn-danger btn"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>修改记录</a></p></th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <hr>

  <div class="col-lg-3 col-sm-6">
      <div class="panel panel-default panel-success"> 
        <!-- Default panel contents -->
        <div class="panel-heading">
          <h3>第五学期</h3>
        </div>
        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
              <th>记录</th>
              <th>评价</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php if(is_array($data51)): $i = 0; $__LIST__ = $data51;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($key); ?>目标:<?php echo ($vo["Target"]); ?>做法：<?php echo ($vo["Recorder"]); ?>
		自我评价：<?php echo ($vo["ZwPingJia"]); ?>
		<br><?php endforeach; endif; else: echo "" ;endif; ?></th>
            <th>评语<br>
		<?php echo ($data52[0]['Comment']); ?><br>
		时间：<?php echo ($data52[0]['LuRuShiJian']); ?></th>
            </tr>
            
            <tr>
              <th scope="row"><p class="text-center"><a href="__APP__/Student/RecModi/XueQiShu/5" class="btn-success btn"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>修改记录</p></th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- 第二学期代码 -->
<div class="col-lg-3 col-sm-6">
      <div class="panel panel-default panel-warning"> 
        <!-- Default panel contents -->
        <div class="panel-heading">
          <h3>第六学期</h3>
        </div>
        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
             <th>记录</th>
              <th>评价</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php if(is_array($data61)): $i = 0; $__LIST__ = $data61;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($key); ?>目标:<?php echo ($vo["Target"]); ?>做法：<?php echo ($vo["Recorder"]); ?>
		自我评价：<?php echo ($vo["ZwPingJia"]); ?>
		<br><?php endforeach; endif; else: echo "" ;endif; ?></th>
            <th>评语<br>
		<?php echo ($data62[0]['Comment']); ?><br>
		时间：<?php echo ($data62[0]['LuRuShiJian']); ?></th>
            </tr>
            
            <tr>
              <th scope="row"><p class="text-center"><a href="__APP__/Student/RecModi/XueQiShu/6" class="btn-warning btn"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>修改记录</a></p>
              </th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>


<div class="col-lg-3 col-sm-6">
      <div class="panel panel-default panel-info"> 
        <!-- Default panel contents -->
        <div class="panel-heading">
          <h3>第七学期</h3>
        </div>
        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
              <th>记录</th>
              <th>评价</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php if(is_array($data71)): $i = 0; $__LIST__ = $data71;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($key); ?>目标:<?php echo ($vo["Target"]); ?>做法：<?php echo ($vo["Recorder"]); ?>
		自我评价：<?php echo ($vo["ZwPingJia"]); ?>
		<br><?php endforeach; endif; else: echo "" ;endif; ?></th>
            <th>评语<br>
		<?php echo ($data72[0]['Comment']); ?><br>
		时间：<?php echo ($data72[0]['LuRuShiJian']); ?></th>
            </tr>
             <tr>
              <th scope="row"><p class="text-center"><a href="__APP__/Student/RecModi/XueQiShu/7" class="btn-info btn"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>修改记录</a></p></th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>


<div class="col-lg-3 col-sm-6">
      <div class="panel panel-default panel-danger"> 
        <!-- Default panel contents -->
        <div class="panel-heading">
          <h3>第八学期</h3>
        </div>
        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
              <th>记录</th>
              <th>评价</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php if(is_array($data81)): $i = 0; $__LIST__ = $data81;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($key); ?>目标:<?php echo ($vo["Target"]); ?>做法：<?php echo ($vo["Recorder"]); ?>
		自我评价：<?php echo ($vo["ZwPingJia"]); ?>
		<br><?php endforeach; endif; else: echo "" ;endif; ?></th>
            <th>评语<br>
		<?php echo ($data82[0]['Comment']); ?><br>
		时间：<?php echo ($data82[0]['LuRuShiJian']); ?></th>
            </tr>
            
            <tr>
              <th scope="row"><p class="text-center"><a href="__APP__/Student/RecModi/XueQiShu/8" class="btn-danger btn"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>修改记录</a></p></th>
            </tr>
          </tbody>
        </table>
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