<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_feedback`;");
E_C("CREATE TABLE `ecs_feedback` (
  `msg_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `user_email` varchar(60) NOT NULL DEFAULT '',
  `msg_title` varchar(200) NOT NULL DEFAULT '',
  `msg_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `msg_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `msg_content` text NOT NULL,
  `msg_time` int(10) unsigned NOT NULL DEFAULT '0',
  `message_img` varchar(255) NOT NULL DEFAULT '0',
  `order_id` int(11) unsigned NOT NULL DEFAULT '0',
  `msg_area` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`msg_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_feedback` values('1','0','1','ecshop','ecshop@ecshop.com','三星SGH-F258什么时候到','4','0','三星SGH-F258什么时候有货','1242107197','','0','0');");
E_D("replace into `ecs_feedback` values('2','0','0','匿名用户','1111@qq.com','dfadggagag','2','0','agbbfnasfmnfgmndsmjhg,kgliulguilgfuykgjmb kuf','1388963921','','0','1');");
E_D("replace into `ecs_feedback` values('3','0','0','匿名用户','1111@qq.com','adgahgshahrgah','2','1','agna''a gnsd.kmbhas''gla nmknhl','1388964063','','0','1');");
E_D("replace into `ecs_feedback` values('4','0','75','weixin75','824479580@qq.com','哈哈','0','0','哈哈','1422172638','','0','0');");
E_D("replace into `ecs_feedback` values('5','0','75','weixin75','824479580@qq.com','哈哈','0','0','哈哈','1422172650','','0','0');");
E_D("replace into `ecs_feedback` values('6','0','446','tianxin446','','bhgg','0','0','hhgfg监控。拒绝咯嘣考虑了！','1423012568','','0','0');");
E_D("replace into `ecs_feedback` values('7','0','422','tianxin422','724505633@qq.com','哦哦','0','0','弄了','1423015461','','0','0');");
E_D("replace into `ecs_feedback` values('8','0','394','tianxin394','','留言','0','0','我要留言','1423098762','','0','0');");
E_D("replace into `ecs_feedback` values('9','0','1216','tianxin1216','','要东西','4','0','什么','1425208336','','0','0');");

require("../../inc/footer.php");
?>