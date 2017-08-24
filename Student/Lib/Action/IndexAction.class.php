<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function Index(){
	   if($_SESSION['IsLogin']!='1'){
		 dump($_SESSION); 
		  //未登录状态
		 $this->redirect('Login/Login');
	    }
	    else{
	    	if($_SESSION['Role']=='1'){
		//已登录并且是学生身份
		     $this->redirect('Student/Index');}
	    	if($_SESSION['Role']=='2'){
			//已登录并且是教师身份
			$_SESSION['TeacherID']=$_SESSION['HaoMa'];
			$this->redirect('Teacher/index');}
			if($_SESSION['Role']=='3'){
			//已登录并且是管理员身份登录
			$_SESSION['AdminID']=$_SESSION['HaoMa'];
			$this->redirect('Admin/Index');}

	    }
    
    }
}

