<?php
// 本类由系统自动生成，仅供测试用途
class AdminAction extends Action {
    public function index(){
       // dump($_SESSION);
        $Condition['HaoMa']=$_SESSION['HaoMa'];
        $DB=M('viewadmin');
        $arr=$DB->where($Condition)->find();
        if(is_null($arr)){
           $this->error('查询管理员数据出错，请联系管理员'); 
        }
        $this->assign('dataadmin',$arr);
        //下面查询汇总数据用于显示
        $arr2['studentCount']=M('student')->count();
        $arr2['teacherCount']=M('teacher')->count();
        $arr2['CommentCount']=M('teachercomments')->count();
        $this->assign('datahuizhong',$arr2);
	   $this->display();
    }
 //下面模块学生信息用于实现文件上传
 public function StudentImport(){
 	if (!empty($_FILES)) {
            import('ORG.Net.UploadFile');
            $config=array(
                'allowExts'=>array('xlsx','xls'),
                'savePath'=>'./Public/upload/',
                'saveRule'=>'time',
            );
            $upload = new UploadFile($config);
            if (!$upload->upload()) {
                $this->error($upload->getErrorMsg());
            } else {
                $info = $upload->getUploadFileInfo();
                
            }
            vendor("PHPExcel.PHPExcel");
            $file_name=$info[0]['savepath'].$info[0]['savename'];
            $objReader = PHPExcel_IOFactory::createReader('Excel5');
            $objPHPExcel = $objReader->load($file_name,$encode='utf-8');
            $sheet = $objPHPExcel->setActiveSheetIndexByName('student');
            $highestRow = $sheet->getHighestRow(); // 取得总行数
            $highestColumn = $sheet->getHighestColumn(); // 取得总列数
            for($i=3;$i<=$highestRow;$i++){   
              $datauser['ID']= $datauser['HaoMa'] =$datauser['UserName']=strval($objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue());  
              $datastu['ID']=strval($objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue());
              $datastu['StudentID']=strval($objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue());
			  $datastu['XingMing']=strval($objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue());
			  $datastu['ClassID']=strval($objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue());
          	  $datastu['DepartMentID']=strval($objPHPExcel->getActiveSheet()->getCell("E".$i)->getValue());
          	  $datastu['TelephoneNum']=strval($objPHPExcel->getActiveSheet()->getCell("F".$i)->getValue());
          	  $datastu['QQ']=strval($objPHPExcel->getActiveSheet()->getCell("G".$i)->getValue());
          	  
              //这里要注意学生身份是1，教师是2，管理员3
              $datauser['Role']=1;
              $datauser['PassWord']='123456';              
              M('user')->add($datauser);
              M('student')->add($datastu);
              } 
        		$this->success('学生数据导入成功！');
        }else
            {
            $this->error("请选择上传的文件");
            }    
         
    
 	}
//下面导出学生数据到电子表格
	public function exportstudent(){

		$xlsName  = "学生基本信息表";
        $xlsCell  = array(
        array('StudentID','学号'),
        array('XingMing','名字'),
        array('TeacherXingMing','班主任'),
		array('ClassName','班级名称'),
		array('RXSJ','入学时间')
        );
        $xlsModel = M('viewstudentinfor');
        $xlsData  = $xlsModel->select();
        $this->exportExcel($xlsName,$xlsCell,$xlsData);
         
    }

    //下面开始导出教师评价信息
    public function exportteacherComment(){
         $xlsName  = "User";
        $xlsCell  = array(
        array('StudentID','学号'),
        array('XingMing','名字'),
        array('Comment','评价内容'),
        //array('ClassName','班级名称'),
        array('LuRuShiJian','录入时间')
        );
        $xlsModel = M('viewteachercomment');
        $xlsData  = $xlsModel->select();
        $this->exportExcel($xlsName,$xlsCell,$xlsData);

        

    }

