TYPE=VIEW
query=select `studentgrowth`.`sg_teacher`.`TeacherID` AS `TeacherID`,`studentgrowth`.`sg_teacher`.`TeacherXingMing` AS `TeacherXingMing`,`studentgrowth`.`sg_department`.`DepartMentName` AS `DepartMentName` from (`studentgrowth`.`sg_teacher` join `studentgrowth`.`sg_department`) where (`studentgrowth`.`sg_teacher`.`DepartmentID` = `studentgrowth`.`sg_department`.`DepartMentID`)
md5=e90717a3aa8052928944705ca26b211a
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2017-08-15 00:43:00
create-version=1
source=select  `studentgrowth`.`sg_teacher`.`TeacherID`  AS  `TeacherID` ,\n `studentgrowth`.`sg_teacher`.`TeacherXingMing`  AS  `TeacherXingMing` ,\n `studentgrowth`.`sg_department`.`DepartMentName`  AS  `DepartMentName`  from (  `studentgrowth`.`sg_teacher`  join  `studentgrowth`.`sg_department`  ) where (  `studentgrowth`.`sg_teacher`.`DepartmentID`  =  `studentgrowth`.`sg_department`.`DepartMentID`  )
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `studentgrowth`.`sg_teacher`.`TeacherID` AS `TeacherID`,`studentgrowth`.`sg_teacher`.`TeacherXingMing` AS `TeacherXingMing`,`studentgrowth`.`sg_department`.`DepartMentName` AS `DepartMentName` from (`studentgrowth`.`sg_teacher` join `studentgrowth`.`sg_department`) where (`studentgrowth`.`sg_teacher`.`DepartmentID` = `studentgrowth`.`sg_department`.`DepartMentID`)
