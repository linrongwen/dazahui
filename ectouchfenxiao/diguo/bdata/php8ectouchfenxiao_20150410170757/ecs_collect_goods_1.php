<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_collect_goods`;");
E_C("CREATE TABLE `ecs_collect_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0',
  `is_attention` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `user_id` (`user_id`),
  KEY `goods_id` (`goods_id`),
  KEY `is_attention` (`is_attention`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_collect_goods` values('1','8','83','1390437384','0');");
E_D("replace into `ecs_collect_goods` values('2','13','114','1421590282','0');");
E_D("replace into `ecs_collect_goods` values('3','78','46','1422178380','0');");
E_D("replace into `ecs_collect_goods` values('4','101','17','1422223758','0');");
E_D("replace into `ecs_collect_goods` values('6','102','117','1422240817','0');");
E_D("replace into `ecs_collect_goods` values('7','139','17','1422283990','0');");
E_D("replace into `ecs_collect_goods` values('8','141','119','1422689910','0');");
E_D("replace into `ecs_collect_goods` values('9','164','24','1422721913','0');");
E_D("replace into `ecs_collect_goods` values('10','300','17','1422837640','0');");
E_D("replace into `ecs_collect_goods` values('11','273','117','1422843387','0');");
E_D("replace into `ecs_collect_goods` values('12','273','10','1422843485','0');");
E_D("replace into `ecs_collect_goods` values('13','356','22','1422903602','0');");
E_D("replace into `ecs_collect_goods` values('14','294','117','1422917156','0');");
E_D("replace into `ecs_collect_goods` values('15','381','17','1422918446','0');");
E_D("replace into `ecs_collect_goods` values('16','273','114','1422987891','0');");
E_D("replace into `ecs_collect_goods` values('17','422','122','1422990804','0');");
E_D("replace into `ecs_collect_goods` values('18','437','23','1423007254','0');");
E_D("replace into `ecs_collect_goods` values('19','439','21','1423007682','0');");
E_D("replace into `ecs_collect_goods` values('25','288','9','1423085686','0');");
E_D("replace into `ecs_collect_goods` values('26','516','114','1423094471','0');");
E_D("replace into `ecs_collect_goods` values('27','517','117','1423094995','0');");
E_D("replace into `ecs_collect_goods` values('28','519','17','1423095101','0');");
E_D("replace into `ecs_collect_goods` values('29','422','119','1423096603','0');");
E_D("replace into `ecs_collect_goods` values('30','336','5','1423113857','0');");
E_D("replace into `ecs_collect_goods` values('31','516','24','1423150389','0');");
E_D("replace into `ecs_collect_goods` values('32','394','114','1423182266','0');");
E_D("replace into `ecs_collect_goods` values('33','575','117','1423187867','0');");
E_D("replace into `ecs_collect_goods` values('34','516','117','1423196612','0');");
E_D("replace into `ecs_collect_goods` values('35','596','23','1423197587','0');");
E_D("replace into `ecs_collect_goods` values('36','614','107','1423224559','0');");
E_D("replace into `ecs_collect_goods` values('37','470','117','1423299018','0');");
E_D("replace into `ecs_collect_goods` values('39','708','21','1423359968','0');");
E_D("replace into `ecs_collect_goods` values('40','1055','117','1425022407','0');");
E_D("replace into `ecs_collect_goods` values('41','1081','17','1425061024','0');");
E_D("replace into `ecs_collect_goods` values('42','1084','117','1425061441','0');");
E_D("replace into `ecs_collect_goods` values('43','1216','114','1425212185','0');");
E_D("replace into `ecs_collect_goods` values('44','1124','17','1425230733','0');");
E_D("replace into `ecs_collect_goods` values('45','1267','17','1425248093','0');");
E_D("replace into `ecs_collect_goods` values('46','1286','17','1425256913','0');");
E_D("replace into `ecs_collect_goods` values('47','1284','72','1425277693','0');");
E_D("replace into `ecs_collect_goods` values('48','1248','46','1425323487','0');");
E_D("replace into `ecs_collect_goods` values('49','1362','121','1425352975','0');");
E_D("replace into `ecs_collect_goods` values('50','1377','17','1425358558','0');");
E_D("replace into `ecs_collect_goods` values('51','1380','67','1425362196','0');");
E_D("replace into `ecs_collect_goods` values('52','1407','123','1425414344','0');");
E_D("replace into `ecs_collect_goods` values('53','1414','10','1425423312','0');");
E_D("replace into `ecs_collect_goods` values('54','1485','76','1425527530','0');");
E_D("replace into `ecs_collect_goods` values('55','1514','17','1425534491','0');");
E_D("replace into `ecs_collect_goods` values('56','1490','17','1425538693','0');");
E_D("replace into `ecs_collect_goods` values('57','1497','17','1425586393','0');");
E_D("replace into `ecs_collect_goods` values('58','1564','123','1425599643','0');");

require("../../inc/footer.php");
?>