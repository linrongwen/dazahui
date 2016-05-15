<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_log`;");
E_C("CREATE TABLE `ecs_admin_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `log_info` varchar(255) NOT NULL DEFAULT '',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=214 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_log` values('1','1418106099','1','添加商品分类: 面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2','1418106208','1','添加商品分类: 试管面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3','1418106615','1','添加商品: 红馆—蜗牛原液蚕丝面膜（独家配方）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('4','1418106712','1','添加商品: 白管---酵母美白面膜（独家配方）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('5','1418106743','1','编辑商品: 红馆—蜗牛原液蚕丝面膜（独家配方）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('6','1418106755','1','编辑商品: 白管---酵母美白面膜（独家配方）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('7','1418538749','1','添加广告位置: 热销商品广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('8','1418538962','1','添加广告: 第一个位置','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('9','1418539011','1','添加广告位置: 首页商品栏广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('10','1418539194','1','添加广告: 首页广告栏广告位一','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('11','1418539257','1','编辑广告位置: 首页商品栏广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('12','1418539472','1','添加商品分类: 积分兑换礼品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('13','1418539489','1','编辑商品分类: 积分兑换礼品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('14','1418539634','1','添加商品: 积分兑换礼品一','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('15','1418547429','1','编辑商品: 积分兑换礼品一','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('16','1418548820','1','添加商品: 兑换礼品二','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('17','1418548866','1','添加商品: 兑换礼品三','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('18','1418548896','1','添加商品: 兑换礼品四','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('19','1418613494','1','添加积分可兑换的商品: 3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('20','1418613512','1','添加积分可兑换的商品: 4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('21','1418613548','1','添加积分可兑换的商品: 5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('22','1418613587','1','添加积分可兑换的商品: 6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('23','1418614458','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('24','1418628126','1','编辑广告: 单片恩如氏试管面膜 恩如氏美白面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('25','1418628173','1','编辑广告: 如氏试管面膜 恩如氏美白面膜如氏试管面膜恩如氏美白面膜如氏试管面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('26','1418633415','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('27','1418739398','1','添加供货商管理: 刘翔','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('28','1418798974','1','添加文章: 品牌','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('29','1418799092','1','编辑文章: 公司简介','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('30','1418889642','1','安装支付方式: 货到付款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('31','1418889651','1','安装支付方式: 余额支付','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('32','1418889706','1','安装配送方式: 运费到付','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('33','1418889719','1','安装配送方式: 上门取货','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('34','1418889733','1','安装配送方式: 申通快递','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('35','1418889857','1','添加配送区域: 中国','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('36','1418913942','1','编辑广告: 3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('37','1418913967','1','编辑广告: 2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('38','1418914564','1','编辑广告: 1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('39','1419108146','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('40','1419473051','1','批量回收商品: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('41','1419473071','1','批量回收商品: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('42','1419473404','1','编辑商品: 柔润倍护美颈霜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('43','1419473476','1','编辑商品: 逆龄提拉神仙水','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('44','1419473485','1','编辑商品: 逆龄提拉神仙水','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('45','1419473498','1','编辑商品: 柔润倍护美颈霜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('46','1419473578','1','添加商品: 臻白焕颜面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('47','1419473599','1','编辑商品: 臻白焕颜面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('48','1419473656','1','编辑商品: 臻白焕颜面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('49','1419474125','1','编辑商品: 臻白焕颜面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('50','1419476063','1','编辑广告位置: 底部广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('51','1419476086','1','删除广告: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('52','1419476098','1','删除广告位置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('53','1419476208','1','编辑广告: 魔力坊  魔力坊','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('54','1419476509','1','编辑广告: 3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('55','1419476520','1','编辑广告: 2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('56','1419476530','1','编辑广告: 1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('57','1419476718','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('58','1419476878','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('59','1419477336','1','编辑品牌管理: 魔力坊','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('60','1419500138','1','添加文章分类: 美肤学堂','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('61','1419500158','1','添加文章: 美肤学堂文章一','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('62','1419700589','1','编辑会员余额: (到款审核)jioji','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('63','1419701140','1','安装支付方式: 微信支付','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('64','1419744426','1','编辑会员余额: (到款审核)rer','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('65','1420010114','1','编辑会员余额: (到款审核)olol','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('66','1420307616','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('67','1421078477','1','添加商品: fwef','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('68','1421078500','1','编辑商品: fwef','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('69','1421083501','1','编辑会员账号: 17580566','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('70','1421083513','1','编辑会员账号: 17580566','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('71','1421083520','1','编辑会员账号: 90818176','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('72','1421083531','1','编辑会员账号: 90818176','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('73','1421083661','1','编辑会员账号: 90818176','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('74','1421083663','1','编辑会员账号: 90818176','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('75','1421083665','1','编辑会员账号: 17580566','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('76','1421083665','1','编辑会员账号: 17580566','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('77','1421083668','1','编辑会员账号: 17580566','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('78','1421083672','1','编辑会员账号: 90818176','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('79','1421084013','1','编辑商品: 臻白焕颜面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('80','1421085098','1','编辑商品: fwef','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('81','1421086004','1','添加文章分类: 网站公告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('82','1421086037','1','添加文章: 网站公告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('83','1421086847','1','编辑商品: 柔润倍护美颈霜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('84','1421088801','1','编辑商品: fwef','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('85','1421088949','1','编辑商品: fwef','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('86','1422027886','1','编辑商品: 臻白焕颜面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('87','1422029552','1','编辑会员账号: 90818176','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('88','1422029759','1','编辑品牌管理: 魔力坊','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('89','1422030010','1','添加品牌管理: 乐福尔','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('90','1422030638','1','编辑商品: 臻白焕颜面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('91','1422031078','1','编辑商品分类: 试管面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('92','1422031161','1','编辑品牌管理: 乐福尔','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('93','1422031693','1','编辑商品分类: 试管面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('94','1422194120','1','编辑订单: 2015010115486','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('95','1422199527','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('96','1422201912','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('97','1422201927','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('98','1422233413','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('99','1422233497','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('100','1422235794','1','编辑会员账号: 48938293','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('101','1422235795','1','编辑会员账号: 48938293','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('102','1422255203','1','编辑商品分类: 试管面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('103','1422255266','1','编辑商品分类: 面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('104','1422260172','1','添加商品: fwef','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('105','1422294303','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('106','1422543638','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('107','1422544412','1','编辑商品: 臻白焕颜面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('108','1422676179','1','卸载支付方式: wxpay','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('109','1422685254','1','添加文章: 联系我们2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('110','1422685268','1','添加文章: 联系我们3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('111','1422685283','1','添加文章: 联系我们4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('112','1422829908','1','安装支付方式: 新版本微信支付','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('113','1422951719','1','添加: 张家界服务中心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('114','1422953758','1','编辑: 张家界服务中心2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('115','1422953819','1','编辑: 张家界服务中心2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('116','1422954100','1','编辑: 张家界服务中心2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('117','1422954139','1','编辑: 张家界服务中心2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('118','1422954167','1','编辑: 张家界服务中心2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('119','1422954231','1','编辑: 张家界服务中心2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('120','1422955399','1','编辑: 张家界服务中心2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('121','1422955508','1','删除: 张家界服务中心2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('122','1423156526','1','添加: 东营市河口区服务中心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('123','1423156586','1','添加: 河北沧州服务中心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('124','1423158570','1','编辑: 东营市河口区服务中心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('125','1423163024','1','编辑: 东营市河口区服务中心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('126','1423213341','1','编辑: 东营市河口区服务中心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('127','1423584630','1','添加商品分类: fe ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('128','1423584638','1','删除商品分类: fe','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('129','1425804982','1','编辑文章: 推广页面','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('130','1426908972','1','编辑文章: 品牌故事','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('131','1426908985','1','编辑文章: 赚钱秘籍','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('132','1426909004','1','编辑文章: 联系','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('133','1426909009','1','编辑文章: 赚钱秘籍','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('134','1426909013','1','编辑文章: 联系我们','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('135','1433504692','1','批量回收商品: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('136','1433504760','1','添加商品: 甜心100测试商品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('137','1433504834','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('138','1433504937','1','编辑商品: 甜心100测试商品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('139','1433531642','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('140','1433531659','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('141','1433534232','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('142','1433534239','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('143','1433534695','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('144','1433534760','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('145','1433534790','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('146','1433534828','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('147','1433542285','1','编辑订单: 2015021636347','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('148','1433542498','1','添加属性: 颜色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('149','1433542524','1','编辑商品: 甜心100测试商品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('150','1433542643','1','添加属性: 大小','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('151','1433542663','1','编辑商品: 甜心100测试商品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('152','1433542733','1','商品: 10','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('153','1433542733','1','商品: 10','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('154','1433542733','1','商品: 10','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('155','1433542733','1','商品: 10','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('156','1433542733','1','商品: 10','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('157','1433542733','1','商品: 10','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('158','1433542733','1','商品: 10','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('159','1433542733','1','商品: 10','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('160','1433542733','1','商品: 10','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('161','1433549260','1','添加文章: 1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('162','1433549445','1','编辑文章: 单品推广','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('163','1433550452','1','编辑商店设置: ','61.143.18.181');");
E_D("replace into `ecs_admin_log` values('164','1433551163','1','编辑配送区域: 中国','61.143.18.181');");
E_D("replace into `ecs_admin_log` values('165','1433551774','1','编辑会员账号: 6020202','61.143.18.181');");
E_D("replace into `ecs_admin_log` values('166','1433551775','1','编辑会员账号: 6020202','61.143.18.181');");
E_D("replace into `ecs_admin_log` values('167','1433551804','1','编辑会员账号: 6020202','61.143.18.181');");
E_D("replace into `ecs_admin_log` values('168','1433551805','1','编辑会员账号: 6020202','61.143.18.181');");
E_D("replace into `ecs_admin_log` values('169','1433593727','1','编辑会员账号: 6020202','113.93.19.216');");
E_D("replace into `ecs_admin_log` values('170','1433594017','1','编辑会员账号: 6020202','113.93.19.216');");
E_D("replace into `ecs_admin_log` values('171','1433594163','1','编辑会员账号: 111111','113.93.19.216');");
E_D("replace into `ecs_admin_log` values('172','1433604668','1','编辑会员账号: 3534820','113.93.19.216');");
E_D("replace into `ecs_admin_log` values('173','1433604685','1','编辑会员账号: 3534820','113.93.19.216');");
E_D("replace into `ecs_admin_log` values('174','1435243369','1','编辑权限管理: xiaojun','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('175','1435313766','1','删除权限管理: xiaojun','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('176','1435313916','1','编辑权限管理: admin','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('177','1435314188','1','编辑文章: 推广页面','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('178','1435314208','1','批量删除会员账号: liyuyi,73514709,51366271,90818176,17580566,48938293,1883575,111111,6020202,7039184','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('179','1435314680','1','批量回收商品: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('180','1435314736','1','删除操作日志: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('181','1435314745','1','批量删除商品: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('182','1435314761','1','删除订单: 2','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('183','1435314761','1','删除订单: 9','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('184','1435314761','1','删除订单: 10','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('185','1435314849','1','编辑广告: 魔力坊','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('186','1435314872','1','删除广告: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('187','1435314923','1','删除文章: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('188','1435314923','1','删除文章: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('189','1435314923','1','删除文章: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('190','1435314923','1','删除文章: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('191','1435314923','1','删除文章: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('192','1435314923','1','删除文章: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('193','1435314923','1','删除文章: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('194','1435314923','1','删除文章: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('195','1435314923','1','删除文章: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('196','1435314923','1','删除文章: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('197','1435314923','1','删除文章: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('198','1435314926','1','编辑文章: 用户协议','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('199','1435314943','1','删除商品分类: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('200','1435314945','1','删除商品分类: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('201','1435315080','1','编辑商店设置: ','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('202','1435315110','1','添加配送区域: 中国','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('203','1435315143','1','添加配送区域: 中国','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('204','1435315172','1','删除商品分类: 试管面膜','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('205','1435315174','1','删除商品分类: 积分兑换礼品','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('206','1435315178','1','删除商品分类: 面膜','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('207','1435315550','1','删除积分可兑换的商品: 6','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('208','1435315550','1','删除积分可兑换的商品: 5','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('209','1435315550','1','删除积分可兑换的商品: 4','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('210','1435315550','1','删除积分可兑换的商品: 3','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('211','1435315761','1','编辑文章: 单品推广','123.68.52.149');");
E_D("replace into `ecs_admin_log` values('212','1435488944','1','删除权限管理: test','123.68.52.70');");
E_D("replace into `ecs_admin_log` values('213','1435494304','1','编辑权限管理: admin','123.68.52.70');");

require("../../inc/footer.php");
?>