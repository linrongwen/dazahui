<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('f14b826f0146ef7d7a3542e6edac1760','1428655476','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('ec193b7756732e08e9ec35986e0287e9','1428655476','0','0','101.226.103.69','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('3c02f173f81f2949cecbf3537a2dd0b1','1428655364','0','0','140.207.54.73','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('1666e282eed4c4b1b5d064e883f89a66','1428655340','0','0','140.207.54.75','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('c0dd1ae4aa46f099b949c7f3c13e4ab2','1428655475','0','0','140.207.54.75','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('d0cf045e01395f332a4fbf67a16ad16b','1428655890','0','1','123.174.133.249','0','0','0.00','0','a:5:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1428627090;s:12:\"suppliers_id\";s:1:\"0\";s:7:\"act_uri\";s:7:\"tuijian\";}');");
E_D("replace into `ecs_sessions` values('9b1c211209cc089af5cda958058cfdcf','1428655130','0','0','140.207.54.75','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('027881fbe0d76ed8eb73bea457c532a9','1428655037','0','0','180.153.206.38','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:13:\"singlemessage\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('2f38e9ab37a3d5e1275ce2efb5453ae7','1428654883','0','0','112.64.235.90','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('b4560dcda0451acc8204769e15d0d6b1','1428654389','0','0','180.153.206.38','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('a37029558f9733a11b57d7189b05d9f7','1428655931','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('33620f9f7097d00ac6e0600d213f2707','1428655930','0','0','140.207.54.75','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('ec05f28f72ba91c8a33b0f8687827f72','1428655340','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('e66f194765f00b3a0729c09c4fd4152b','1428655450','0','0','140.207.54.75','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('ac20e055332de4af5a55a33d0a6e67fe','1428655964','0','0','140.207.54.75','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('2a25c0c9d73cee007b4b9334cde2a7a2','1428655304','0','0','112.64.235.86','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('2fd1d6824729b61d9d4d3489c82b69e0','1428655941','1762','0','10.67.102.8','wx1762','1','1.00','0','a:7:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"flow_type\";i:0;s:9:\"last_time\";s:10:\"1428626728\";s:7:\"last_ip\";s:11:\"10.67.102.8\";s:10:\"flow_order\";a:1:{s:14:\"extension_code\";s:0:\"\";}}');");
E_D("replace into `ecs_sessions` values('4cca6fdd1d96cfe07de151552af2f1c7','1428655334','0','0','140.207.54.74','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('c6588870c14bb0e9d170f4e2bcbe0f71','1428655334','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('ed2722f5215625f4d2683951cdeaab0f','1428655054','1760','0','123.174.133.249','haihui','1','1.00','0','a:5:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"last_time\";s:10:\"1428623536\";s:7:\"last_ip\";s:15:\"123.174.133.249\";}');");
E_D("replace into `ecs_sessions` values('1f5ee16290103b0d4ac963968ac61f5d','1428655451','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('26b24732031585466683cc72e99b2ad4','1428655512','0','0','140.207.54.75','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('d5121ebf67b1706528bf352044ce0f68','1428654225','0','0','117.136.4.253','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:13:\"singlemessage\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('e23e5a922da7694e4b8dda0551f82bc1','1428654250','0','0','101.226.89.120','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('f47c1a41a7981c12f7968d7008db742e','1428654382','0','0','180.153.163.187','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('6f5244026101f9779104d3671b090781','1428654403','0','0','112.64.235.86','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('614ca120edf04d0a79154d9fa2dada40','1428655132','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('c5bd280cdb5e25c26c566bb44959f696','1428655136','0','0','140.207.54.75','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('66b273a41d734d5961a272439adc7247','1428655137','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('3c6c38d202aa1603770c8e352587364e','1428655146','0','0','140.207.54.74','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('5a80e3e7328ec778143775413d8c22ec','1428655146','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('a3839052cb6e9f635f792cedae70fce7','1428655148','0','0','101.226.68.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('4d9133a65e90cc2e5c9634b6b810cc0c','1428655222','1762','0','10.67.102.8','wx1762','1','1.00','0','a:5:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"last_time\";i:1428626422;s:7:\"last_ip\";s:0:\"\";}');");
E_D("replace into `ecs_sessions` values('3bc327b15e8b949396ff07a44fcddc1f','1428655163','0','0','140.207.54.73','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('fb42f0e7a4a1138f94ca9dbfea5fa502','1428655163','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('d6b934de8bc1813202c24df04a206fe8','1428655180','0','0','140.207.54.75','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('07ea251d471fe2f4990496ee1b3b2f1c','1428655180','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('75a18003db4311cbc93bf04e667e4e38','1428655209','0','0','140.207.54.75','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('c68f6a5dca37b7554e7af55e7f3cbc6e','1428655209','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('5b337063b6cdaabf0fe6df0e23c89541','1428655215','0','0','140.207.54.74','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('d7f38dbda3d61807c1456c06be265337','1428655215','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('c56aaf51cee44646da1c543e80598bb9','1428655216','0','0','222.73.76.253','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('7a59c0a3cf5c21acbec3d4a6a7cfad17','1428655276','0','0','10.67.102.8','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('eae4820a2c0f8ae5ecfe5c6cd094ce2a','1428655365','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('f68930e60a75067e7752b66a43690969','1428655512','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('78922b43cb679a98354ba642eda8fc28','1428655590','0','0','140.207.54.75','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('51c43d78a168a27633d62b76445b59a8','1428655590','0','0','140.207.54.75','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('2afe2b41add8da60cfc67ef331ae4bc2','1428655607','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('221fa65039f5616714be238258225a20','1428655607','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('265f5cbaea757a914ac3df78b201489d','1428655654','0','0','140.207.54.75','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('baff19950b0a6e7afff48f50350bfa01','1428655654','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('2eb0bf8cd215b915567e985cf963b576','1428655965','0','0','115.28.45.93','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");

require("../../inc/footer.php");
?>