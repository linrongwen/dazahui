<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `extension_code` varchar(30) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('1','1','1','14','','希思黎轻柔护肤西柚柔肤水250ml','','ECS000000','1','','0','1','颜色:灰色 \n');");
E_D("replace into `ecs_delivery_goods` values('2','2','1','14','','希思黎轻柔护肤西柚柔肤水250ml','','ECS000000','1','','0','5','颜色:灰色 \n');");
E_D("replace into `ecs_delivery_goods` values('3','3','123','0','','迪奥红毒女士香水EDT 50ml','迪奥','ECS000123','1','','0','1','外        观:红色 \n');");
E_D("replace into `ecs_delivery_goods` values('4','4','57','0','','凯文克莱BE中性香水200ml','凯文克莱','ECS000057','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('5','5','57','0','','凯文克莱BE中性香水200ml','凯文克莱','ECS000057','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('6','6','123','0','','迪奥红毒女士香水EDT 50ml','迪奥','ECS000123','1','','0','1','外        观:红色 \n');");
E_D("replace into `ecs_delivery_goods` values('7','6','53','0','',' 迪奥EDP真我女士香水50ml','迪奥','ECS000053','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('8','7','53','0','',' 迪奥EDP真我女士香水50ml','迪奥','ECS000053','1','','0','3','');");
E_D("replace into `ecs_delivery_goods` values('9','8','9','11','','雅诗兰黛第六代特润精华露50ml','雅诗兰黛','ECS000009','1','','0','3','颜色:白色 \n');");
E_D("replace into `ecs_delivery_goods` values('10','9','17','6','','娇韵诗超V型纤容紧致瘦脸面膜75ml','','ECS000017','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('11','10','114','0','','思亲肤绿茶泡沫洁面摩丝160ml','思亲肤','ECS000114','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('12','11','114','0','','思亲肤绿茶泡沫洁面摩丝160ml','思亲肤','ECS000114','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('13','12','21','4','','蜜丝佛陀纤柔眼线液1#0.75ml','蜜丝佛陀','ECS000021','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('14','13','21','4','','蜜丝佛陀纤柔眼线液1#0.75ml','蜜丝佛陀','ECS000021','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('15','14','123','0','','迪奥红毒女士香水EDT 50ml','迪奥','ECS000123','1',NULL,'0','1','外        观:红色 \n');");
E_D("replace into `ecs_delivery_goods` values('16','15','123','0','','迪奥红毒女士香水EDT 50ml','迪奥','ECS000123','1',NULL,'0','1','外        观:红色 \n');");
E_D("replace into `ecs_delivery_goods` values('17','15','10','9','','思亲肤90度卷长睫毛膏10g','思亲肤','ECS000010','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('18','16','21','0','','蜜丝佛陀纤柔眼线液1#0.75ml','蜜丝佛陀','ECS000021','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('19','16','123','0','','迪奥红毒女士香水EDT 50ml','迪奥','ECS000123','1',NULL,'0','1','外        观:红色 \n');");
E_D("replace into `ecs_delivery_goods` values('20','17','21','4','','蜜丝佛陀纤柔眼线液1#0.75ml','蜜丝佛陀','ECS000021','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('21','17','123','0','','迪奥红毒女士香水EDT 50ml','迪奥','ECS000123','1',NULL,'0','1','外        观:红色 \n');");
E_D("replace into `ecs_delivery_goods` values('22','18','21','4','','蜜丝佛陀纤柔眼线液1#0.75ml','蜜丝佛陀','ECS000021','1',NULL,'0','1','颜色:黑色 \r\n');");
E_D("replace into `ecs_delivery_goods` values('23','19','17','6','','娇韵诗超V型纤容紧致瘦脸面膜75ml','','ECS000017','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('24','20','21','4','','蜜丝佛陀纤柔眼线液1#0.75ml','蜜丝佛陀','ECS000021','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('25','21','53','0','',' 迪奥EDP真我女士香水50ml','迪奥','ECS000053','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('26','22','48','0','','娇兰小黑裙女士淡香水50ml','娇兰','ECS000048','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('28','24','123','0','','迪奥红毒女士香水EDT 50ml','迪奥','ECS000123','1',NULL,'0','1','外        观:红色 \n');");
E_D("replace into `ecs_delivery_goods` values('29','25','53','0','',' 迪奥EDP真我女士香水50ml','迪奥','ECS000053','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('30','26','123','0','','迪奥红毒女士香水EDT 50ml','迪奥','ECS000123','1',NULL,'0','1','外        观:红色 \n');");
E_D("replace into `ecs_delivery_goods` values('31','26','53','0','',' 迪奥EDP真我女士香水50ml','迪奥','ECS000053','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('32','27','114','0','','思亲肤绿茶泡沫洁面摩丝160ml','思亲肤','ECS000114','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('33','28','17','6','','娇韵诗超V型纤容紧致瘦脸面膜75ml','','ECS000017','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('34','29','17','6','','娇韵诗超V型纤容紧致瘦脸面膜75ml','','ECS000017','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('35','30','17','6','','娇韵诗超V型纤容紧致瘦脸面膜75ml','','ECS000017','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('36','31','114','0','','思亲肤绿茶泡沫洁面摩丝160ml','思亲肤','ECS000114','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('37','32','17','6','','娇韵诗超V型纤容紧致瘦脸面膜75ml','','ECS000017','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('38','33','152','0','','黄油弹','东日','1001','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('39','34','114','0','','思亲肤绿茶泡沫洁面摩丝160ml','思亲肤','ECS000114','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('40','35','154','0','','测试','','ECS000154','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('41','36','114','0','','思亲肤绿茶泡沫洁面摩丝160ml','思亲肤','ECS000114','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('49','43','157','0','','12044','凯文克莱','122100','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('43','38','121','0','','肌研极润玻尿酸保湿沫面乳100g','肌研','ECS000121','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('44','39','12','0','','雅顿保湿调理露200ml','雅顿','ECS000012','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('45','40','115','0','','DHC橄榄滋养皂90g','DHC','ECS000115','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('46','41','157','0','','12044','凯文克莱','122100','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('47','41','120','0','','曼秀雷敦洁清爽卸妆洁面泡200ml','曼秀雷敦','ECS000120','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('48','42','157','0','','12044','凯文克莱','122100','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('50','44','118','0','',' 理肤泉特安洁面乳200ml','理肤泉','ECS000118','1',NULL,'0','1','');");

require("../../inc/footer.php");
?>