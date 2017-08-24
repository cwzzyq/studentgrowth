TYPE=VIEW
query=select `studentgrowth`.`sg_admin`.`HaoMa` AS `HaoMa`,`studentgrowth`.`sg_admin`.`XingMin` AS `XingMin`,`studentgrowth`.`sg_roler`.`Roler` AS `Roler` from `studentgrowth`.`sg_admin` join `studentgrowth`.`sg_roler` where (`studentgrowth`.`sg_admin`.`Role` = `studentgrowth`.`sg_roler`.`RolerID`)
md5=85c5687bdd47099c269d2963d79a324d
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2017-08-15 00:54:55
create-version=1
source=SELECT  `sg_admin`.`HaoMa` ,  `sg_admin`.`XingMin` ,  `sg_roler`.`Roler` \nFROM sg_admin, sg_roler\nWHERE (\n`sg_admin`.`Role` =  `sg_roler`.`RolerID`\n)
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `studentgrowth`.`sg_admin`.`HaoMa` AS `HaoMa`,`studentgrowth`.`sg_admin`.`XingMin` AS `XingMin`,`studentgrowth`.`sg_roler`.`Roler` AS `Roler` from `studentgrowth`.`sg_admin` join `studentgrowth`.`sg_roler` where (`studentgrowth`.`sg_admin`.`Role` = `studentgrowth`.`sg_roler`.`RolerID`)
