<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
    public function Login(){
	$this->display();
    }
    public function doLogin(){
     	
    $map['UserName']=$_POST['txtUserName'];
	$map1['PassWord']=$_POST['txtPassWord'];
	
	//根据用户名及密码到数据库去查找相应的记录，如果找到则把学生角色写入到SESSION[ROLER]
	$user=M('user');
	$arr=$user->where($map)->find();
	if($arr!=null){
	   //登录成功    
	   $_SESSION['UserName']=$arr['UserName'];
//	   $_SESSION['PassWord']=$arr['PassWord'];
	   $_SESSION['Role']=$arr['Role'];
	   $_SESSION['HaoMa']=$arr['HaoMa'];
	   $_SESSION['IsLogin']=1;
	   $this->redirect('Index/Index');
	}
	else
	{
	   $_SESSION['IsLogin']=0;	
	   $this->error('用户名及密码错误');
	}

    }
     
}
