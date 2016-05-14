<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_searchengine`;");
E_C("CREATE TABLE `ecs_searchengine` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_searchengine` values('2014-06-24','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-01-25','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-01-26','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-02-01','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-02-03','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-02-04','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-02-05','GOOGLE','90');");
E_D("replace into `ecs_searchengine` values('2015-02-05','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-06','GOOGLE','821');");
E_D("replace into `ecs_searchengine` values('2015-02-06','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-07','GOOGLE','936');");
E_D("replace into `ecs_searchengine` values('2015-02-08','GOOGLE','1207');");
E_D("replace into `ecs_searchengine` values('2015-02-08','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-02-09','GOOGLE','1635');");
E_D("replace into `ecs_searchengine` values('2015-02-09','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-18','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-02-18','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2015-02-19','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-02-20','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2015-02-20','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-21','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-21','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-02-22','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-02-22','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-22','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-23','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-02-23','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-02-23','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-24','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-24','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-02-24','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-25','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2015-02-25','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-26','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-02-26','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-27','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2015-02-27','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-27','GOOGLE ADSENSE','1');");
E_D("replace into `ecs_searchengine` values('2015-02-28','GOOGLE','28');");
E_D("replace into `ecs_searchengine` values('2015-02-28','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-28','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-01','GOOGLE','13');");
E_D("replace into `ecs_searchengine` values('2015-03-01','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-01','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-02','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-03-02','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2015-03-03','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-03','GOOGLE','19');");
E_D("replace into `ecs_searchengine` values('2015-03-04','GOOGLE','22');");
E_D("replace into `ecs_searchengine` values('2015-03-04','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-05','GOOGLE','10');");
E_D("replace into `ecs_searchengine` values('2015-03-06','GOOGLE','17');");
E_D("replace into `ecs_searchengine` values('2015-03-07','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-03-27','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2015-03-28','GOOGLE','564');");
E_D("replace into `ecs_searchengine` values('2015-03-29','GOOGLE','744');");
E_D("replace into `ecs_searchengine` values('2015-03-30','GOOGLE','577');");
E_D("replace into `ecs_searchengine` values('2015-03-31','GOOGLE','558');");
E_D("replace into `ecs_searchengine` values('2015-04-01','GOOGLE','250');");
E_D("replace into `ecs_searchengine` values('2015-04-02','GOOGLE','398');");
E_D("replace into `ecs_searchengine` values('2015-04-03','GOOGLE','462');");
E_D("replace into `ecs_searchengine` values('2015-04-04','GOOGLE','169');");
E_D("replace into `ecs_searchengine` values('2015-04-04','MSN','1');");
E_D("replace into `ecs_searchengine` values('2015-04-05','GOOGLE','147');");
E_D("replace into `ecs_searchengine` values('2015-04-06','GOOGLE','210');");
E_D("replace into `ecs_searchengine` values('2015-04-07','GOOGLE','1102');");

require("../../inc/footer.php");
?>