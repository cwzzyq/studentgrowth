<?php
class TeacherAction extends Action {
	public function Index(){
		$Condition['TeacherID']=$_SESSION['TeacherID'];
		$DB=M('viewteacherinfo');
		$arr=$DB->where($Condition)->find();
		$_SESSION['TeacherXingMing']=$arr['TeacherXingMing'];
		$_SESSION['DepartMentName']=$arr['DepartMentName'];
		$this->assign('datatea',$_SESSION);
		$Condition['TeacherID']=$_SESSION['TeacherID'];
		$data2=M('Class');
		$arr21=$data2->where($Condition)->select();
		$this->assign('data2',$arr21);
		//dump($arr21);
		$this->display();	
		}
	public function TeacherClassManager(){
		//查询用于显示头部文件
		$this->assign('datatea',$_SESSION);
		$_SESSION['ClassID']=$_GET['ClassID'];
	    	//查询这个教师所管理班级信息，班号从上界面产生
		$Condition['ClassID']=$_SESSION['ClassID'];
		$data=M('Class');
		$arr1=$data->where($Condition)->find();
		$this->assign('data1',$arr1);
	//下面产生这个班级的学生的信息
	//	dump($_SESSION);
		$data=M('viewstudentinfor');
		$Condition['ClassID']=$_SESSION['ClassID'];
		$arr2=$data->where($Condition)->order('StudentID')->select();
		$this->assign('data2',$arr2);
	//	dump($data->getLastSql());
	//	dump($arr2);
		
//这里特别注意学生不定有评价信息，先找班级信息显示，再看评价库有没有此学生的信息
		$data=M('viewteachercomment');
		$Condition3['ClassID']=$_SESSION['ClassID'];
		$Condition3['TeacherID']=$_SESSION['HaoMa'];
		$arr3=$data->where($Condition3)->select();
		$this->assign('data3',$arr3);
		$this->display();
	//	dump($arr2);	
		}
	public function CommentsModi(){
		$this->assign('datatea',$_SESSION);
		$_SESSION['StudentID']=$_GET['StudentID'];
		//下面四行语句用于显示学生基本信息
		$data=M('student');
		$Condition['StudentID']=$_SESSION['StudentID'];
		$arr=$data->where($Condition)->find();
		$this->assign('data1',$arr);
	//下面在学生成长记录表中查找相应成长记录显示在表格中，注意分8个学期显示
		$Condition['XueHao']=$_SESSION['StudentID'];
		$Condition['XueQiShu']='1';
		$data=M('studentrecord');
		$arr=$data->where($Condition)->select();
		$this->assign('data11',$arr);
	//下面查询教师评语库这个学生这个学期的语语用于前台显示
		$data=M('teachercomments');
		$arr=$data->where($Condition)->select();
		$this->assign('data12',$arr);
	//下面显示第二个学期
		$Condition['XueHao']=$_SESSION['StudentID'];
		$Condition['XueQiShu']='2';
		$data=M('studentrecord');
		$arr=$data->where($Condition)->select();
		$this->assign('data21',$arr);
		$data=M('teachercomments');
		$arr=$data->where($Condition)->select();
		$this->assign('data22',$arr);
	//下面显示第三学期
		$Condition['XueHao']=$_SESSION['StudentID'];
		$Condition['XueQiShu']='3';
		$data=M('studentrecord');
		$arr=$data->where($Condition)->select();
		$this->assign('data31',$arr);
		$data=M('teachercomments');
		$arr=$data->where($Condition)->select();
		$this->assign('data32',$arr);	
	//下面显示第四学期
		$Condition['XueHao']=$_SESSION['StudentID'];
		$Condition['XueQiShu']='4';
		$data=M('studentrecord');
		$arr=$data->where($Condition)->select();
		$this->assign('data41',$arr);
		$data=M('teachercomments');
		$arr=$data->where($Condition)->select();
		$this->assign('data42',$arr);	
	//下面显示第五学期
		$Condition['XueHao']=$_SESSION['StudentID'];
		$Condition['XueQiShu']='5';
		$data=M('studentrecord');
		$arr=$data->where($Condition)->select();
		$this->assign('data51',$arr);
		$data=M('teachercomments');
		$arr=$data->where($Condition)->select();
		$this->assign('data52',$arr);	
	//下面显示第六学期
		$Condition['XueHao']=$_SESSION['StudentID'];
		$Condition['XueQiShu']='6';
		$data=M('studentrecord');
		$arr=$data->where($Condition)->select();
		$this->assign('data61',$arr);
		$data=M('teachercomments');
		$arr=$data->where($Condition)->select();
		$this->assign('data62',$arr);
	//下面显示第七学期
		$Condition['XueHao']=$_SESSION['StudentID'];
		$Condition['XueQiShu']='7';
		$data=M('studentrecord');
		$arr=$data->where($Condition)->select();
		$this->assign('data71',$arr);
		$data=M('teachercomments');
		$arr=$data->where($Condition)->select();
		$this->assign('data72',$arr);
	//下面显示第八学期
		$Condition['XueHao']=$_SESSION['StudentID'];
		$Condition['XueQiShu']='8';
		$data=M('studentrecord');
		$arr=$data->where($Condition)->select();
		$this->assign('data81',$arr);
		$data=M('teachercomments');
		$arr=$data->where($Condition)->select();
		$this->assign('data82',$arr);

		$this->display();
	}

