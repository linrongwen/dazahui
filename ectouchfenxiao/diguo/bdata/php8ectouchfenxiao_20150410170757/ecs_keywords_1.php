<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2009-04-21','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-04-27','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-04','ecshop','斤','1');");
E_D("replace into `ecs_keywords` values('2009-05-10','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','三星','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','p806','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','夏新','1');");
E_D("replace into `ecs_keywords` values('2009-05-18','ecshop','52','2');");
E_D("replace into `ecs_keywords` values('2009-05-22','ecshop','p','1');");
E_D("replace into `ecs_keywords` values('2013-10-30','ecshop','11','1');");
E_D("replace into `ecs_keywords` values('2013-12-02','ecshop','雅诗兰黛即时修护眼部精华霜15ml','2');");
E_D("replace into `ecs_keywords` values('2013-12-02','ecshop','迪奥红毒女士香水EDT','1');");
E_D("replace into `ecs_keywords` values('2013-12-02','ecshop','50ml','1');");
E_D("replace into `ecs_keywords` values('2013-12-13','ecshop','雅诗兰黛鲜活营养红石榴眼霜15ml','1');");
E_D("replace into `ecs_keywords` values('2013-12-13','ecshop','雅诗兰黛','1');");
E_D("replace into `ecs_keywords` values('2013-12-16','ecshop','洁面','43');");
E_D("replace into `ecs_keywords` values('2013-12-17','ecshop','1','3');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','雅诗兰黛鲜活营养红石榴眼霜15ml','7');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','红石榴眼霜15ml','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','KD876','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','石榴','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','5D','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','兰蔻超塑颜5D提拉日霜法国版50ml','3');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','眼霜','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','雅诗兰黛红石榴鲜活晚霜50ml新','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','索爱原装M2卡读卡器','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','雅顿保湿调理露200ml','1');");
E_D("replace into `ecs_keywords` values('2013-12-27','ecshop','雅诗兰黛鲜活营养红石榴眼霜15ml','1');");
E_D("replace into `ecs_keywords` values('2014-01-06','ecshop','11','9');");
E_D("replace into `ecs_keywords` values('2014-01-22','ecshop','111','7');");
E_D("replace into `ecs_keywords` values('2014-01-22','ecshop','11','3');");
E_D("replace into `ecs_keywords` values('2014-05-17','ecshop','美体小铺','1');");
E_D("replace into `ecs_keywords` values('2015-01-26','ecshop','栖霞苹果','8');");
E_D("replace into `ecs_keywords` values('2015-01-26','ecshop','栖霞','5');");
E_D("replace into `ecs_keywords` values('2015-01-31','ecshop','草舍名院','1');");
E_D("replace into `ecs_keywords` values('2015-02-02','ecshop','mianmo','1');");
E_D("replace into `ecs_keywords` values('2015-02-03','ecshop','眼','3');");
E_D("replace into `ecs_keywords` values('2015-02-05','BAIDU','鐧惧','1');");
E_D("replace into `ecs_keywords` values('2015-02-06','ecshop','雅诗兰黛第六代特润精华露50ml','1');");
E_D("replace into `ecs_keywords` values('2015-02-06','BAIDU','鐧惧','1');");
E_D("replace into `ecs_keywords` values('2015-02-06','ecshop','电池','2');");
E_D("replace into `ecs_keywords` values('2015-02-06','ecshop','迪奥红毒女士香水EDT','1');");
E_D("replace into `ecs_keywords` values('2015-02-06','ecshop','眼睛','2');");
E_D("replace into `ecs_keywords` values('2015-02-06','ecshop','眼','3');");
E_D("replace into `ecs_keywords` values('2015-02-06','ecshop','面膜','1');");
E_D("replace into `ecs_keywords` values('2015-02-06','ecshop','11255','1');");
E_D("replace into `ecs_keywords` values('2015-02-06','ecshop','阿','1');");
E_D("replace into `ecs_keywords` values('2015-02-06','ecshop','香水','1');");
E_D("replace into `ecs_keywords` values('2015-02-07','ecshop','香水','4');");
E_D("replace into `ecs_keywords` values('2015-02-07','ecshop','兰','2');");
E_D("replace into `ecs_keywords` values('2015-02-08','BAIDU','鐧惧','2');");
E_D("replace into `ecs_keywords` values('2015-02-27','ecshop','香水','1');");
E_D("replace into `ecs_keywords` values('2015-02-27','ecshop','mao','1');");
E_D("replace into `ecs_keywords` values('2015-03-01','ecshop','768068275','2');");
E_D("replace into `ecs_keywords` values('2015-03-01','ecshop','不错','1');");
E_D("replace into `ecs_keywords` values('2015-03-03','ecshop','液','2');");
E_D("replace into `ecs_keywords` values('2015-03-04','ecshop','我','2');");
E_D("replace into `ecs_keywords` values('2015-03-04','ecshop','测试','5');");
E_D("replace into `ecs_keywords` values('2015-03-04','ecshop','122223','2');");
E_D("replace into `ecs_keywords` values('2015-03-05','ecshop','黄油','1');");
E_D("replace into `ecs_keywords` values('2015-03-05','ecshop','75','2');");
E_D("replace into `ecs_keywords` values('2015-03-06','ecshop','http://wxmiqi.wushuai.net/mobile/distribute.php','3');");
E_D("replace into `ecs_keywords` values('2015-03-27','ecshop','测试','2');");
E_D("replace into `ecs_keywords` values('2015-03-30','ecshop','测试','1');");

require("../../inc/footer.php");
?>