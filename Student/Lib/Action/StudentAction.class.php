<?php
class StudentAction extends Action {
	public function Index(){
	//本部分用于学生的基本信息
	

	$Condition['StudentID']=$_SESSION['HaoMa'];
	$data=M('viewstudentinfor');
	$arr=$data->where($Condition)->find();
	if($arr!=null){
		$this->assign('datastu',$arr);
		$_SESSION['StudentID']=$arr['StudentID'];
		$_SESSION['StudentID']=$arr['StudentID'];
		$_SESSION['XingMing']=$arr['XingMing'];
		$_SESSION['DepartMentName']=$arr['DepartMentName'];
		$_SESSION['ClassID']=$arr['ClassID'];
		$_SESSION['ClassName']=$arr['ClassName'];
		}
	
	//dump($_SESSION);
	//dump($arr);
	//下面开始读取这个学生的总规划及总目标用于前台显示
	$XueHao=$_SESSION['StudentID'];
	$dataplan=M('plan');
	$Condition2['XueHao']=$XueHao;
	$arr2=$dataplan->where($Condition2)->find();
	if($arr2!=null){
		$_SESSION['AllTarget']=$arr2['AllTarget'];
		$_SESSION['AllStep']=$arr2['AllStep'];
		$_SESSION['jsLRSJ']=$arr2['RXSJ'];
		
	
	}else{
		$arr2['AllTarget']='未填写';
		$arr2['AllStep']="未填写";
		
	}
	//把所有基础数据转送到前台用于显示顶部分信息
	$this->assign('datastu',$_SESSION);

	//下面开始显示这个学生的分学期的成长记录信息
	$datarec11=M('studentrecord');
	$Condition3['XueHao']=$XueHao;
	$Condition3['XueQiShu']='1';
	$arr3=$datarec11->where($Condition3)->select();
	$this->assign('data11',$arr3);	

	//下面开始读取班主任对本学期的评价
	$datacomment11=M('teachercomments');
	$Condition4['XueHao']=$XueHao;
	$Condition4['XueQiShu']='1';
	$arr4=$datacomment11->where($Condition4)->select();
	$this->assign('data12',$arr4);
	//下面开始读取第二学期的数据
	$Condition3['XueQiShu']='2';
	$arr3=$datarec11->where($Condition3)->select();
	$this->assign('data21',$arr3);	
	$Condition4['XueQiShu']='2';
	$arr4=$datacomment11->where($Condition4)->select();
	$this->assign('data22',$arr4);
//	dump($arr4);
	//下面读取第三学期的记录数据
	$Condition3['XueQiShu']='3';
	$arr3=$datarec11->where($Condition3)->select();
	$this->assign('data31',$arr3);
	$Condition4['XueQiShu']='2';
	$arr4=$datacomment11->where($Condition4)->select();
	$this->assign('data32',$arr4);
	//下面读取第四学期的数据
	$Condition3['XueQiShu']='4';
	$arr3=$datarec11->where($Condition3)->select();
	$this->assign('data41',$arr3);
	$Condition4['XueQiShu']='4';
	$arr4=$datacomment11->where($Condition4)->select();
	$this->assign('data42',$arr4);
	//下面读取第五学期的数据
	$Condition3['XueQiShu']='5';
	$arr3=$datarec11->where($Condition3)->select();
	$this->assign('data51',$arr3);
	$Condition4['XueQiShu']='5';
	$arr4=$datacomment11->where($Condition4)->select();
	$this->assign('data52',$arr4);
	//下面读取第六学期的数据
	$Condition3['XueQiShu']='6';
	$arr3=$datarec11->where($Condition3)->select();
	$this->assign('data61',$arr3);
	$Condition4['XueQiShu']='6';
	$arr4=$datacomment11->where($Condition4)->select();
	$this->assign('data62',$arr4);
	//下面读取第七学期的数据
	$Condition3['XueQiShu']='7';
	$arr3=$datarec11->where($Condition3)->select();
	$this->assign('data71',$arr3);
	$Condition4['XueQiShu']='7';
	$arr4=$datacomment11->where($Condition4)->select();
	$this->assign('data72',$arr4);
	//下面读取第八学期的数据
	$Condition3['XueQiShu']='8';
	$arr3=$datarec11->where($Condition3)->select();
	$this->assign('data81',$arr3);
	$Condition4['XueQiShu']='8';
	$arr4=$datacomment11->where($Condition4)->select();
	$this->assign('data82',$arr4);
//	dump($arr3);
	$this->display();
exit;	
	}
	public function AllTargetAdd(){
	//下面读取SESSION数据转给前台显示
	$this->assign('datastu',$_SESSION);
	//dump($_SESSION);
	
	$this->display();
	}
	public function AllTargetSave(){
		$Condition['XueHao']=$_SESSION['StudentID'];
		$data['AllTarget']=trim($_POST['txtAllTarget']);
		$data['AllStep']=trim($_POST['txtAllStep']);
		$data['RXSJ']=date('Y年M月');
		$db=M('plan');
		$arr=$db->where($Condition)->save($data);
		if($arr!=0){
	  		$this->success('数据更新成功','Index/Index');
		}else
		{
			//这里如果更新失败说明数据库没有这条记录，采取新增的方法写入
			$data['XueHao']=$_SESSION['StudentID'];
			$arr=$db->add($data);
			$this->success('数据新增成功','Index/Index');
		}
	}
	public function AddNewRec(){
      $this->assign('datastu',$_SESSION);
	  $this->display();	
	} 

