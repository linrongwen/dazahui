<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_order`;");
E_C("CREATE TABLE `ecs_delivery_order` (
  `delivery_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(50) DEFAULT NULL,
  `add_time` int(10) unsigned DEFAULT '0',
  `shipping_id` tinyint(3) unsigned DEFAULT '0',
  `shipping_name` varchar(120) DEFAULT NULL,
  `user_id` mediumint(8) unsigned DEFAULT '0',
  `action_user` varchar(30) DEFAULT NULL,
  `consignee` varchar(60) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `country` smallint(5) unsigned DEFAULT '0',
  `province` smallint(5) unsigned DEFAULT '0',
  `city` smallint(5) unsigned DEFAULT '0',
  `district` smallint(5) unsigned DEFAULT '0',
  `sign_building` varchar(120) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `zipcode` varchar(60) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `best_time` varchar(120) DEFAULT NULL,
  `postscript` varchar(255) DEFAULT NULL,
  `how_oos` varchar(120) DEFAULT NULL,
  `insure_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `shipping_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `update_time` int(10) unsigned DEFAULT '0',
  `suppliers_id` smallint(5) DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `agency_id` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`delivery_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_order` values('1','20131216172137633','2013121684882','1','','1387156881','5','申通快递','0','admin','111','111','1','4','55','541','','222@qq.com','111','111','11','','','等待所有商品备齐后再发','0.00','15.00','1387156897','0','0','0');");
