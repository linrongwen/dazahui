<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_account`;");
E_C("CREATE TABLE `ecs_user_account` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `admin_user` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `add_time` int(10) NOT NULL DEFAULT '0',
  `paid_time` int(10) NOT NULL DEFAULT '0',
  `admin_note` varchar(255) NOT NULL,
  `user_note` varchar(255) NOT NULL,
  `process_type` tinyint(1) NOT NULL DEFAULT '0',
  `payment` varchar(90) NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `is_paid` (`is_paid`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_account` values('1','121','','100.00','1422250800','0','','是','0','支付宝','0');");
E_D("replace into `ecs_user_account` values('3','313','','333.00','1422844317','0','','336','0','支付宝免签约支付','0');");
E_D("replace into `ecs_user_account` values('4','439','','1.00','1423021325','0','','1','0','支付宝','0');");
E_D("replace into `ecs_user_account` values('5','439','','1.00','1423021445','0','','1','0','支付宝免签约支付','0');");
E_D("replace into `ecs_user_account` values('6','284','','1.00','1423093665','0','','s','0','支付宝','0');");
E_D("replace into `ecs_user_account` values('7','284','','1.00','1423093689','0','','s','0','支付宝免签约支付','0');");
E_D("replace into `ecs_user_account` values('8','516','','100.00','1423150618','0','','充值','0','支付宝','0');");
E_D("replace into `ecs_user_account` values('9','516','','100.00','1423150631','0','','充值','0','支付宝','0');");
E_D("replace into `ecs_user_account` values('10','584','tianxin100','-475.00','1423199328','0','订单退款：2015020682447','2','1','','0');");
E_D("replace into `ecs_user_account` values('11','584','tianxin100','-475.00','1423199609','0','订单退款：2015020632639','2','1','','0');");
E_D("replace into `ecs_user_account` values('12','584','tianxin100','-75.00','1423199714','0','订单退款：2015020632639','2','1','','0');");
E_D("replace into `ecs_user_account` values('13','583','tianxin100','-174.67','1423261554','1423261632','aaaa','1111','1','','1');");
E_D("replace into `ecs_user_account` values('14','708','','1.00','1423365949','0','','111','0','支付宝免签约支付','0');");
E_D("replace into `ecs_user_account` values('15','738','','36.00','1423381544','0','','86','0','支付宝免签约支付','0');");
E_D("replace into `ecs_user_account` values('16','738','','55.00','1423381587','0','','86','0','银行汇款/转帐','0');");
E_D("replace into `ecs_user_account` values('17','822','tianxin100','-82.00','1424721859','1424722209','转转','真实姓名:【''考虑考虑】开户行:【罗经理】银行账户:【6123456789】手机:【13800138000】留言:【阿爸】','1','','1');");
E_D("replace into `ecs_user_account` values('18','1123','tianxin100','-200.00','1425079391','1425079427','取人','真实姓名:【罗瑞】开户行:【建行】银行账户:【5865455】手机:【13587455866】留言:【提现】','1','','1');");
E_D("replace into `ecs_user_account` values('19','1406','','1.00','1425414140','0','','111','0','支付宝','0');");
E_D("replace into `ecs_user_account` values('20','1492','tianxin100','1000.00','1425526580','1425526580','','','0','银行汇款/转帐','1');");
E_D("replace into `ecs_user_account` values('21','1493','tianxin100','1111.00','1425527486','1425527486','','','0','银行汇款/转帐','1');");
E_D("replace into `ecs_user_account` values('22','1496','tianxin100','10000.00','1425527686','1425527686','测试','','0','余额支付','1');");
E_D("replace into `ecs_user_account` values('23','1503','tianxin100','1000.00','1425528331','1425528331','','','0','银行汇款/转帐','1');");
E_D("replace into `ecs_user_account` values('24','1730','admin123','99999999.99','1428237669','1428237669','、、','。。。。','0','支付宝','1');");
E_D("replace into `ecs_user_account` values('25','1745','admin123','920209.00','1428311395','1428311395','','0000000','0','余额支付','1');");
E_D("replace into `ecs_user_account` values('26','1746','admin123','121215.00','1428312188','1428312188','','00000000000000','0','支付宝','1');");
E_D("replace into `ecs_user_account` values('27','1750','admin123','1515156.00','1428313670','1428313670','011','100','0','支付宝','1');");

require("../../inc/footer.php");
?>