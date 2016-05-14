<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_menu`;");
E_C("CREATE TABLE `wxch_menu` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `menu_type` varchar(6) NOT NULL,
  `level` int(1) NOT NULL,
  `name` varchar(30) NOT NULL,
  `value` varchar(250) NOT NULL,
  `aid` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_menu` values('1','click','1','商品查看','','0');");
E_D("replace into `wxch_menu` values('2','click','1','分销查看','','0');");
E_D("replace into `wxch_menu` values('3','click','1','人人科技','','0');");
E_D("replace into `wxch_menu` values('4','view','2','店铺演示','http://znrr.com/ectouchfx/mobile','1');");
E_D("replace into `wxch_menu` values('5','view','2','单品演示','http://znrr.com/ectouchfx/mobile/tuiguang.php?id=42','1');");
E_D("replace into `wxch_menu` values('6','click','2','精品新品','best','1');");
E_D("replace into `wxch_menu` values('7','click','2','热销商品','hot','1');");
E_D("replace into `wxch_menu` values('8','view','2','','','1');");
E_D("replace into `wxch_menu` values('9','view','2','分销中心','http://znrr.com/ectouchfx/mobile/distribute.php','2');");
E_D("replace into `wxch_menu` values('10','view','2','推广二维码','http://znrr.com/ectouchfx/mobile/article.php?id=44','2');");
E_D("replace into `wxch_menu` values('11','view','2','推广教程','http://znrr.com/ectouchfx/mobile/article.php?id=37','2');");
E_D("replace into `wxch_menu` values('12','click','2','','','2');");
E_D("replace into `wxch_menu` values('13','click','2','','','2');");
E_D("replace into `wxch_menu` values('14','view','2','QQ客服','http://wpa.qq.com/msgrd?v=3&uin=136349117&site=qq&menu=yes','3');");
E_D("replace into `wxch_menu` values('15','click','2','订单快递','kdcx','3');");
E_D("replace into `wxch_menu` values('16','click','2','大转盘','dzp','3');");
E_D("replace into `wxch_menu` values('17','click','2','砸金蛋','zjd','3');");
E_D("replace into `wxch_menu` values('18','click','2','签到','qiandao','3');");

require("../../inc/footer.php");
?>