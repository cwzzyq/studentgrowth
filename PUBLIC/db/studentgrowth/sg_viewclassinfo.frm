TYPE=VIEW
query=select `studentgrowth`.`sg_class`.`ClassID` AS `ClassID`,`studentgrowth`.`sg_class`.`ClassName` AS `ClassName`,`studentgrowth`.`sg_class`.`RXSJ` AS `RXSJ`,`studentgrowth`.`sg_class`.`BZ` AS `BZ`,`studentgrowth`.`sg_department`.`DepartMentName` AS `DepartMentName`,`studentgrowth`.`sg_teacher`.`TeacherXingMing` AS `TeacherXingMing` from `studentgrowth`.`sg_class` join `studentgrowth`.`sg_department` join `studentgrowth`.`sg_teacher` where ((`studentgrowth`.`sg_class`.`DepartMentID` = `studentgrowth`.`sg_department`.`DepartMentID`) and (`studentgrowth`.`sg_class`.`TeacherID` = `studentgrowth`.`sg_teacher`.`TeacherID`))
md5=317dd1c6c6a5823ac1d3769762a43afe
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2017-08-16 11:35:58
create-version=1
source=SELECT `sg_class`.`ClassID`, `sg_class`.`ClassName`, `sg_class`.`RXSJ`, `sg_class`.`BZ`, `sg_department`.`DepartMentName`, `sg_teacher`.`TeacherXingMing`\nFROM sg_class, sg_department, sg_teacher\nWHERE ((`sg_class`.`DepartMentID` =`sg_department`.`departmentID`) AND (`sg_class`.`TeacherID` =`sg_teacher`.`TeacherID`))
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `studentgrowth`.`sg_class`.`ClassID` AS `ClassID`,`studentgrowth`.`sg_class`.`ClassName` AS `ClassName`,`studentgrowth`.`sg_class`.`RXSJ` AS `RXSJ`,`studentgrowth`.`sg_class`.`BZ` AS `BZ`,`studentgrowth`.`sg_department`.`DepartMentName` AS `DepartMentName`,`studentgrowth`.`sg_teacher`.`TeacherXingMing` AS `TeacherXingMing` from `studentgrowth`.`sg_class` join `studentgrowth`.`sg_department` join `studentgrowth`.`sg_teacher` where ((`studentgrowth`.`sg_class`.`DepartMentID` = `studentgrowth`.`sg_department`.`DepartMentID`) and (`studentgrowth`.`sg_class`.`TeacherID` = `studentgrowth`.`sg_teacher`.`TeacherID`))
