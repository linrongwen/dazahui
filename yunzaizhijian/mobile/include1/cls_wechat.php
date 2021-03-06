<?php
class Wechat{

  //取得微网站用户的ID
  public function get_userid()
  {
	   if(empty($_SESSION['user_id'])){
		   //先读取session中保存的wechat_id，最安全
		   if(!empty($_SESSION['wechat_id']))
		      $wechatid = trim($_SESSION['wechat_id']);
		   //其次读取页面传递的wechat_id	  	
		   elseif(!empty($_REQUEST['wechat_id'])){
			  $wechatid = trim($_REQUEST['wechat_id']);
		   //最后利用网页授权获得openid	   
		       
		   }else{
			  $code = $this->get_oauth2_code();
			  $wechatid = $this->get_oauth2_openid($code);
		   }	
		   if(!empty($wechatid)){
			   $userinfo = $GLOBALS['db']->getRow("SELECT * FROM ".$GLOBALS['ecs']->table('users')." WHERE `wxid` = '".$wechatid."'");;
			   if(!$userinfo){
				   $user_id = $this->create_wechat_user($wechatid);   
			   }else{
				   $user_id = $userinfo['user_id'];          
			   }
			   //存储为session
			   $_SESSION['user_id'] = $user_id;
			   $_SESSION['wechat_id'] = $wechatid;
			   return $user_id;
		   }else{
			   show_message('openid is null!'); return;   
		   }
	   }
	   else
	      $user_id = $_SESSION['user_id'];
	  // $user_id = $this->validate_user();	
	   return $user_id;  
  }
  
  
  //取得网页用户授权接口中code参数
  function get_oauth2_code()
  {
	  if(empty($_GET['code'])){
        $row = $this->get_wechat_config();
		if(empty($row['appid'])){
			   show_message('appid error!'); return;   
		} 
		$redirect_uri = urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);
		$para = array(
	         "appid"         => $row['appid'],
		     "redirect_uri"  => $redirect_uri,
		     "response_type" => 'code',
		     "scope"         => 'snsapi_base',
		     "state"         => '123#wechat_redirect'
	       );
		$url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$row['appid']."&redirect_uri=".$para['redirect_uri']."&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
		url_redirect($url);
	  }
	  else
	     return $_GET['code'];
    }
	
	//取得网页用户授权接口中openid
   function get_oauth2_openid($code){
		$row = $this->get_wechat_config();
		$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$row[appid]."&secret=".$row[appsecret]."&code=".$code."&grant_type=authorization_code";
	    $rets =  $this->curl_get_contents($url);
	    $ret_arr = json_decode($rets,true);
		if(!empty($ret_arr['openid'])){
		   return 	$ret_arr['openid'];
	    }
		else{
		   show_message('get openid failure!');	
		}
  }
		
  function get_user_info($wechatid){
	 if(!empty($wechatid)) {
	     $this->access_token($GLOBALS['db']);
	     $ret = $GLOBALS['db']->getRow("SELECT * FROM `wxch_config` WHERE `id` = 1");
	     $access_token = $ret['access_token'];
	     $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$wechatid";
	     $res_json = $this->curl_get_contents($url);
	     $w_user = json_decode($res_json,TRUE);
	     if($w_user['errcode'] == '40001') 
	     {
		     $access_token = new_access_token($GLOBALS['db']);
		     $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$wechatid";
		     $res_json = $this->curl_get_contents($url);
		     $w_user = json_decode($res_json,TRUE);
	     }
	   return $w_user;
	  }
  }
  
  function get_wechat_config(){
	    $row = $GLOBALS['db']->getRow("SELECT * FROM `wxch_config` WHERE `id` = 1");
		if(!$row || empty($row['appid']) || empty($row['appsecret'])){
		   show_message('微信没有设置相关appid和appsecret参数');	
		}
		return $row;
  }
  
  function get_wechat_code(){
		if(empty($_GET['code'])){  
		   $redirect_uri = urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);
		   $para = array(
	         "appid"         => $row['appid'],
		     "redirect_uri"  => $redirect_uri,
		     "response_type" => 'code',
		     "scope"         => 'snsapi_base',
		     "state"         => '123#wechat_redirect'
	       );
		   $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$row['appid']."&redirect_uri=".$para['redirect_uri']."&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
		   url_redirect($url);
	   }
}
//取得openid
  function get_openid($code){
	  $row = $GLOBALS['db']->getRow("SELECT * FROM `wxch_config` WHERE `id` = 1");
	  if(empty($row['appid']) || empty($row['appsecret'])){
	      return 0;   
	  }
	  $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$row['appid']."&secret=".$row['appsecret']."&code=".$code."&grant_type=authorization_code";
	  $ret =  $this->curl_get_contents($url);
	  $ret_arr = json_decode($ret,true);	
	  return $ret_arr;
  }

  //生成分销商专属推广二维码
  function create_wechat_qr($uid){
	    if(empty($uid))     return false;
		$user_info =  $GLOBALS['db']->getRow("SELECT user_name,nick_name FROM ".$GLOBALS['ecs']->table('users')." WHERE user_id=".$uid);
		if(!$user_info)    return false;
	    $action_name = "QR_LIMIT_SCENE";
		$scene = $uid;
		if(empty($user_info['nick_name']))
		   $user_info['nick_name'] = $user_info['user_name'];
		$function = "【".$user_info['nick_name']."】的推广二维码";
		$type = 'qr';
		$expire_seconds = 0;
		$ret =  $GLOBALS['db']->getRow("SELECT * FROM `wxch_qr` WHERE `action_name` = 'QR_LIMIT_SCENE' ORDER BY `scene_id` DESC");
		$scene_id = $ret['scene_id']+1;
		$json_arr = array('action_name'=>$action_name,'action_info'=>array('scene'=>array('scene_id'=>$scene)));
		$data = json_encode($json_arr);
		$this->access_token($GLOBALS['db']);
		$ret = $GLOBALS['db']->getRow("SELECT `access_token` FROM `wxch_config`");
		$access_token = $ret['access_token'];
		if(strlen($access_token) >= 64) 
		{
			$url = 'https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token='.$access_token;
			$res_json = $this->curl_grab_page($url, $data);
			$json = json_decode($res_json);
		}
		$ticket = $json->ticket;
		if($ticket)
		{
			$ticket_url = urlencode($ticket);
			$ticket_url = 'https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket='.$ticket_url;
			$qrimg = $this->curl_get_contents($ticket_url);
			$time = time();
			$path = '../images/upload/'.$time.'.jpg';
			@file_put_contents($path, $qrimg);
			$qr_path = '/images/upload/'.$time.'.jpg';
			if(@filesize(ROOT_PATH.$qr_path)<10240) 
			{
				$qr_path = '';
			}
			$insert_sql = "INSERT INTO `wxch_qr` (`type`,`expire_seconds`,`action_name`,`ticket`, `scene_id`, `scene` ,`qr_path`,`function`,qr_status) VALUES
   ('$type','$expire_seconds','$action_name', '$ticket',$scene_id, '$scene' ,'$qr_path','$function',1)";
			$GLOBALS['db']->query($insert_sql);
		}
  }

  //判断用户是否关注
  public function is_subscribe($wechatid){
      $res = 1;
	  if(empty($wechatid))
	    $res = 0;
	  else{ 
 	    $is_subscribe =  $GLOBALS['db']->getOne("select is_subscribe from ".$GLOBALS['ecs']->table('users')." where wxid='".$wechatid."'");
	    if(!$is_subscribe){
		   $res = 0;  
	    }
	    if($is_subscribe == 0)
	       $res = 0; 
	    }
	return $res;
   }
  //判断用户是否关注,byid
  public function is_subscribe_byid($userid){
      $res = 1;
	  if(empty($userid))
	    $res = 0;
	  else{ 
 	    $is_subscribe =  $GLOBALS['db']->getOne("select is_subscribe from ".$GLOBALS['ecs']->table('users')." where user_id=".$userid);
	    if(!$is_subscribe){
		   $res = 0;  
	    }
	    if($is_subscribe == 0)
	       $res = 0; 
	    }
	return $res;
   }
  //验证身份
   public function validate_user(){
	    if(empty($_SESSION['user_id']) || empty($_SESSION['wechat_id'])){
			show_message('用户验证失败');return;  
		}else
		    return $_SESSION['user_id'];
   } 

  function create_wechat_user($wechatid){
     $user_id = $GLOBALS['db']->getOne("select user_id from ".$GLOBALS['ecs']->table('users')." where wxid='".$wechatid."'");
     if(empty($user_id)){	
       $wuser_info = $this->get_user_info($wechatid);
	   do{
		  $user_name = rand(1000000, 9999999);
	   	  $user_repeat = $GLOBALS['db']->getRow("select user_id from ".$GLOBALS['ecs']->table('users')." where user_name='".$user_name."' ");
	   }
	   while($user_repeat);
	   //创建用户
       if($wuser_info['subscribe'] == 1){
	        $sql = "INSERT INTO ".$GLOBALS['ecs']->table('users')."(wxid, user_name, email, is_subscribe, nick_name, head_url, subscribe_time, sex, reg_time, last_login) VALUES ('".$wechatid."', '".$user_name."', '".$user_name."', 1, '".$wuser_info[nickname]."', '".$wuser_info[headimgurl]."', '".$wuser_info[subscribe_time]."', '".$wuser_info[sex]."',".time().", ".time().")";	
       }else{
			$sql = "INSERT INTO ".$GLOBALS['ecs']->table('users')."(wxid, user_name, email, is_subscribe, reg_time, last_login) VALUES ('".$wechatid."', '".$user_name."', '".$user_name."',0, ".time().", ".time().")";	
       }	
	   $GLOBALS['db']->query($sql);
	   $uid = $GLOBALS['db']->insert_id();
	   return $uid;
     }
     else
       return $user_id;
  }
  
  //更新微信用户数据
  function update_userinfo($wechatid){
	  $user = $GLOBALS['db']->getRow("select user_id,nick_name,is_subscribe from ".$GLOBALS['ecs']->table('users')." where wxid='".$wechatid."'");
      if($user && (empty($user['nick_name']) || !$user['is_subscribe'])){	
	     $wuser_info = $this->get_user_info($wechatid);
	     if($wuser_info['subscribe'] == 1){
		    $sql = "UPDATE ".$GLOBALS['ecs']->table('users')." SET  is_subscribe=1,nick_name='".$wuser_info[nickname]."',head_url='".$wuser_info[headimgurl]."',subscribe_time=".$wuser_info[subscribe_time].",sex=".$wuser_info[sex]." where wxid='".$wechatid."'";   
		    $GLOBALS['db']->query($sql);
	     }
	  }
  }

  function access_token() 
  {
	  $ret = $GLOBALS['db']->getRow("SELECT * FROM `wxch_config` WHERE `id` = 1");
	  $appid = $ret['appid'];
	  $appsecret = $ret['appsecret'];
	  $access_token = $ret['access_token'];
	  $dateline = $ret['dateline'];
	  $time = time();
	  if(($time - $dateline) >= 7200-20) 
	  {
		  $access_token = $this->new_access_token();
	  }
	  elseif(empty($access_token)) 
	  {
		  $access_token = $this->new_access_token();
	  }
	  return $access_token;
  }
  
  function new_access_token() 
  {
	  $ret = $GLOBALS['db']->getRow("SELECT * FROM `wxch_config` WHERE `id` = 1");
	  $appid = $ret['appid'];
	  $appsecret = $ret['appsecret'];
	  $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
	  $ret_json = $this->curl_get_contents($url);
	  $ret = json_decode($ret_json);
	  if($ret->access_token)
	  {
		$GLOBALS['db']->query("UPDATE `wxch_config` SET `access_token` = '$ret->access_token',`dateline` = '$time' WHERE `id` =1;");
	  }
	  return $ret->access_token;
  }
  
  function curl_get_contents($url){
	   $ch = curl_init();
	   curl_setopt($ch, CURLOPT_URL, $url);
	   curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:26.0) Gecko/20100101 Firefox/26.0");
	   curl_setopt($ch, CURLOPT_REFERER,$url);
	   curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
	   curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	   curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	   $r = curl_exec($ch);
	   curl_close($ch);
	   return $r;  
  }
  function curl_get_contents1($url){
		$ch = curl_init();
		$header = "Accept-Charset: utf-8";
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$temp = curl_exec($ch);
		return $temp;
  }

  function curl_grab_page($url,$data,$proxy='',$proxystatus='',$ref_url='') 
  {
	  $ch = curl_init();
	  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
	  curl_setopt($ch, CURLOPT_TIMEOUT, 3);
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  if ($proxystatus == 'true') 
	  {
		curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, TRUE);
		curl_setopt($ch, CURLOPT_PROXY, $proxy);
	  }
	  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	  curl_setopt($ch, CURLOPT_URL, $url);
	  if(!empty($ref_url))
	  {
		curl_setopt($ch, CURLOPT_HEADER, TRUE);
		curl_setopt($ch, CURLOPT_REFERER, $ref_url);
	  }
	  curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	  curl_setopt($ch, CURLOPT_MAXREDIRS, 200);
	  @curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	  curl_setopt($ch, CURLOPT_POST, TRUE);
	  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	  ob_start();
	  return curl_exec ($ch);
	  ob_end_clean();
	  curl_close ($ch);
	  unset($ch);
  }

}
?>