    //下面实现教师信息导入数据库
    public function TeacherImport(){
		if (!empty($_FILES)) {
            import('ORG.Net.UploadFile');
            $config=array(
                'allowExts'=>array('xlsx','xls'),
                'savePath'=>'./Public/upload/',
                'saveRule'=>'time',
            );
            $upload = new UploadFile($config);
            if (!$upload->upload()) {
                $this->error($upload->getErrorMsg());
            } else {
                $info = $upload->getUploadFileInfo();
                
            }
        
            vendor("PHPExcel.PHPExcel");
            $file_name=$info[0]['savepath'].$info[0]['savename'];
            $objReader = PHPExcel_IOFactory::createReader('Excel5');
            $objPHPExcel = $objReader->load($file_name,$encode='utf-8');
            $sheet = $objPHPExcel->setActiveSheetIndexByName('teacher');
            $highestRow = $sheet->getHighestRow(); // 取得总行数
            $highestColumn = $sheet->getHighestColumn(); // 取得总列数
            for($i=3;$i<=$highestRow;$i++){   
              $datauser['ID']= $datauser['HaoMa'] =$datauser['UserName']=strval($objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue());  
              $datastu['ID']=strval($objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue());
              $datastu['TeacherID']=strval($objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue());
			  $datastu['TeacherXingMing']=strval($objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue());
			  $datastu['DepartmentID']=strval($objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue());
          	  $datastu['Level']=strval($objPHPExcel->getActiveSheet()->getCell("E".$i)->getValue());
          	  $datastu['JXSJ']=strval($objPHPExcel->getActiveSheet()->getCell("F".$i)->getValue());
          	  $datastu['TelephoneNumber']=strval($objPHPExcel->getActiveSheet()->getCell("G".$i)->getValue());
          	  $datastu['QQ']=strval($objPHPExcel->getActiveSheet()->getCell("H".$i)->getValue());
          	  $datastu['BZ']=strval($objPHPExcel->getActiveSheet()->getCell("I".$i)->getValue());
              //这里要注意学生身份是1，教师是2，管理员3
              $datauser['Role']=2;
              $datauser['PassWord']='123456';              
              M('user')->add($datauser);
              M('teacher')->add($datastu);
              } 
        		$this->success('教师数据导入成功！');
        }else
            {
            $this->error("请选择上传的文件");
            }    
         
    }
    //下面开始导出教师数据到电子表格
    public function exportteacher(){
        $xlsName  = "User";
        $xlsCell  = array(
        array('TeacherID','教师号'),
        array('TeacherXingMing','名字'),
        array('DepartMentName','所属系')
        
        );
        $xlsModel = M('viewteacherinfo');
        $xlsData  = $xlsModel->select();
        $this->exportExcel($xlsName,$xlsCell,$xlsData);
       


    }
    //下面是导出系部表信息
    public function exportdepartment(){
		$xlsName  = "User";
        $xlsCell  = array(
        array('ID','编号'),
        array('DepartMentID','系部代码'),
        array('DepartMentName','系部名称'),
         array('Master','系主任'),
        array('LXDH','联系电话'),
        array('BZ','备注')
        );
        $xlsModel = M('department');
        $xlsData  = $xlsModel->select();
        $this->exportExcel($xlsName,$xlsCell,$xlsData);


    }
    //下面开始导出班级信息
    public function ClassExport(){
    	$xlsName  = "User";
        $xlsCell  = array(
        array('ClassID','编号'),
        array('ClassName','班级名称'),
        array('RXSJ','入学时间'),
         array('BZ','备注'),
        array('DepartMentName','系部名称'),
        array('TeacherXingMing','班主任')
        );
        $xlsModel = M('viewclassinfo');
        $xlsData  = $xlsModel->select();
        $this->exportExcel($xlsName,$xlsCell,$xlsData);



    }
    //下面开始导入班级信息
    public function ClassImport(){
	if (!empty($_FILES)) {
            import('ORG.Net.UploadFile');
            $config=array(
                'allowExts'=>array('xlsx','xls'),
                'savePath'=>'./Public/upload/',
                'saveRule'=>'time',
            );
            $upload = new UploadFile($config);
            if (!$upload->upload()) {
                $this->error($upload->getErrorMsg());
            } else {
                $info = $upload->getUploadFileInfo();
                
            }
        
            vendor("PHPExcel.PHPExcel");
            $file_name=$info[0]['savepath'].$info[0]['savename'];
            $objReader = PHPExcel_IOFactory::createReader('Excel5');
            $objPHPExcel = $objReader->load($file_name,$encode='utf-8');
            $sheet = $objPHPExcel->setActiveSheetIndexByName('class');
            $highestRow = $sheet->getHighestRow(); // 取得总行数
            $highestColumn = $sheet->getHighestColumn(); // 取得总列数
            for($i=3;$i<=$highestRow;$i++){   
              $datastu['ID']=strval($objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue());
              $datastu['ClassID']=strval($objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue());
			  $datastu['ClassName']=strval($objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue());
			  $datastu['TeacherID']=strval($objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue());
			  $datastu['DepartMentID']=strval($objPHPExcel->getActiveSheet()->getCell("E".$i)->getValue());
          	  $datastu['RXSJ']=strval($objPHPExcel->getActiveSheet()->getCell("F".$i)->getValue());
          	  $datastu['BZ']=strval($objPHPExcel->getActiveSheet()->getCell("G".$i)->getValue());
                                 
              M('class')->add($datastu);
              } 
        		$this->success('班级数据导入成功！');
        }else
            {
            $this->error("请选择上传的文件");
            }    


    }
    //下面实现系部表导入
    public function departmentImport(){
		if (!empty($_FILES)) {
            import('ORG.Net.UploadFile');
            $config=array(
                'allowExts'=>array('xlsx','xls'),
                'savePath'=>'./Public/upload/',
                'saveRule'=>'time',
            );
            $upload = new UploadFile($config);
            if (!$upload->upload()) {
                $this->error($upload->getErrorMsg());
            } else {
                $info = $upload->getUploadFileInfo();
                
            }
        
            vendor("PHPExcel.PHPExcel");
            $file_name=$info[0]['savepath'].$info[0]['savename'];
            $objReader = PHPExcel_IOFactory::createReader('Excel5');
            $objPHPExcel = $objReader->load($file_name,$encode='utf-8');
            $sheet = $objPHPExcel->setActiveSheetIndexByName('depart');
            $highestRow = $sheet->getHighestRow(); // 取得总行数
            $highestColumn = $sheet->getHighestColumn(); // 取得总列数
            for($i=3;$i<=$highestRow;$i++){   
              $datastu['ID']=strval($objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue());
              $datastu['DepartMentID']=strval($objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue());
			  $datastu['DepartMentName']=strval($objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue());
			  $datastu['Master']=strval($objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue());
			  $datastu['LXDH']=strval($objPHPExcel->getActiveSheet()->getCell("E".$i)->getValue());
          	  $datastu['BZ']=strval($objPHPExcel->getActiveSheet()->getCell("F".$i)->getValue());
          	 
                                 
              M('department')->add($datastu);
              } 
        		$this->success('系部数据导入成功！');
        	}else
            {
            $this->error("请选择上传的文件");
            }    



    }

