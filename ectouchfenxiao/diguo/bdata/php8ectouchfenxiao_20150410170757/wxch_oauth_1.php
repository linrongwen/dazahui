<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_oauth`;");
E_C("CREATE TABLE `wxch_oauth` (
  `oid` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contents` text NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_oauth` values('1','手机版网站首页','http://znrr.com/ectouchfx/mobile','1862','1');");
E_D("replace into `wxch_oauth` values('12','推广教程','http://znrr.com/ectouchfx/mobile/article.php?id=37','976','1');");
E_D("replace into `wxch_oauth` values('13','推广首页','http://znrr.com/ectouchfx/mobile/','2372','1');");
E_D("replace into `wxch_oauth` values('14','分销中心','http://znrr.com/ectouchfx/mobile/mobile/distribute.php','1250','1');");
E_D("replace into `wxch_oauth` values('15','单品推广演示','http://znrr.com/ectouchfx/mobile/tianxin100.php','84','1');");
E_D("replace into `wxch_oauth` values('16','新单品演示','http://znrr.com/ectouchfx/mobile/tuiguang.php?id=41','528','1');");

require("../../inc/footer.php");
?>