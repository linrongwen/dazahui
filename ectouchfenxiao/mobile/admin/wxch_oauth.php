<?php
define('IN_ECTOUCH', true);
require(dirname(__FILE__) . '/includes/init.php');
require('wxch_lg.php');
$_REQUEST['act'] = trim($_REQUEST['act']);
if($_REQUEST['act'] == 'add') 
{
	$wxch_lang['ur_here'] = '添加OAuth';
	if($_POST)
	{
		$name = $_POST['name'];
		$contents = $_POST['contents'];
		$db->query("INSERT INTO `wxch_oauth` (`name`, `contents`, `count`, `status`) VALUES
('$name', '$contents', 0, 1);");
		$link[] = array('href' =>'wxch-ent.php?act=oauth', 'text' => 'OAuth管理');
		sys_msg('添加成功',0,$link);
	}
	else
	{
		$smarty->assign('wxch_lang',$wxch_lang);
		$smarty->display('wxch_oauth_add.html');
	}
}
elseif($_REQUEST['act'] == 'edit') 
{
	$wxch_lang['ur_here'] = '编辑OAuth';
	if($_POST)
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$contents = strip_tags($_POST['contents'],"");
		$update_sql = "UPDATE  `wxch_oauth` SET  `name` =  '$name',`contents` =  '$contents' WHERE  `oid` ='$id';";
		$db->query($update_sql);
		$link[] = array('href' =>'wxch-ent.php?act=oauth', 'text' => 'OAuth管理');
		sys_msg('修改成功',0,$link);
	}
	$id = $_GET['oid'];
	$data = $db->getRow("SELECT * FROM `wxch_oauth` WHERE `oid` = $id");
	$smarty->assign('data',$data);
	$smarty->assign('wxch_lang',$wxch_lang);
	$smarty->display('wxch_oauth_add.html');
}
elseif($_REQUEST['act'] == 'remove') 
{
	$id = $_GET['id'];
	$filter['page'] = $_GET['page'];
	$filter['page_size'] = $_GET['page_size'];
	if(empty($filter['page_size']))
	{
		$filter['page_size'] = 15;
	}
	$filter['page_count'] = $_GET['page_count'];
	$filter['record_count'] = $_GET['record_count'];
	if($filter['page'] <=1)
	{
		$start = 0;
	}
	else
	{
		$start = ($filter['page']-1) * $filter['page_size'];
	}
	$filter['start'] = $start;
	$ret = $db->getAll("SELECT * FROM `wxch_keywords` LIMIT $start , $filter[page_size]");
	$wxchdata = array();
	foreach($ret as $k=>$v)
	{
		$wxchdata[$k] = $v;
	}
	$smarty->assign('wxchdata',$wxchdata);
	$smarty->assign('filter',$filter);
	make_json_result($smarty->fetch('wxch_keywords.html'), '',array('filter' => $filter, 'page_count' => $filter['page_count']));
}
elseif($_REQUEST['act'] == 'edit_title') 
{
	$title = json_str_iconv(trim($_POST['val']));
	make_json_result(stripslashes($title));
}
elseif ($_REQUEST['act'] == 'get_article_list') 
{
	include_once(ROOT_PATH . 'include/cls_json.php');
	$json = new JSON;
	$filters =(array) $json->decode(json_str_iconv($_GET['JSON']));
	$where = " WHERE cat_id > 0 ";
	if (!empty($filters['title'])) 
	{
		$keyword = trim($filters['title']);
		$where .= " AND title LIKE '%" . mysql_like_quote($keyword) . "%' ";
	}
	$sql = 'SELECT article_id, title FROM ' .$ecs->table('article'). $where. 'ORDER BY article_id DESC LIMIT 50';
	$res = $db->query($sql);
	$arr = array();
	while ($row = $db->fetchRow($res)) 
	{
		$arr[] = array('value' => $row['article_id'], 'text' => $row['title'], 'data'=>'');
	}
	make_json_result($arr);
}
elseif ($_REQUEST['act'] == 'add_article') 
{
	include_once(ROOT_PATH . 'include/cls_json.php');
	$json = new JSON;
	$articles = $json->decode($_GET['add_ids']);
	$arguments = $json->decode($_GET['JSON']);
	if(!empty($arguments[0]))
	{
		$kws_id = $arguments[0];
	}
	else
	{
		$insert_sql = "INSERT INTO `wxch_keywords` (`name`) VALUES
('');";
		$db->query($insert_sql);
		$kws_id = $db->insert_id();
		session_start();
		$_SESSION['kws_id'] = $kws_id;
	}
	foreach ($articles AS $val) 
	{
		$sql = "INSERT INTO wxch_keywords_article (kws_id, article_id) VALUES ('$kws_id', '$val')";
		$db->query($sql);
	}
	$arr = get_keywords_articles($kws_id,$db);
	$opt = array();
	foreach ($arr AS $val) 
	{
		$opt[] = array('value' => $val['article_id'], 'text' => $val['title'], 'data' => '');
	}
	clear_cache_files();
	make_json_result($opt);
}
elseif ($_REQUEST['act'] == 'drop_article') 
{
	include_once(ROOT_PATH . 'include/cls_json.php');
	$json = new JSON;
	$articles = $json->decode($_GET['drop_ids']);
	$arguments = $json->decode($_GET['JSON']);
	foreach ($articles AS $val) 
	{
		$sql = "DELETE FROM `wxch_keywords_article` WHERE `wxch_keywords_article`.`article_id` = $val;";
		$db->query($sql);
	}
	$arr = get_keywords_articles($arguments[0],$db);
	$opt = array();
	if(is_array($arr))
	{
		foreach ($arr AS $val) 
		{
			$opt[] = array('value' => $val['article_id'], 'text' => $val['title'], 'data' => '');
		}
	}
	clear_cache_files();
	make_json_result($opt);
}
elseif($_REQUEST['act'] == 'query') 
{
	if(!empty($_POST['keyword']))
	{
		$keyword = $_POST['keyword'];
		$filter['page'] = $_POST['page'];
		$filter['page_size'] = $_POST['page_size'];
		if (isset($_REQUEST['page_size']) && intval($_REQUEST['page_size']) > 0) 
		{
			$filter['page_size'] = intval($_REQUEST['page_size']);
		}
		elseif (isset($_COOKIE['ECSCP']['page_size']) && intval($_COOKIE['ECSCP']['page_size']) > 0) 
		{
			$filter['page_size'] = intval($_COOKIE['ECSCP']['page_size']);
		}
		else 
		{
			$filter['page_size'] = 15;
		}
		$filter['page'] = (empty($_REQUEST['page']) || intval($_REQUEST['page']) <= 0) ? 1 : intval($_REQUEST['page']);
		$filter['page_count'] = (!empty($filter['record_count']) && $filter['record_count'] > 0) ? ceil($filter['record_count'] / $filter['page_size']) : 1;
		if ($filter['page'] > $filter['page_count']) 
		{
			$filter['page'] = $filter['page_count'];
		}
		$filter['start'] = ($filter['page'] - 1) * $filter['page_size'];
		$filter['type'] = 'oauth';
		$ret = $db->getAll("SELECT * FROM `wxch_keywords` WHERE `name` LIKE '%$keyword%' LIMIT $start , $filter[page_size]");
		$wxchdata = array();
		foreach($ret as $k=>$v)
		{
			$wxchdata[$k] = $v;
		}
		$smarty->assign('wxchdata',$wxchdata);
		$smarty->assign('wxch_lang',$wxch_lang);
		$smarty->assign('filter',$filter);
		make_json_result($smarty->fetch('wxch_oauth.html'), '',array('filter' => $filter, 'page_count' => $filter['page_count']));
	}
}
function htmltowei($contents) 
{
	$contents = strip_tags($contents,'<br>');
	$contents = str_replace('<br />',"\r\n",$contents);
	$contents = str_replace('&quot;','"',$contents);
	$contents = str_replace('&nbsp;','',$contents);
	return $contents;
}
function get_keywords_articles($kws_id,$db) 
{
	$sql = "SELECT `article_id` FROM `wxch_keywords_article` WHERE `kws_id` = '$kws_id'";
	$ret = $db->getAll($sql);
	foreach($ret as $v)
	{
		$articles .= $v['article_id'].',';
	}
	$length = strlen($articles)-1;
	$articles = substr($articles, 0, $length);
	if(!empty($articles))
	{
		$sql2 = "SELECT `article_id`,`title` FROM ".$GLOBALS['ecs']->table('article')." WHERE `article_id` IN ($articles)";
		$res = $db->getAll($sql2);
	}
	return $res;
}
?>