	public function AddRecNewSave(){
	 //首先从数据库中查找这个学生的这个学期的记录数，原则上不得突破10条一个学期
	    $Condition['XueHao']=$_SESSION['StudentID'];
	    $Condition['XueQiShu']=$_POST['SelXueQishu'];
	    $db=M('studentrecord');
	    $arr=$db->where($Condition)->count();
	    if($arr>10){
	      $this->error("这个学期的数量用完了",'Index/Index');
	    }
	    $data['XueHao']=$_SESSION['StudentID'];
	    $data['XueQiShu']=$_POST['SelXueQishu'];
	    $data['Target']=$_POST['txtAllTarget'];
 	    $data['Recorder']=$_POST['txtAllStep'];
	    $data['ZwPingJia']=$_POST['SelZQPJ'];
	    $data['LuRuShiJian']=date('Y年m月');
//	    dump($data);
	    $arr=$db->add($data);
	    if($arr!=0){
	    	$this->success('学期数据操作成功','Index/Index');
	    }
	    else{
	    	$this->success('学期新增失败，请与系统管理员联系','Index/Index');
	        }
	}
	
	public function RecModi(){
		//下面数据表中读相应学生的记录到前台显示
	    $this->assign('datastu',$_SESSION);	
	    $Condition['XueQiShu']=$_GET['XueQiShu'];
	    $Condition['XueHao']=$_SESSION['StudentID'];
	    $db=M('studentrecord');
	    $arr=$db->where($Condition)->select();
	    $this->assign('datarec',$arr);
          //  dump($arr);
	    $this->display();	
	}
	public function recSave(){
	   // dump($_POST);
	    $data['ID']=$_POST['ID'];
	    $data['Target']=$_POST['txttarget'];
	    $data['Recorder']=$_POST['txtrecord'];
	    $data['ZwPingJia']=$_POST['SelZWPJ'];
	    $data['LuRuShiJian']=date("y年m月");
	    $DB=M('studentrecord');
	    $arr=$DB->save($data);
	    if($arr>0){
	    	$this->success("数据更新成功",'Index/Index');
	    }
	    else{
		$this->error("数据更新失败");	    
	       }	
	}
	public function StuInfoModi(){
//	   dump($_SESSION);
	   //从系部表的中读取出系部名读出到前台显示
	   $data=M('department');
	   $arr1=$data->select();
	   $this->assign('datadepart',$arr1);
	   //下面读取班级表列表出来
	   $data=M('class');
	   $arr2=$data->select();
	   $this->assign('dataclass',$arr2);
	   $this->assign('datastu',$_SESSION);
	   $this->display();	
	}

	public function InforSave(){
	   // dump($_SESSION);
	   // dump($_POST);
	    if($_POST['newpassord1']!=$_POST['newpassord2']){
	     $this->error("两次密码不对，请重新输入");
	    }
	    $Condition1['UserName']=$_SESSION['UserName'];
	    $data1['PassWord']=$_POST['newpassord1'];
	    $DB=M('user');
	    $DB->where($Condition1)->save($data1);
	    //下面修改学生表
	    //下面需要根据用户的选择班级名时间查询出班级号
	    $Condition2['DepartMentName']=$_POST['departmentname'];
	    $DB=M('department');
	    $arr1=$DB->where($Condition2)->find();
	    if($arr1==null){
	    	$this->error('系部信息出错哦，请联系管理员');
	       }
	    //下面根据输入的班级名查找班级号
	    $Condition3['ClassName']=$_POST['classname'];
	    $DB=M('class');
	    $arr2=$DB->where($Condition3)->find();
	    if($arr2==null){
	    	$this->error('班级信息出错哦，请联系管理员');
	       }

	    $Condition4['StudentID']=$_SESSION['UserName'];
	    $data['XingMing']=$_POST['txtXingMing'];
	    $data['DepartMentID']=$arr1['DepartMentID'];
	    $data['ClassID']=$arr2['ClassID'];
	    $DB=M('student');
	    $arr=$DB->where($Condition4)->save($data);
	    dump($_SESSION['UserName']);
	    dump($_POST['newpassord1']);
	    //dump($data);
	    if($arr!=0){
	    	$this->success("记住上面的密码及用户名，密码修改成功",'Index/Index',10);
	      } 
	     else{
	    	$data['ID']=$_SESSION['UserName'];
	    	$data['StudentID']=$_SESSION['UserName'];
	    	$arr=$DB->add($data); 	
	    	$this->success("用户新增成功，密码修改成功",'Index/Index',10);
	     }  		
	}
	public function loginout(){
		session(null);
//		$_SESSION['UserName']='';
//		$_SESSION['IsLogin']=0;
       $this->success('退出成功','__APP__/Index/index');
    }
}

?>
