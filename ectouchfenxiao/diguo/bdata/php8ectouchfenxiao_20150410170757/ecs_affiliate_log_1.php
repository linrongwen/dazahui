<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_affiliate_log`;");
E_C("CREATE TABLE `ecs_affiliate_log` (
  `log_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) NOT NULL,
  `time` int(10) NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `point` int(10) NOT NULL DEFAULT '0',
  `separate_type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_affiliate_log` values('1','130','1423087580','264','tianxin264','29.94','1','0');");
E_D("replace into `ecs_affiliate_log` values('2','156','1423182996','583','tiantian','0.00','2','-1');");
E_D("replace into `ecs_affiliate_log` values('3','157','1423183420','583','tiantian','0.00','2','0');");
E_D("replace into `ecs_affiliate_log` values('4','158','1423183618','583','tiantian','0.00','12','0');");
E_D("replace into `ecs_affiliate_log` values('5','159','1423184164','583','tiantian','0.00','13','0');");
E_D("replace into `ecs_affiliate_log` values('6','160','1423185208','583','tiantian','31.20','14','-1');");
E_D("replace into `ecs_affiliate_log` values('7','161','1423185479','583','tiantian','0.00','14','0');");
E_D("replace into `ecs_affiliate_log` values('8','153','1423186230','346','tianxin346','165.00','8','0');");
E_D("replace into `ecs_affiliate_log` values('9','152','1423186237','571','tianxin571','35.40','2','0');");
E_D("replace into `ecs_affiliate_log` values('10','151','1423186242','571','tianxin571','165.00','8','0');");
E_D("replace into `ecs_affiliate_log` values('11','109','1423188296','382','tianxin382','165.00','8','0');");
E_D("replace into `ecs_affiliate_log` values('12','109','1423188296','382','tianxin382','82.50','4','0');");
E_D("replace into `ecs_affiliate_log` values('13','109','1423188296','382','tianxin382','19.25','1','0');");
E_D("replace into `ecs_affiliate_log` values('14','109','1423188296','382','tianxin382','8.25','0','0');");
E_D("replace into `ecs_affiliate_log` values('15','168','1423215453','284','tianxin284','257.40','13','0');");
E_D("replace into `ecs_affiliate_log` values('16','168','1423215453','284','tianxin284','128.70','6','0');");
E_D("replace into `ecs_affiliate_log` values('17','168','1423215453','284','tianxin284','30.03','1','0');");
E_D("replace into `ecs_affiliate_log` values('18','168','1423215453','284','tianxin284','12.87','1','0');");
E_D("replace into `ecs_affiliate_log` values('19','172','1423251141','583','tiantian','165.00','83','0');");
E_D("replace into `ecs_affiliate_log` values('20','173','1423258696','583','tiantian','0.00','14','0');");
E_D("replace into `ecs_affiliate_log` values('21','176','1423259745','583','tiantian','4.07','20','0');");
E_D("replace into `ecs_affiliate_log` values('22','174','1423259772','583','tiantian','0.45','2','0');");
E_D("replace into `ecs_affiliate_log` values('23','178','1423260208','583','tiantian','2.75','14','-1');");
E_D("replace into `ecs_affiliate_log` values('24','179','1423260554','583','tiantian','2.40','12','-1');");
E_D("replace into `ecs_affiliate_log` values('25','182','1423262842','583','tiantian','0.00','20','0');");
E_D("replace into `ecs_affiliate_log` values('26','183','1423264692','583','tiantian','0.00','12','0');");
E_D("replace into `ecs_affiliate_log` values('27','184','1423265015','583','tiantian','0.00','32','0');");
E_D("replace into `ecs_affiliate_log` values('28','185','1423265121','583','tiantian','437.40','32','0');");
E_D("replace into `ecs_affiliate_log` values('29','186','1423265393','583','tiantian','407.40','20','0');");
E_D("replace into `ecs_affiliate_log` values('30','187','1423265523','583','tiantian','60.00','20','0');");
E_D("replace into `ecs_affiliate_log` values('31','235','1424998181','1020','tianxin1020','68.75','0','-1');");
E_D("replace into `ecs_affiliate_log` values('32','235','1424998181','1019','tianxin1019','27.50','0','-1');");
E_D("replace into `ecs_affiliate_log` values('33','235','1424998181','980','tianxin980','13.75','0','-1');");
E_D("replace into `ecs_affiliate_log` values('34','232','1424998207','1006','tianxin1006','68.75','0','-1');");
E_D("replace into `ecs_affiliate_log` values('35','260','1425079245','1123','tianxin1123','13.75','0','0');");
E_D("replace into `ecs_affiliate_log` values('36','264','1425088150','1110','tianxin1110','2.95','0','-1');");
E_D("replace into `ecs_affiliate_log` values('37','286','1425248967','1151','tianxin1151','13.75','0','0');");
E_D("replace into `ecs_affiliate_log` values('38','290','1425279997','1110','tianxin1110','13.75','0','0');");
E_D("replace into `ecs_affiliate_log` values('39','341','1425528541','1496','tianxin1496','0.25','0','0');");
E_D("replace into `ecs_affiliate_log` values('40','347','1425537476','1515','tianxin1515','2.50','0','0');");
E_D("replace into `ecs_affiliate_log` values('41','348','1425537496','1516','tianxin1516','2.50','0','0');");
E_D("replace into `ecs_affiliate_log` values('42','348','1425537496','1515','tianxin1515','10.00','0','0');");
E_D("replace into `ecs_affiliate_log` values('43','349','1425539793','1516','tianxin1516','16.25','0','0');");
E_D("replace into `ecs_affiliate_log` values('44','349','1425539793','1515','tianxin1515','65.00','0','0');");
E_D("replace into `ecs_affiliate_log` values('45','349','1425539793','1521','tianxin1521','32.50','0','0');");
E_D("replace into `ecs_affiliate_log` values('46','349','1425539793','1516','tianxin1516','32.50','0','0');");
E_D("replace into `ecs_affiliate_log` values('47','349','1425539793','1515','tianxin1515','32.50','0','0');");
E_D("replace into `ecs_affiliate_log` values('48','350','1425540151','1516','tianxin1516','2.50','0','0');");
E_D("replace into `ecs_affiliate_log` values('49','350','1425540151','1515','tianxin1515','10.00','0','0');");
E_D("replace into `ecs_affiliate_log` values('50','350','1425540151','1521','tianxin1521','5.00','0','0');");
E_D("replace into `ecs_affiliate_log` values('51','350','1425540151','1516','tianxin1516','5.00','0','0');");
E_D("replace into `ecs_affiliate_log` values('52','350','1425540151','1515','tianxin1515','5.00','0','0');");
E_D("replace into `ecs_affiliate_log` values('53','351','1425540994','1515','tianxin1515','10.80','0','-1');");
E_D("replace into `ecs_affiliate_log` values('54','351','1425540994','1521','tianxin1521','43.20','0','0');");
E_D("replace into `ecs_affiliate_log` values('55','351','1425540994','1516','tianxin1516','21.60','0','-1');");
E_D("replace into `ecs_affiliate_log` values('56','351','1425540994','1515','tianxin1515','21.60','0','-1');");
E_D("replace into `ecs_affiliate_log` values('57','351','1425540994','1521','tianxin1521','21.60','0','0');");
E_D("replace into `ecs_affiliate_log` values('58','371','1427578842','1631','qiqi1631','11.96','0','0');");
E_D("replace into `ecs_affiliate_log` values('59','378','1427656703','1642','test','0.00','0','0');");
E_D("replace into `ecs_affiliate_log` values('60','378','1427656703','1634','hxdcr','0.00','0','0');");
E_D("replace into `ecs_affiliate_log` values('61','383','1428237284','1704','ljb890327','15.60','0','0');");
E_D("replace into `ecs_affiliate_log` values('62','392','1428311735','1730','xiasw','24.00','0','0');");
E_D("replace into `ecs_affiliate_log` values('63','393','1428312617','1745','llkk','20.00','0','0');");
E_D("replace into `ecs_affiliate_log` values('64','393','1428312617','1730','xiasw','15.00','0','0');");
E_D("replace into `ecs_affiliate_log` values('65','394','1428313899','1749','ggkk','26.00','0','0');");
E_D("replace into `ecs_affiliate_log` values('66','394','1428313899','1747','hhjj','19.50','0','0');");
E_D("replace into `ecs_affiliate_log` values('67','394','1428313899','1746','mmkk','4.55','0','0');");
E_D("replace into `ecs_affiliate_log` values('68','394','1428313899','1745','llkk','1.30','0','0');");
E_D("replace into `ecs_affiliate_log` values('69','394','1428313899','1730','xiasw','1.30','0','0');");
E_D("replace into `ecs_affiliate_log` values('70','395','1428317306','1749','ggkk','0.33','2','0');");
E_D("replace into `ecs_affiliate_log` values('71','395','1428317306','1747','hhjj','0.17','1','0');");
E_D("replace into `ecs_affiliate_log` values('72','395','1428317306','1746','mmkk','0.04','0','0');");
E_D("replace into `ecs_affiliate_log` values('73','395','1428317306','1745','llkk','0.02','0','0');");
E_D("replace into `ecs_affiliate_log` values('74','395','1428317306','1730','xiasw','0.00','0','0');");
E_D("replace into `ecs_affiliate_log` values('75','396','1428317415','1749','ggkk','0.06','1','0');");
E_D("replace into `ecs_affiliate_log` values('76','396','1428317415','1747','hhjj','0.03','0','0');");
E_D("replace into `ecs_affiliate_log` values('77','396','1428317415','1746','mmkk','0.01','0','0');");
E_D("replace into `ecs_affiliate_log` values('78','396','1428317415','1745','llkk','0.00','0','0');");
E_D("replace into `ecs_affiliate_log` values('79','396','1428317415','1730','xiasw','0.00','0','0');");
E_D("replace into `ecs_affiliate_log` values('80','399','1428376238','1749','ggkk','0.71','4','0');");
E_D("replace into `ecs_affiliate_log` values('81','399','1428376238','1747','hhjj','0.36','2','0');");
E_D("replace into `ecs_affiliate_log` values('82','399','1428376238','1746','mmkk','0.08','0','0');");
E_D("replace into `ecs_affiliate_log` values('83','399','1428376238','1745','llkk','0.04','0','0');");
E_D("replace into `ecs_affiliate_log` values('84','399','1428376238','1730','xiasw','0.00','0','0');");

require("../../inc/footer.php");
?>