	public function exportExcel($expTitle,$expCellName,$expTableData){
        $xlsTitle = iconv('utf-8', 'gb2312', $expTitle);//文件名称
        $fileName = $_SESSION['account'].date('_YmdHis');//or $xlsTitle 文件名称可根据自己情况设定
        $cellNum = count($expCellName);
        $dataNum = count($expTableData);
        vendor("PHPExcel.PHPExcel");
       
        $objPHPExcel = new PHPExcel();
        $cellName = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ');
        
        $objPHPExcel->getActiveSheet(0)->mergeCells('A1:'.$cellName[$cellNum-1].'1');//合并单元格
       // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', $expTitle.'  Export time:'.date('Y-m-d H:i:s'));  
        for($i=0;$i<$cellNum;$i++){
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$i].'2', $expCellName[$i][1]); 
        } 
          // Miscellaneous glyphs, UTF-8   
        for($i=0;$i<$dataNum;$i++){
          for($j=0;$j<$cellNum;$j++){
            $objPHPExcel->getActiveSheet(0)->setCellValue($cellName[$j].($i+3), $expTableData[$i][$expCellName[$j][0]]);
          }             
        }  
        
        header('pragma:public');
        header('Content-type:application/vnd.ms-excel;charset=utf-8;name="'.$xlsTitle.'.xls"');
        header("Content-Disposition:attachment;filename=$fileName.xls");//attachment新窗口打印inline本窗口打印
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  
        $objWriter->save('php://output'); 
        exit;   
    }  
}
