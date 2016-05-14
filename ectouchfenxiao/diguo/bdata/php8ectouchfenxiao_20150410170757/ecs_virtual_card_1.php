<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_virtual_card`;");
E_C("CREATE TABLE `ecs_virtual_card` (
  `card_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `card_sn` varchar(60) NOT NULL DEFAULT '',
  `card_password` varchar(60) NOT NULL DEFAULT '',
  `add_date` int(11) NOT NULL DEFAULT '0',
  `end_date` int(11) NOT NULL DEFAULT '0',
  `is_saled` tinyint(1) NOT NULL DEFAULT '0',
  `order_sn` varchar(20) NOT NULL DEFAULT '',
  `crc32` varchar(12) NOT NULL DEFAULT '0',
  PRIMARY KEY (`card_id`),
  KEY `goods_id` (`goods_id`),
  KEY `car_sn` (`card_sn`),
  KEY `is_saled` (`is_saled`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_virtual_card` values('1','25','RVlYQhFY','RVlYQhFYQg','1241972716','1273449600','0','','-1958172277');");
E_D("replace into `ecs_virtual_card` values('2','25','RVlYQhFYQhFQEg','RVlYQhFYQhFQEg','1241972726','1273449600','0','','-1958172277');");
E_D("replace into `ecs_virtual_card` values('3','26','RVlYQhFYQg','RVlYQhFYQg','1241972801','1273449600','0','','-1958172277');");
E_D("replace into `ecs_virtual_card` values('4','26','RVlYQhFYQhFQEVo','RVlYQhFYQhFQEVo','1241972811','1273449600','0','','-1958172277');");

require("../../inc/footer.php");
?>