<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_action`;");
E_C("CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=206 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_action` values('1','1','admin','1','0','2','0','1','1387156893');");
E_D("replace into `ecs_order_action` values('2','1','admin','5','5','2','0','','1387156897');");
E_D("replace into `ecs_order_action` values('3','1','admin','1','1','2','1','','1387156904');");
E_D("replace into `ecs_order_action` values('4','2','admin','1','0','2','0','1','1387157036');");
E_D("replace into `ecs_order_action` values('5','2','admin','5','5','2','0','','1387157039');");
E_D("replace into `ecs_order_action` values('6','2','admin','1','1','2','1','','1387157046');");
E_D("replace into `ecs_order_action` values('7','4','admin','1','0','2','0','gvhdtjdtyj','1390267814');");
E_D("replace into `ecs_order_action` values('8','4','admin','1','3','2','0','','1390267846');");
E_D("replace into `ecs_order_action` values('9','4','admin','5','5','2','0','tyi76','1390267854');");
E_D("replace into `ecs_order_action` values('10','4','admin','1','1','2','1','','1390267904');");
E_D("replace into `ecs_order_action` values('11','6','admin','1','0','0','0','','1390413159');");
E_D("replace into `ecs_order_action` values('12','6','admin','1','0','2','0','ityiu','1390413165');");
E_D("replace into `ecs_order_action` values('13','6','admin','5','5','2','0','','1390413171');");
E_D("replace into `ecs_order_action` values('14','6','admin','1','1','2','1','','1390413197');");
E_D("replace into `ecs_order_action` values('15','7','admin','1','0','0','0','','1390413526');");
E_D("replace into `ecs_order_action` values('16','7','admin','1','0','2','0','dftuftu','1390413531');");
E_D("replace into `ecs_order_action` values('17','7','admin','5','5','2','0','','1390413539');");
E_D("replace into `ecs_order_action` values('18','7','admin','1','1','2','1','','1390413545');");
E_D("replace into `ecs_order_action` values('19','8','admin','1','0','0','0','','1390413603');");
E_D("replace into `ecs_order_action` values('20','8','admin','1','0','2','0','r6ir','1390413608');");
E_D("replace into `ecs_order_action` values('21','8','admin','5','5','2','0','e58u68','1390413615');");
E_D("replace into `ecs_order_action` values('22','8','admin','1','1','2','1','','1390413621');");
E_D("replace into `ecs_order_action` values('23','9','admin','1','0','0','0','','1390413724');");
E_D("replace into `ecs_order_action` values('24','9','admin','1','0','2','0','e5r8uer568','1390413730');");
E_D("replace into `ecs_order_action` values('25','9','admin','5','5','2','0','rt6','1390413735');");
E_D("replace into `ecs_order_action` values('26','9','admin','1','1','2','1','','1390413742');");
E_D("replace into `ecs_order_action` values('27','10','admin','1','0','0','0','','1390413805');");
E_D("replace into `ecs_order_action` values('28','10','admin','1','0','2','0','e5r6ue4','1390413810');");
E_D("replace into `ecs_order_action` values('29','10','admin','5','5','2','0','','1390413815');");
E_D("replace into `ecs_order_action` values('30','10','admin','1','1','2','1','','1390413820');");
E_D("replace into `ecs_order_action` values('31','50','tianxin100','1','0','0','0','','1422254764');");
E_D("replace into `ecs_order_action` values('32','50','tianxin100','1','0','2','0','w','1422254788');");
E_D("replace into `ecs_order_action` values('33','50','tianxin100','5','5','2','0','erw','1422254795');");
E_D("replace into `ecs_order_action` values('34','50','tianxin100','1','1','2','1','erw','1422254795');");
E_D("replace into `ecs_order_action` values('35','50','买家','5','2','2','0','','1422255168');");
E_D("replace into `ecs_order_action` values('36','52','tianxin100','1','0','0','0','','1422255751');");
E_D("replace into `ecs_order_action` values('37','52','tianxin100','1','0','2','0','77','1422255761');");
E_D("replace into `ecs_order_action` values('38','52','tianxin100','5','5','2','0','','1422255765');");
E_D("replace into `ecs_order_action` values('39','52','tianxin100','1','1','2','1','','1422255765');");
E_D("replace into `ecs_order_action` values('40','53','tianxin100','1','0','0','0','','1422256629');");
E_D("replace into `ecs_order_action` values('41','53','tianxin100','1','0','2','0','o','1422256636');");
E_D("replace into `ecs_order_action` values('42','53','tianxin100','5','5','2','0','','1422256639');");
E_D("replace into `ecs_order_action` values('43','53','tianxin100','1','1','2','1','','1422256640');");
E_D("replace into `ecs_order_action` values('44','53','买家','5','2','2','0','','1422256659');");
E_D("replace into `ecs_order_action` values('45','74','buyer','2','0','0','0','用户取消','1422819371');");
E_D("replace into `ecs_order_action` values('46','96','buyer','2','0','0','0','用户取消','1422903290');");
E_D("replace into `ecs_order_action` values('47','105','buyer','2','0','0','0','用户取消','1422914405');");
E_D("replace into `ecs_order_action` values('48','109','buyer','2','0','0','0','用户取消','1423010561');");
E_D("replace into `ecs_order_action` values('49','112','buyer','2','0','0','0','用户取消','1423101244');");
E_D("replace into `ecs_order_action` values('50','139','buyer','2','0','0','0','用户取消','1423101246');");
E_D("replace into `ecs_order_action` values('51','156','tianxin100','1','0','0','0','','1423182948');");
E_D("replace into `ecs_order_action` values('52','156','tianxin100','1','0','2','0','1111','1423182960');");
E_D("replace into `ecs_order_action` values('53','156','tianxin100','5','5','2','0','','1423182979');");
E_D("replace into `ecs_order_action` values('54','156','tianxin100','1','1','2','1','','1423182979');");
E_D("replace into `ecs_order_action` values('55','157','tianxin100','1','0','0','0','','1423183336');");
E_D("replace into `ecs_order_action` values('56','157','tianxin100','1','0','2','0','zzz','1423183344');");
E_D("replace into `ecs_order_action` values('57','157','tianxin100','5','5','2','0','','1423183349');");
E_D("replace into `ecs_order_action` values('58','157','tianxin100','1','1','2','1','','1423183349');");
E_D("replace into `ecs_order_action` values('59','158','tianxin100','1','0','2','0','111','1423183601');");
E_D("replace into `ecs_order_action` values('60','158','tianxin100','5','5','2','0','','1423183605');");
E_D("replace into `ecs_order_action` values('61','158','tianxin100','1','1','2','1','','1423183605');");
E_D("replace into `ecs_order_action` values('62','158','买家','5','2','2','0','','1423183719');");
E_D("replace into `ecs_order_action` values('63','157','买家','5','2','2','0','','1423183722');");
E_D("replace into `ecs_order_action` values('64','159','tianxin100','1','0','0','0','','1423184021');");
E_D("replace into `ecs_order_action` values('65','159','tianxin100','1','0','2','0','111','1423184078');");
E_D("replace into `ecs_order_action` values('66','159','tianxin100','5','5','2','0','','1423184102');");
E_D("replace into `ecs_order_action` values('67','159','tianxin100','1','1','2','1','','1423184102');");
E_D("replace into `ecs_order_action` values('68','159','买家','5','2','2','0','','1423184116');");
E_D("replace into `ecs_order_action` values('69','156','买家','5','2','2','0','','1423185072');");
E_D("replace into `ecs_order_action` values('70','161','tianxin100','1','0','0','0','','1423195421');");
E_D("replace into `ecs_order_action` values('71','161','tianxin100','1','0','2','0','zzz','1423195613');");
E_D("replace into `ecs_order_action` values('72','161','tianxin100','5','5','2','0','','1423195639');");
E_D("replace into `ecs_order_action` values('73','161','tianxin100','1','1','2','1','','1423195639');");
E_D("replace into `ecs_order_action` values('74','167','buyer','2','0','0','0','用户取消','1423197938');");
E_D("replace into `ecs_order_action` values('75','166','buyer','2','0','0','0','用户取消','1423198051');");
E_D("replace into `ecs_order_action` values('76','155','tianxin100','1','0','0','0','','1423199248');");
E_D("replace into `ecs_order_action` values('77','155','tianxin100','1','0','2','0','z','1423199261');");
E_D("replace into `ecs_order_action` values('78','161','tianxin100','4','0','0','0','1111','1423199328');");
E_D("replace into `ecs_order_action` values('79','161','tianxin100','1','0','0','0','','1423199420');");
E_D("replace into `ecs_order_action` values('80','160','tianxin100','1','0','0','0','','1423199535');");
E_D("replace into `ecs_order_action` values('81','160','tianxin100','1','0','2','0','z','1423199546');");
E_D("replace into `ecs_order_action` values('82','160','tianxin100','5','5','2','0','','1423199551');");
E_D("replace into `ecs_order_action` values('83','160','tianxin100','1','1','2','1','','1423199551');");
E_D("replace into `ecs_order_action` values('84','160','tianxin100','5','2','2','0','zzz','1423199596');");
E_D("replace into `ecs_order_action` values('85','160','tianxin100','4','0','0','0','aaa','1423199609');");
E_D("replace into `ecs_order_action` values('86','160','tianxin100','1','0','0','0','','1423199629');");
E_D("replace into `ecs_order_action` values('87','160','tianxin100','1','0','2','0','zzz','1423199669');");
E_D("replace into `ecs_order_action` values('88','160','tianxin100','5','5','2','0','','1423199674');");
E_D("replace into `ecs_order_action` values('89','160','tianxin100','1','1','2','1','','1423199674');");
E_D("replace into `ecs_order_action` values('90','160','tianxin100','4','0','0','0','aaaaa','1423199714');");
E_D("replace into `ecs_order_action` values('91','172','tianxin100','1','0','0','0','','1423250711');");
E_D("replace into `ecs_order_action` values('92','172','tianxin100','1','0','2','0','1111','1423250855');");
E_D("replace into `ecs_order_action` values('93','172','tianxin100','1','3','2','0','','1423250873');");
E_D("replace into `ecs_order_action` values('94','172','tianxin100','5','5','2','0','','1423250900');");
E_D("replace into `ecs_order_action` values('95','174','tianxin100','1','0','0','0','','1423258821');");
E_D("replace into `ecs_order_action` values('96','174','tianxin100','1','3','0','0','','1423258844');");
E_D("replace into `ecs_order_action` values('97','174','tianxin100','5','5','0','0','','1423258998');");
E_D("replace into `ecs_order_action` values('98','174','tianxin100','1','1','0','1','','1423259111');");
E_D("replace into `ecs_order_action` values('99','174','买家','5','2','0','0','','1423259298');");
E_D("replace into `ecs_order_action` values('100','172','tianxin100','1','4','0','1','','1423259328');");
E_D("replace into `ecs_order_action` values('101','176','tianxin100','1','3','0','0','','1423259545');");
E_D("replace into `ecs_order_action` values('102','176','tianxin100','5','5','0','0','','1423259557');");
E_D("replace into `ecs_order_action` values('103','176','tianxin100','1','1','0','1','','1423259588');");
E_D("replace into `ecs_order_action` values('104','176','tianxin100','5','2','2','0','000','1423259615');");
E_D("replace into `ecs_order_action` values('105','178','tianxin100','1','3','0','0','','1423260036');");
E_D("replace into `ecs_order_action` values('106','178','tianxin100','5','5','0','0','','1423260053');");
E_D("replace into `ecs_order_action` values('107','178','tianxin100','1','1','0','1','','1423260184');");
E_D("replace into `ecs_order_action` values('108','179','tianxin100','1','0','0','0','','1423260317');");
E_D("replace into `ecs_order_action` values('109','179','tianxin100','1','3','0','0','','1423260322');");
E_D("replace into `ecs_order_action` values('110','179','tianxin100','5','5','0','0','','1423260326');");
E_D("replace into `ecs_order_action` values('111','179','tianxin100','1','1','0','1','','1423260373');");
E_D("replace into `ecs_order_action` values('112','179','tianxin100','5','5','0','1','','1423260389');");
E_D("replace into `ecs_order_action` values('113','179','tianxin100','1','1','0','1','','1423260413');");
E_D("replace into `ecs_order_action` values('114','179','tianxin100','5','0','0','0','aaa','1423260438');");
E_D("replace into `ecs_order_action` values('115','179','tianxin100','1','3','0','0','','1423260449');");
E_D("replace into `ecs_order_action` values('116','179','tianxin100','5','5','0','0','','1423260461');");
E_D("replace into `ecs_order_action` values('117','182','tianxin100','1','3','0','0','','1423262798');");
E_D("replace into `ecs_order_action` values('118','182','tianxin100','5','5','0','0','','1423262804');");
E_D("replace into `ecs_order_action` values('119','182','tianxin100','1','1','0','1','','1423262812');");
E_D("replace into `ecs_order_action` values('120','183','tianxin100','1','0','0','0','','1423264624');");
E_D("replace into `ecs_order_action` values('121','184','tianxin100','1','0','0','0','','1423264940');");
E_D("replace into `ecs_order_action` values('122','184','tianxin100','1','0','2','0','xxx','1423264996');");
E_D("replace into `ecs_order_action` values('123','184','tianxin100','5','5','2','0','','1423265003');");
E_D("replace into `ecs_order_action` values('124','184','tianxin100','1','1','2','1','','1423265003');");
E_D("replace into `ecs_order_action` values('125','193','buyer','2','0','0','0','用户取消','1423291587');");
E_D("replace into `ecs_order_action` values('126','205','buyer','2','0','0','0','用户取消','1423346019');");
E_D("replace into `ecs_order_action` values('127','222','admin','1','0','2','0','2323','1423405690');");
E_D("replace into `ecs_order_action` values('128','222','admin','5','5','2','0','','1423405718');");
E_D("replace into `ecs_order_action` values('129','222','admin','1','1','2','1','','1423405719');");
E_D("replace into `ecs_order_action` values('130','221','admin','1','0','2','0','2323','1423405733');");
E_D("replace into `ecs_order_action` values('131','222','买家','5','2','2','0','','1423405790');");
E_D("replace into `ecs_order_action` values('132','230','buyer','2','0','0','0','用户取消','1424985927');");
E_D("replace into `ecs_order_action` values('133','231','buyer','2','0','0','0','用户取消','1424989365');");
E_D("replace into `ecs_order_action` values('135','235','tianxin100','1','0','0','0','','1424997373');");
E_D("replace into `ecs_order_action` values('136','235','tianxin100','1','0','2','0','test','1424997658');");
E_D("replace into `ecs_order_action` values('137','235','tianxin100','5','5','2','0','','1424997684');");
E_D("replace into `ecs_order_action` values('138','235','tianxin100','1','1','2','1','','1424997684');");
E_D("replace into `ecs_order_action` values('139','235','买家','5','2','2','0','','1424997717');");
E_D("replace into `ecs_order_action` values('140','240','buyer','2','0','0','0','用户取消','1425015285');");
E_D("replace into `ecs_order_action` values('141','242','tianxin100','1','0','0','0','','1425016519');");
E_D("replace into `ecs_order_action` values('142','242','tianxin100','1','0','2','0','ad','1425016528');");
E_D("replace into `ecs_order_action` values('143','242','tianxin100','5','5','2','0','','1425016539');");
E_D("replace into `ecs_order_action` values('144','242','tianxin100','1','1','2','1','','1425016539');");
E_D("replace into `ecs_order_action` values('145','242','tianxin100','5','1','2','0','[售后] adf','1425016559');");
E_D("replace into `ecs_order_action` values('146','242','tianxin100','5','2','2','0','adf','1425016589');");
E_D("replace into `ecs_order_action` values('147','252','buyer','2','0','0','0','用户取消','1425060965');");
E_D("replace into `ecs_order_action` values('148','259','tianxin100','1','0','0','0','','1425078550');");
E_D("replace into `ecs_order_action` values('149','269','buyer','2','0','0','0','用户取消','1425111060');");
E_D("replace into `ecs_order_action` values('150','273','buyer','2','0','0','0','用户取消','1425153561');");
E_D("replace into `ecs_order_action` values('151','286','tianxin100','1','0','2','0','已付款','1425248998');");
E_D("replace into `ecs_order_action` values('152','286','tianxin100','5','5','2','0','','1425249006');");
E_D("replace into `ecs_order_action` values('153','286','tianxin100','1','1','2','1','','1425249015');");
E_D("replace into `ecs_order_action` values('154','286','买家','5','2','2','0','','1425249058');");
E_D("replace into `ecs_order_action` values('155','301','tianxin100','3','0','0','0','a','1425335700');");
E_D("replace into `ecs_order_action` values('156','311','buyer','2','0','0','0','用户取消','1425369075');");
E_D("replace into `ecs_order_action` values('162','339','tianxin100','5','5','2','0','','1425526903');");
E_D("replace into `ecs_order_action` values('158','317','tianxin100','1','0','0','0','','1425425529');");
E_D("replace into `ecs_order_action` values('159','317','tianxin100','1','0','2','0','测试改为付款','1425425580');");
E_D("replace into `ecs_order_action` values('160','317','tianxin100','5','5','2','0','','1425425612');");
E_D("replace into `ecs_order_action` values('161','317','tianxin100','1','1','2','1','','1425425612');");
E_D("replace into `ecs_order_action` values('163','339','tianxin100','1','1','2','1','','1425526904');");
E_D("replace into `ecs_order_action` values('164','344','tianxin100','5','5','2','0','','1425530919');");
E_D("replace into `ecs_order_action` values('165','344','tianxin100','1','1','2','1','','1425530919');");
E_D("replace into `ecs_order_action` values('166','369','ssssss','1','0','2','0','ss','1427495746');");
E_D("replace into `ecs_order_action` values('167','369','ssssss','1','3','2','0','','1427495761');");
E_D("replace into `ecs_order_action` values('168','369','ssssss','5','5','2','0','','1427495776');");
E_D("replace into `ecs_order_action` values('169','378','admin123','1','0','0','0','','1427654017');");
E_D("replace into `ecs_order_action` values('170','378','admin123','1','0','2','0','付款成功','1427654061');");
E_D("replace into `ecs_order_action` values('171','378','admin123','5','5','2','0','','1427654091');");
E_D("replace into `ecs_order_action` values('172','378','admin123','1','1','2','1','','1427654091');");
E_D("replace into `ecs_order_action` values('173','377','admin123','1','0','0','0','','1427665579');");
E_D("replace into `ecs_order_action` values('174','377','admin123','1','0','2','0',' 发个你能否','1427665594');");
E_D("replace into `ecs_order_action` values('175','376','admin123','1','0','0','0','','1427665608');");
E_D("replace into `ecs_order_action` values('176','375','admin123','1','0','0','0','','1427665621');");
E_D("replace into `ecs_order_action` values('177','375','admin123','1','0','2','0','程序','1427665630');");
E_D("replace into `ecs_order_action` values('178','375','admin123','1','3','2','0','','1427665646');");
E_D("replace into `ecs_order_action` values('179','375','admin123','5','5','2','0','','1427665669');");
E_D("replace into `ecs_order_action` values('180','391','admin123','5','5','2','0','','1428237705');");
E_D("replace into `ecs_order_action` values('181','391','admin123','1','1','2','1','','1428237705');");
E_D("replace into `ecs_order_action` values('182','391','买家','5','2','2','0','','1428304779');");
E_D("replace into `ecs_order_action` values('183','392','admin123','5','5','2','0','','1428311663');");
E_D("replace into `ecs_order_action` values('184','392','admin123','1','1','2','1','','1428311663');");
E_D("replace into `ecs_order_action` values('185','392','买家','5','2','2','0','','1428311722');");
E_D("replace into `ecs_order_action` values('186','393','admin123','5','5','2','0','','1428312575');");
E_D("replace into `ecs_order_action` values('187','393','admin123','1','1','2','1','','1428312576');");
E_D("replace into `ecs_order_action` values('188','393','买家','5','2','2','0','','1428312590');");
E_D("replace into `ecs_order_action` values('189','394','admin123','5','5','2','0','','1428313868');");
E_D("replace into `ecs_order_action` values('190','394','admin123','1','1','2','1','','1428313868');");
E_D("replace into `ecs_order_action` values('191','394','买家','5','2','2','0','','1428313886');");
E_D("replace into `ecs_order_action` values('192','395','admin123','5','5','2','0','','1428316038');");
E_D("replace into `ecs_order_action` values('193','395','admin123','1','1','2','1','','1428316096');");
E_D("replace into `ecs_order_action` values('194','395','买家','5','2','2','0','','1428316163');");
E_D("replace into `ecs_order_action` values('195','396','admin123','5','5','2','0','','1428316643');");
E_D("replace into `ecs_order_action` values('196','396','admin123','1','1','2','1','','1428316662');");
E_D("replace into `ecs_order_action` values('197','396','admin123','1','1','2','1','','1428316667');");
E_D("replace into `ecs_order_action` values('198','391','admin123','5','0','2','0','000000000','1428318469');");
E_D("replace into `ecs_order_action` values('199','391','admin123','1','3','2','0','','1428318543');");
E_D("replace into `ecs_order_action` values('200','391','admin123','5','5','2','0','','1428318577');");
E_D("replace into `ecs_order_action` values('201','391','admin123','1','1','2','1','','1428318592');");
E_D("replace into `ecs_order_action` values('202','391','买家','5','2','2','0','','1428373199');");
E_D("replace into `ecs_order_action` values('203','399','admin123','5','5','2','0','','1428376180');");
E_D("replace into `ecs_order_action` values('204','399','admin123','1','1','2','1','','1428376191');");
E_D("replace into `ecs_order_action` values('205','399','买家','5','2','2','0','','1428376217');");

require("../../inc/footer.php");
?>