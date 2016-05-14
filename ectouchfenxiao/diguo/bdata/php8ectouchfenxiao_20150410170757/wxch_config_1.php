<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_config`;");
E_C("CREATE TABLE `wxch_config` (
  `id` int(1) NOT NULL,
  `token` varchar(100) NOT NULL,
  `appid` char(18) NOT NULL,
  `appsecret` char(32) NOT NULL,
  `access_token` text NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `wxch_config` values('1','weixin','wxf43ec89081f287cb','1cac9b27e9c93931a1748394e7132b9e','jmYuwT0_9fy2qU2LhdUystx3_lw6xCDJ9qZJNwIT08VszVm0lE_zDcELzBiMgq4N7AeKDQLtCLfK3AtjzgbT19DmcrQjUBQ3cUM4mb49ei4','1428653410');");

require("../../inc/footer.php");
?>