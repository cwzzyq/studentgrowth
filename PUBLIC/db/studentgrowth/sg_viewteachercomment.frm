TYPE=VIEW
query=select `studentgrowth`.`sg_teachercomments`.`ID` AS `ID`,`studentgrowth`.`sg_student`.`StudentID` AS `StudentID`,`studentgrowth`.`sg_student`.`XingMing` AS `XingMing`,`studentgrowth`.`sg_teachercomments`.`Comment` AS `Comment`,`studentgrowth`.`sg_teachercomments`.`LuRuShiJian` AS `LuRuShiJian`,`studentgrowth`.`sg_student`.`ClassID` AS `ClassID`,`studentgrowth`.`sg_teachercomments`.`TeacherID` AS `TeacherID`,`studentgrowth`.`sg_teachercomments`.`XueQiShu` AS `XueQiShu` from (`studentgrowth`.`sg_teachercomments` join `studentgrowth`.`sg_student`) where (`studentgrowth`.`sg_teachercomments`.`XueHao` = `studentgrowth`.`sg_student`.`StudentID`)
md5=e5e23554c32da42d80af25edbeb424c8
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2017-08-15 00:43:00
create-version=1
source=select  `studentgrowth`.`sg_teachercomments`.`ID`  AS  `ID` ,\n `studentgrowth`.`sg_student`.`StudentID`  AS  `StudentID` ,\n `studentgrowth`.`sg_student`.`XingMing`  AS  `XingMing` ,\n `studentgrowth`.`sg_teachercomments`.`Comment`  AS  `Comment` ,\n `studentgrowth`.`sg_teachercomments`.`LuRuShiJian`  AS  `LuRuShiJian` ,\n `studentgrowth`.`sg_student`.`ClassID`  AS  `ClassID` ,\n `studentgrowth`.`sg_teachercomments`.`TeacherID`  AS  `TeacherID` ,\n `studentgrowth`.`sg_teachercomments`.`XueQiShu`  AS  `XueQiShu`  from (  `studentgrowth`.`sg_teachercomments`  join  `studentgrowth`.`sg_student`  ) where (  `studentgrowth`.`sg_teachercomments`.`XueHao`  =  `studentgrowth`.`sg_student`.`StudentID`  )
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `studentgrowth`.`sg_teachercomments`.`ID` AS `ID`,`studentgrowth`.`sg_student`.`StudentID` AS `StudentID`,`studentgrowth`.`sg_student`.`XingMing` AS `XingMing`,`studentgrowth`.`sg_teachercomments`.`Comment` AS `Comment`,`studentgrowth`.`sg_teachercomments`.`LuRuShiJian` AS `LuRuShiJian`,`studentgrowth`.`sg_student`.`ClassID` AS `ClassID`,`studentgrowth`.`sg_teachercomments`.`TeacherID` AS `TeacherID`,`studentgrowth`.`sg_teachercomments`.`XueQiShu` AS `XueQiShu` from (`studentgrowth`.`sg_teachercomments` join `studentgrowth`.`sg_student`) where (`studentgrowth`.`sg_teachercomments`.`XueHao` = `studentgrowth`.`sg_student`.`StudentID`)