E_D("replace into `ecs_delivery_order` values('2','20131216172394315','2013121628773','2','','1387157023','5','申通快递','0','admin','111','333','1','7','101','902','','222@qq.com','444','5655','','','','等待所有商品备齐后再发','0.00','15.00','1387157039','0','0','0');");
E_D("replace into `ecs_delivery_order` values('3','20140121173059551','2014012127768','4','','1390267776','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1390267853','0','0','0');");
E_D("replace into `ecs_delivery_order` values('4','20140123095230972','2014012383197','6','','1390413144','5','申通快递','0','admin','111111','agagqarygsae','1','5','65','626','','123456@qq.com','235645','12345678944','','','','等待所有商品备齐后再发','0.00','15.00','1390413171','0','0','0');");
E_D("replace into `ecs_delivery_order` values('5','20140123095866393','2014012386380','7','','1390413515','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1390413539','0','0','0');");
E_D("replace into `ecs_delivery_order` values('6','20140123100066729','2014012362771','8','','1390413591','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1390413615','0','0','0');");
E_D("replace into `ecs_delivery_order` values('7','20140123100215181','2014012338692','9','','1390413714','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1390413735','0','0','0');");
E_D("replace into `ecs_delivery_order` values('8','20140123100344414','2014012367996','10','','1390413797','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1390413815','0','0','0');");
E_D("replace into `ecs_delivery_order` values('9','20150126224652626','2015012676129','50','2015012676129','1422252566','6','邮局平邮','123','tianxin100','uut','甘肃嘉峪关嘉峪关市yjjh','1','5','66','633','','','','12668','','','','等待所有商品备齐后再发','0.00','3.50','1422254795','0','0','0');");
E_D("replace into `ecs_delivery_order` values('10','20150126230276594','2015012666048','52','2015012666048','1422255608','6','邮局平邮','0','tianxin100','cs1','北京北京东城区time','1','2','52','500','','','','123654','','','','等待所有商品备齐后再发','0.00','3.50','1422255765','0','0','0');");
E_D("replace into `ecs_delivery_order` values('11','20150126231792785','2015012674208','53','2015012674208','1422256613','7','运费到付','125','tianxin100','q','广东佛山顺德区qw','1','6','80','748','','','','12','','','','等待所有商品备齐后再发','0.00','0.00','1422256639','0','0','0');");
E_D("replace into `ecs_delivery_order` values('12','20150206163602065','2015020681320','156','2015020681320','1423182909','5','申通快递','584','tianxin100','111','广东佛山顺德区1111','1','6','80','748','','1@qq.com','111','111','111','','','等待所有商品备齐后再发','0.00','15.00','1423182979','0','0','0');");
E_D("replace into `ecs_delivery_order` values('13','20150206164218532','2015020621739','157','2015020621739','1423183304','5','申通快递','584','tianxin100','111','广东佛山顺德区1111','1','6','80','748','','1@qq.com','111','111','111','','','等待所有商品备齐后再发','0.00','15.00','1423183349','0','0','0');");
E_D("replace into `ecs_delivery_order` values('14','20150206164654997','2015020674481','158','2015020674481','1423183566','5','申通快递','584','tianxin100','111','广东佛山顺德区1111','1','6','80','748','','1@qq.com','111','111','111','','','等待所有商品备齐后再发','0.00','15.00','1423183605','0','0','0');");
E_D("replace into `ecs_delivery_order` values('15','20150206165594857','2015020607872','159','2015020607872','1423183989','5','申通快递','584','tianxin100','111','广东佛山顺德区1111','1','6','80','748','','1@qq.com','111','111','111','','','等待所有商品备齐后再发','0.00','15.00','1423184102','0','0','0');");
E_D("replace into `ecs_delivery_order` values('16','20150206200768024','2015020682447','161','2015020682447','1423185466','7','运费到付','584','tianxin100','111','广东佛山顺德区1111','1','6','80','748','','1@qq.com','111','111','111','','','等待所有商品备齐后再发','0.00','0.00','1423195639','0','1','0');");
E_D("replace into `ecs_delivery_order` values('17','20150206211262175','2015020632639','160','2015020632639','1423185176','7','运费到付','584','tianxin100','111','广东佛山顺德区1111','1','6','80','748','','1@qq.com','111','111','111','','','等待所有商品备齐后再发','0.00','0.00','1423199551','0','1','0');");
E_D("replace into `ecs_delivery_order` values('18','20150206211456525','2015020632639','160','2015020632639','1423185176','7','运费到付','584','tianxin100','111','广东佛山顺德区1111','1','6','80','748','','1@qq.com','111','111','111','','','等待所有商品备齐后再发','0.00','0.00','1423199674','0','1','0');");
E_D("replace into `ecs_delivery_order` values('19','20150207112892822','2015020770905','172','','1423250184','7','运费到付','584','tianxin100','111','广东佛山顺德区1111','1','6','80','748','','111111@qq.com','111','111','','','','等待所有商品备齐后再发','0.00','0.00','1423250900','0','0','0');");
E_D("replace into `ecs_delivery_order` values('20','20150207134384498','2015020793639','174','','1423258790','3','城际快递','584','tianxin100','111','广东佛山顺德区1111','1','6','80','748','','111111@qq.com','111','111','','','','等待所有商品备齐后再发','0.00','10.00','1423258998','0','0','0');");
E_D("replace into `ecs_delivery_order` values('21','20150207135205552','2015020783969','176','','1423259441','3','城际快递','584','tianxin100','111','1111','1','6','80','748','','111111@qq.com','111','111','','','','','0.00','10.00','1423259557','0','0','0');");
E_D("replace into `ecs_delivery_order` values('22','20150207140083574','2015020772556','178','','1423259957','3','城际快递','584','tianxin100','111','1111','1','6','80','748','','111111@qq.com','111','111','','','','','0.00','0.00','1423260053','0','0','0');");
E_D("replace into `ecs_delivery_order` values('24','20150207140755539','2015020725891','179',NULL,'1423260267','3','城际快递','584','tianxin100','111','1111','1','6','80','748','','111111@qq.com','111','111','','','','等待所有商品备齐后再发','0.00','10.00','1423260461','0','2','0');");
E_D("replace into `ecs_delivery_order` values('25','20150207144662383','2015020736693','182','','1423262752','3','城际快递','584','tianxin100','111','1111','1','6','80','748','','111111@qq.com','111','111','','','','','0.00','10.00','1423262804','0','0','0');");
E_D("replace into `ecs_delivery_order` values('26','20150207152336693','2015020751098','184','2015020751098','1423264908','3','城际快递','584','tianxin100','111','广东佛山顺德区1111','1','6','80','748','','111111@qq.com','111','111','','','','等待所有商品备齐后再发','0.00','10.00','1423265003','0','0','0');");
E_D("replace into `ecs_delivery_order` values('27','20150209062865004','2015020985809','222','2015020985809','1423405659','5','申通快递','717','admin','gghh','广东佛山顺德区ggcfghh','1','6','80','748','','','','18638360405','','','','等待所有商品备齐后再发','0.00','15.00','1423405718','0','0','0');");
E_D("replace into `ecs_delivery_order` values('28','20150227164153913','2015022761267','235','2015022761267','1424997270','3','城际快递','1021','tianxin100','杨','广东广州番禺区石基','1','6','76','700','','','','15602280814','','','','等待所有商品备齐后再发','0.00','10.00','1424997684','0','0','0');");
E_D("replace into `ecs_delivery_order` values('29','20150227215510646','2015022752547','242','2015022752547','1425016323','5','申通快递','1049','tianxin100','刘研','贵州毕节黔西县快乐路','1','8','113','982','','','','13701267890','','','','等待所有商品备齐后再发','0.00','15.00','1425016539','0','0','0');");
E_D("replace into `ecs_delivery_order` values('30','20150302143053713','2015030221421','286','2015030221421','1425248190','5','申通快递','1268','tianxin100','测试订单','安徽宣城泾县不知道','1','3','50','493','','','','13033130620','','','','等待所有商品备齐后再发','0.00','15.00','1425249006','0','0','0');");
E_D("replace into `ecs_delivery_order` values('31','20150304153314842','2015030498139','317','2015030498139','1425422098','3','城际快递','1414','tianxin100','看演示','上海上海闸北区看演示烦请发货并写上真实快递单号','1','25','321','2704','','','','13120588333','','','','等待所有商品备齐后再发','0.00','10.00','1425425612','0','0','0');");
E_D("replace into `ecs_delivery_order` values('32','20150305194151171','2015030553506','339','2015030553506','1425526798','7','运费到付','1492','tianxin100','测试','安徽滁州天长市天长','1','3','40','427','','','','158550999999','','','','等待所有商品备齐后再发','0.00','0.00','1425526903','0','0','0');");
E_D("replace into `ecs_delivery_order` values('33','20150305204883880','2015030539358','344','2015030539358','1425530824','7','运费到付','1503','tianxin100','张','安徽滁州天长市天','1','3','40','427','','','','12345678910','','','','等待所有商品备齐后再发','0.00','0.00','1425530919','0','0','0');");
E_D("replace into `ecs_delivery_order` values('34','20150328143646057','2015032780071','369',NULL,'1427416473','5','申通快递','1640','ssssss','8654654','354654646554','1','3','40','426','','','','18680716512','','','','等待所有商品备齐后再发','0.00','15.00','1427495776','0','2','0');");
E_D("replace into `ecs_delivery_order` values('35','20150330103411429','2015033051204','378','2015033051204','1427653952','3','城际快递','1670','admin123','郭正','广东河源连平县1111','1','6','81','754','','','','15803315283','','','','等待所有商品备齐后再发','0.00','0.00','1427654091','0','0','0');");
E_D("replace into `ecs_delivery_order` values('36','20150330134713520','2015032875293','375',NULL,'1427522897','3','城际快递','1660','admin123','无聊了','消息女拒绝来咯了','1','27','343','2927','','','','15687456624','','','','等待所有商品备齐后再发','0.00','0.00','1427665668','2','2','0');");
E_D("replace into `ecs_delivery_order` values('43','20150407030963389','2015040665569','391','968790104283','1428237678','5','申通快递','1730','admin123','错错错错错错错错错错错错','挂号费的','1','2','52','500','','','','1111111111111','','','','等待所有商品备齐后再发','0.00','15.00','1428318577','0','0','0');");
E_D("replace into `ecs_delivery_order` values('38','20150407011426423','2015040705533','392','2015040705533','1428311628','7','运费到付','1745','admin123','00000000000','安徽蚌埠中市区000000000000','1','3','37','409','','','','000000000000000000000','','','','等待所有商品备齐后再发','0.00','0.00','1428311662','0','0','0');");
E_D("replace into `ecs_delivery_order` values('39','20150407012923824','2015040760778','393','2015040760778','1428312476','2','圆通速递','1746','admin123','1111111','北京北京东城区太累了咯','1','2','52','500','','','','11111111111','','','','等待所有商品备齐后再发','0.00','5.00','1428312575','0','0','0');");
E_D("replace into `ecs_delivery_order` values('40','20150407015173504','2015040737347','394','2015040737347','1428313783','10','中通速递','1750','admin123','000000000000000000000000','北京北京西城区0000000000000','1','2','52','501','','','','00','','','','等待所有商品备齐后再发','0.00','10.00','1428313868','0','0','0');");
E_D("replace into `ecs_delivery_order` values('41','20150407022728608','2015040712432','395','968790104283','1428315735','5','申通快递','1750','admin123','000000000000000000000000','0000000000000','1','2','52','501','','23232@qq.com','','00','','','','等待所有商品备齐后再发','0.00','15.00','1428316038','2','0','0');");
E_D("replace into `ecs_delivery_order` values('42','20150407023752913','2015040739071','396','968790104283','1428316615','5','申通快递','1750','admin123','000000000000000000000000','0000000000000','1','2','52','501','','23232@qq.com','','00','','','','等待所有商品备齐后再发','0.00','15.00','1428316643','0','0','0');");
E_D("replace into `ecs_delivery_order` values('44','20150407190934318','2015040722308','399','','1428376151','5','申通快递','1750','admin123','000000000000000000000000','0000000000000','1','2','52','501','','23232@qq.com','','00','','','','等待所有商品备齐后再发','0.00','15.00','1428376180','0','0','0');");

require("../../inc/footer.php");
?>