	public function TeacherComment2(){
	 $_SESSION['XueQiShu']=$_GET['XueQiShu'];
	 $this->assign('datatea',$_SESSION);	      
	 //dump($_SESSION);
	 $this->display();
	
	}
	

 public function CommentsSave(){
	//首先要查找评价库是否有这条记录，如果没有采用插入，如果存在需要修改评价
    //查找数据是否存在，存在就是修改，否则就新增，这要特别注意学生数据评价应该有教师号
	$Condition['XueHao']=$_SESSION['StudentID'];
	$Condition['XueQiShu']=$_SESSION['XueQiShu'];
	$data=M('teachercomments');
	$arr=$data->where($Condition)->find();
	if($arr){
	//存在数据是修改	
	  	$shuju['Comment']=$_POST['txtComment'];
	  	$shuju['LuRuShiJian']=date("Y年M月");
	   	$data->where($Condition)->save($shuju);
	}
	else{
	//下面是新增数据
		$shuju['XueHao']=$_SESSION['StudentID'];
		$shuju['XueQiShu']=$_SESSION['XueQiShu'];
		$shuju['TeacherID']=$_SESSION['TeacherID'];
		$shuju['Comment']=$_POST['txtComment'];
		$shuju['LuRuShiJian']=date("Y年M月");
		$data->add($shuju);
	}

	$this->redirect('Teacher/index');
}
public function TeaInforSave()
	{
	$this->assign('datatea',$_SESSION);
	//dump($_SESSION);
	//dump($_POST);
	//根据输入的密码，如果两个密码不对则要求退出
	if($_POST['newpassord1']!=($_POST['newpassord2']))
	{
		$this->error("密码错误");
	}
	//首先根据输入系名查找相应的系号
	$Condition['DepartMentName']=$_POST['departmentname'];
	$data21=M('department');
	$arr=$data21->where($Condition)->find();
	$Condition['TeacherID']=$_SESSION['TeacherID'];
	$shuju['TeacherXingMing']=$_POST['txtXingMing'];
	$shuju['TelephoneNumber']=$_POST['txtTel'];
	$shuju['TelephoneNum']=$arr['DepartMentID'];
	$data=M('teacher');
	$account=$data->where($Condition)->save($shuju);
	if($account==0)
		{
		//不是所有教师信息都要新增
		$account=$data->create($shuju);
		}
	//下面开始更新密码表
	$Condition1['UserName']=$_SESSION['UserName'];
	$shuju['PassWord']=$_POST['newpassord1'];
	$data=M('user');
	$account=$data->where($Condition1)->save($shuju);
	$this->redirect('Teacher/index');
	}

	public function TeaInfoXG(){
		//dump($_SESSION);
		$this->assign('datatea',$_SESSION);
		$data=M('department');
	    $arr1=$data->select();
	    $this->assign('datadepart',$arr1);
		$this->display();



	}

}


?>
