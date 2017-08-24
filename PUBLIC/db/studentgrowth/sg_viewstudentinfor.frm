TYPE=VIEW
query=select `studentgrowth`.`sg_student`.`ClassID` AS `ClassID`,`studentgrowth`.`sg_class`.`TeacherID` AS `TeacherID`,`studentgrowth`.`sg_student`.`StudentID` AS `StudentID`,`studentgrowth`.`sg_student`.`XingMing` AS `XingMing`,`studentgrowth`.`sg_teacher`.`TeacherXingMing` AS `TeacherXingMing`,`studentgrowth`.`sg_department`.`DepartMentName` AS `DepartMentName`,`studentgrowth`.`sg_class`.`ClassName` AS `ClassName` from (((`studentgrowth`.`sg_student` join `studentgrowth`.`sg_class`) join `studentgrowth`.`sg_department`) join `studentgrowth`.`sg_teacher`) where ((`studentgrowth`.`sg_student`.`DepartMentID` = `studentgrowth`.`sg_department`.`DepartMentID`) and (`studentgrowth`.`sg_student`.`ClassID` = `studentgrowth`.`sg_class`.`ClassID`) and (`studentgrowth`.`sg_class`.`TeacherID` = `studentgrowth`.`sg_teacher`.`TeacherID`))
md5=ee5da41a7333a52a1d8b07c731315f23
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2017-08-16 12:41:13
create-version=1
source=SELECT\nsg_student.ClassID AS ClassID,\nsg_class.TeacherID AS TeacherID,\nsg_student.StudentID AS StudentID,\nsg_student.XingMing AS XingMing,\nsg_teacher.TeacherXingMing AS TeacherXingMing,\nsg_department.DepartMentName AS DepartMentName,\nsg_class.ClassName\nfrom (((`sg_student` join `sg_class`) join `sg_department`) join `sg_teacher`)\nwhere ((`sg_student`.`DepartMentID` = `sg_department`.`DepartMentID`) and (`sg_student`.`ClassID` = `sg_class`.`ClassID`) and (`sg_class`.`TeacherID` = `sg_teacher`.`TeacherID`))
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `studentgrowth`.`sg_student`.`ClassID` AS `ClassID`,`studentgrowth`.`sg_class`.`TeacherID` AS `TeacherID`,`studentgrowth`.`sg_student`.`StudentID` AS `StudentID`,`studentgrowth`.`sg_student`.`XingMing` AS `XingMing`,`studentgrowth`.`sg_teacher`.`TeacherXingMing` AS `TeacherXingMing`,`studentgrowth`.`sg_department`.`DepartMentName` AS `DepartMentName`,`studentgrowth`.`sg_class`.`ClassName` AS `ClassName` from (((`studentgrowth`.`sg_student` join `studentgrowth`.`sg_class`) join `studentgrowth`.`sg_department`) join `studentgrowth`.`sg_teacher`) where ((`studentgrowth`.`sg_student`.`DepartMentID` = `studentgrowth`.`sg_department`.`DepartMentID`) and (`studentgrowth`.`sg_student`.`ClassID` = `studentgrowth`.`sg_class`.`ClassID`) and (`studentgrowth`.`sg_class`.`TeacherID` = `studentgrowth`.`sg_teacher`.`TeacherID`))
