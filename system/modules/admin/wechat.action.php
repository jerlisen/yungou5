<?php 
defined('G_IN_SYSTEM')or exit('no');
// if (ini_get('display_errors')) {
//     ini_set('display_errors', '0');
// }
System::load_app_class('admin',G_ADMIN_DIR,'no');
System::load_app_fun('global',G_ADMIN_DIR);
class wechat extends admin {	

	public function __construct(){

		parent::__construct();

		$this->db=System::load_sys_class("model");

		$this->ment=array(

						array("webcfg","微信接口",ROUTE_M.'/'.ROUTE_C."/wechatcfg"),

						array("config","微信菜单",ROUTE_M.'/'.ROUTE_C."/menu"),

						array("upload","微信设置",ROUTE_M.'/'.ROUTE_C."/cfg"),

						array("watermark","关注回复设置",ROUTE_M.'/'.ROUTE_C."/reply"),

						array("email","关键词回复设置",ROUTE_M.'/'.ROUTE_C."/keywordlists"),

						array("mobile","互动积分设置",ROUTE_M.'/'.ROUTE_C."/hdcfg"),

						array("payset","红包设置",ROUTE_M.'/'.ROUTE_C."/huiyuan"),	

						array("domain","红包列表",ROUTE_M.'/'.ROUTE_C."/hblist"),

						array("send","<b>红包添加</b>",ROUTE_M.'/'.ROUTE_C."/hbadd")

		);

	

	}
	/****************微信基本设置****************/
	public function wechatcfg(){

		if(isset($_POST['dosubmit'])){
			$token=trim($_POST['token']);

			$appid=trim($_POST['appid']);

			$appsecret=trim($_POST['appsecret']);

			if(empty($token) || empty($appid) || empty($appsecret)){
				_message("信息填写不能为空");
			}

			$this->db->Query("UPDATE `@#_wechat_config` SET `token`='$token' WHERE (`id`= 1)");

			$this->db->Query("UPDATE `@#_wechat_config` SET `appid`='$appid' WHERE (`id`=1)");

			$this->db->Query("UPDATE `@#_wechat_config` SET `appsecret`='$appsecret' WHERE (`id`=1)");	

			if($this->db->affected_rows()){
				_message("设置失败");

			}else{
				_message("设置成功");

			}

		}

		$wechat= $this->db->GetOne("select * from `@#_wechat_config` where id = 1");	

		include $this->tpl(ROUTE_M,'wechat.wechatcfg');

	}	
	

	/****************微信菜单设置********************/

	public function menu(){

	if (isset($_POST['tijiao'])) {
	      // 因为菜单最多有3个，所以进行循环
	      for($i=0;$i<3;$i++){
	          // 指定下标
	        $button=  "button_".$i;
	        $sub_button="sub_button_".$i."_0";
	        $type="type_".$i;
	        $urlkey="urlkey_".$i;  
	            // 如果有子菜单
	              if(trim($_POST[$sub_button])!==""){
	                  for($j=0;$j<5;$j++){
	                      $sub_button="sub_button_{$i}_{$j}";
	                      $type="type_{$i}_{$j}";
	                      $urlkey="urlkey_{$i}_{$j}";  
	                        if(trim($_POST[$sub_button])!==""){
	                            $menuarr['button'][$i]['name']=$_POST[$button];
	                              if($_POST[$type]=="key"){
	                                               $menuarr['button'][$i]['sub_button'][$j]['type']="click";
	                                               $menuarr['button'][$i]['sub_button'][$j]['name']=$_POST[$sub_button];
	                                               $menuarr['button'][$i]['sub_button'][$j]['key']=$_POST[$urlkey];
	                                   }else if($_POST[$type]=="url"){
	                                        $menuarr['button'][$i]['sub_button'][$j]['type']="view";
	                                        $menuarr['button'][$i]['sub_button'][$j]['name']=$_POST[$sub_button];
	                                        $menuarr['button'][$i]['sub_button'][$j]['url']=$_POST[$urlkey];
	                                   }
	                        }

	                  }
	              }else{            
	                        if(trim($_POST[$button])!==""){
	                                        if($_POST[$type]=="key"){
	                                                   $menuarr['button'][$i]['type']="click";
	                                                   $menuarr['button'][$i]['name']=$_POST[$button];
	                                                   $menuarr['button'][$i]['key']=$_POST[$urlkey];
	                                         }else if($_POST[$type]=="url"){
	                                                    $menuarr['button'][$i]['type']="view";
	                                                    $menuarr['button'][$i]['name']=$_POST[$button];
	                                                    $menuarr['button'][$i]['url']=$_POST[$urlkey];
	                                         }
	                                }
	                        }

	      }
	      // 对数组进行转json格式
	       $post=my_json_encode($menuarr);

	       $wechat= $this->db->GetOne("select * from `@#_wechat_config` where id = 1");
	      // 获取token
	      $token= get_token($wechat['appid'],$wechat['appsecret']);
	    p($token);
	    p($post);die;
	      //提交内容
	      $url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token={$token}"; //查询地址 
	      $msg = postCurl($url,$post);

	      
	      	// 保存数据库
	      	$this->db->Query("UPDATE `@#_wechat_config` SET `menu`='$post' WHERE (`id`= 1)");
	      	$this->db->Query("UPDATE `@#_wechat_config` SET `access_token`='$token' WHERE (`id`= 1)");
	      	_message("菜单设置成功");
	      	if($msg){
	      }else{
	      	_message("菜单设置失败");
	      }
	}
	$wechat= $this->db->GetOne("select * from `@#_wechat_config` where id = 1");
	$we = json_decode($wechat['menu'],true);
	$we = $we['button'];
	  include $this->tpl(ROUTE_M,'wechat.menu');
}

	/**************微信路径设置*********************/

	public function cfg(){	

		if(isset($_POST['dosubmit']) && $_POST['dosubmit'] != 'del'){
			if(empty($_POST['murl']) || empty($_POST['baseurl']) || empty($_POST['imgpath']) || empty($_POST['plustj']) || empty($_POST['userpwd']) || empty($_POST['cxbd']) || empty($_POST['oauth']) || empty($_POST['bd']) || empty($_POST['goods']) || empty($_POST['article'])){
				_message("所有选项均不能为空，请从新填写！");
			}
			
			$murl = htmlspecialchars(trim($_POST['murl']));
			$baseurl = htmlspecialchars(trim($_POST['baseurl']));
			$imgpath = htmlspecialchars(trim($_POST['imgpath']));
			$plustj = htmlspecialchars(trim($_POST['plustj']));
			$userpwd = htmlspecialchars(trim($_POST['userpwd']));
			$cxbd = htmlspecialchars(trim($_POST['cxbd']));
			$oauth = htmlspecialchars(trim($_POST['oauth']));
			$bd = htmlspecialchars(trim($_POST['bd']));
			$goods = htmlspecialchars(trim($_POST['goods']));
			$article = htmlspecialchars(trim($_POST['article']));
			$this->db->Query("UPDATE `@#_wxch_cfg` SET `cfg_value`='$murl' WHERE (`cfg_name`= 'murl')");
			$this->db->Query("UPDATE `@#_wxch_cfg` SET `cfg_value`='$baseurl' WHERE (`cfg_name`= 'baseurl')");
			$this->db->Query("UPDATE `@#_wxch_cfg` SET `cfg_value`='$imgpath' WHERE (`cfg_name`= 'imgpath')");
			$this->db->Query("UPDATE `@#_wxch_cfg` SET `cfg_value`='$plustj' WHERE (`cfg_name`= 'plustj')");
			$this->db->Query("UPDATE `@#_wxch_cfg` SET `cfg_value`='$userpwd' WHERE (`cfg_name`= 'userpwd')");
			$this->db->Query("UPDATE `@#_wxch_cfg` SET `cfg_value`='$cxbd' WHERE (`cfg_name`= 'cxbd')");
			$this->db->Query("UPDATE `@#_wxch_cfg` SET `cfg_value`='$oauth' WHERE (`cfg_name`= 'oauth')");
			$this->db->Query("UPDATE `@#_wxch_cfg` SET `cfg_value`='$bd' WHERE (`cfg_name`= 'bd')");
			$this->db->Query("UPDATE `@#_wxch_cfg` SET `cfg_value`='$goods' WHERE (`cfg_name`= 'goods')");
			$this->db->Query("UPDATE `@#_wxch_cfg` SET `cfg_value`='$article' WHERE (`cfg_name`= 'article')");
			_message("设置更新成功");

		}
		$wechat= $this->db->GetList("select * from `@#_wxch_cfg`");
		include $this->tpl(ROUTE_M,'wechat.cfg');
	}

	public function share(){	

		if(isset($_POST['dosubmit']) && $_POST['dosubmit'] != 'del'){
			$money = htmlspecialchars(trim($_POST['money']));
			$share = htmlspecialchars(trim($_POST['share']));
			$this->db->Query("UPDATE `@#_wxch_cfg` SET `cfg_value`='$share' WHERE (`cfg_name`= 'share')");
			$this->db->Query("UPDATE `@#_wxch_cfg` SET `cfg_value`='$money' WHERE (`cfg_name`= 'money')");
			_message("设置更新成功");

		}
		$wechat= $this->db->GetList("select * from `@#_wxch_cfg`");
		include $this->tpl(ROUTE_M,'wechat.share');
	}
	

	//关键字回复设置

	public function reply(){
		if(isset($_POST['dosubmit']) && $_POST['dosubmit'] != 'del'){
			$reply = htmlspecialchars(trim($_POST['reply']));
			$this->db->Query("UPDATE `@#_wxch_cfg` SET `cfg_value`='$reply' WHERE (`cfg_name`= 'reply')");
			_message("设置成功");
		}		
		
		$wechat= $this->db->GetOne("select * from `@#_wxch_cfg` WHERE `cfg_name` ='reply'");
		$wechat = htmlspecialchars_decode($wechat['cfg_value']);
		include $this->tpl(ROUTE_M,'wechat.reply');
	}

	//关键词回复列表

	public function keywordlists(){
		$num=20;	

		$total=$this->db->GetCount("SELECT COUNT(*) FROM `@#_weixin_keywords`");

		$page=System::load_sys_class('page');

		if(isset($_GET['p'])){$pagenum=$_GET['p'];}else{$pagenum=1;}	

		$page->config($total,$num,$pagenum,"0");


		$wechat= $this->db->GetPage("SELECT `id`, `name`, `keyword`, `type`, `count`, `status` FROM `@#_weixin_keywords` ORDER BY id DESC",array("num"=>$num,"page"=>$pagenum,"type"=>1,"cache"=>0));
		include $this->tpl(ROUTE_M,'wechat.keywordlists');

	}
	/**关键词删除**/

	public function keyword_del(){
		$id=intval($this->segment(4));		
		$this->db->Query("DELETE FROM `@#_weixin_keywords` WHERE (`id`='$id') LIMIT 1");
			if($this->db->affected_rows()){			
				_message("删除失败");
			}else{
				_message("删除成功");
			}
	}
	/*****添加关键词*文本****/

	public function keyword_add1(){
		$id=intval($this->segment(4));
		if($id>0){
			$wechat = $this->db->GetOne("SELECT * FROM `@#_weixin_keywords` WHERE (`id`='$id') LIMIT 1");
		}
		if(isset($_POST['dosubmit']) && $_POST['dosubmit'] != 'del'){
			$id = isset($_POST['id']) ? $_POST['id'] : 0;
			$name = trim($_POST['name']);
			$keyword = trim($_POST['keyword']);
			$contents = htmlspecialchars(trim($_POST['contents']));
			if(empty($name) || empty($keyword) || empty($contents)){
				_message("关键字，关键词，内容内容不能为空");
			}
			if($id>0){
				$this->db->Query("UPDATE `@#_weixin_keywords` SET `name`='$name', `keyword`='$keyword', `contents`='$contents' WHERE (`id`= '$id')");
				if($this->db->affected_rows()){			
					_message("修改成功",G_ADMIN_PATH.'/wechat/keywordlists/');
				}else{
					_message("修改失败",G_ADMIN_PATH.'/wechat/keywordlists/');
				}
			}else{
				$this->db->Query("INSERT INTO `@#_weixin_keywords` SET `name`='$name', `keyword`='$keyword', `contents`='$contents'");
				if($this->db->affected_rows()){			
					_message("添加成功",G_ADMIN_PATH.'/wechat/keywordlists/');
				}else{
					_message("添加失败",G_ADMIN_PATH.'/wechat/keywordlists/');
				}
			}
		}
		include $this->tpl(ROUTE_M,'wechat.text');
	}
	/*****添加关键词*图文****/

	public function keyword_add2(){
		$id=intval($this->segment(4));
		if($id>0){
			$wechat = $this->db->GetOne("SELECT * FROM `@#_weixin_keywords` WHERE (`id`='$id') LIMIT 1");
		}
		if(isset($_POST['dosubmit']) && $_POST['dosubmit'] != 'del'){
			$id = isset($_POST['id']) ? $_POST['id'] : 0;
			$type = $_POST['type'];
			$name = trim($_POST['name']);
			$keyword = trim($_POST['keyword']);
			$desc = htmlspecialchars(trim($_POST['desc']));
			$pic_url = htmlspecialchars(addslashes($_POST['pic_url']));
			$pic = addslashes($_POST['pic']);
			$pic_tit =trim($_POST['pic_tit']);
			if(empty($name) || empty($keyword) || empty($desc) || empty($pic_url) || empty($pic_tit)){
				_message("关键字，关键词，内容内容, 图片地址，链接地址，图片标题不能为空");
			}
			if($id>0){
				$this->db->Query("UPDATE `@#_weixin_keywords` SET `name`='$name', `keyword`='$keyword', `type` = '$type', `desc`='$desc' ,`pic_url` ='$pic_url', `pic`= '$pic',  `pic_tit`= '$pic_tit' WHERE (`id`= '$id')");
				if($this->db->affected_rows()){			
					_message("修改成功",G_ADMIN_PATH.'/wechat/keywordlists/');
				}else{
					_message("修改失败",G_ADMIN_PATH.'/wechat/keywordlists/');
				}
			}else{
				$this->db->Query("INSERT INTO `@#_weixin_keywords` SET `name`='$name', `keyword`='$keyword', `type` = '$type', `desc`='$desc', `pic_url` ='$pic_url', `pic`= '$pic', `pic_tit`= '$pic_tit' ");
				if($this->db->affected_rows()){			
					_message("添加成功",G_ADMIN_PATH.'/wechat/keywordlists/');
				}else{
					_message("添加失败",G_ADMIN_PATH.'/wechat/keywordlists/');
				}
			}
		}

		include $this->tpl(ROUTE_M,'wechat.pic');
	}

	//互动积分设置
	public function hdcfg(){
		if(isset($_POST['dosubmit']) && $_POST['dosubmit'] != 'del'){
			$data = $_POST;
			unset($_POST['dosubmit']);
			if(!empty($data)){
				foreach ($data as $k => $v) {
					$this->db->Query("UPDATE `@#_weixin_point` SET `autoload`='$v[0]', `point_value`='$v[1]' WHERE (`point_name`= '$k')");
				}
			}
			if($this->db->affected_rows()){
				_message("设置失败");
			}else{
				_message("设置成功");
			}
			
		}		
		
		$wechat= $this->db->GetList("SELECT * from `@#_weixin_point` ");
		include $this->tpl(ROUTE_M,'wechat.hdcfg');
	}
	/***微信会员列表****/
	public function huiyuan(){
		if(isset($_POST['dosubmit']) && $_POST['dosubmit'] != 'del'){
			$v = $_POST['type_id'];
			$this->db->Query("UPDATE `@#_weixin_bonus` SET `type_id`='$v' WHERE (`id`= 1)");
			if($this->db->affected_rows()){
				_message("设置成功");
			}else{
				_message("设置失败");
			}
		}
		$wechat= $this->db->GetList("SELECT * from `@#_weixin_bonus_type` ");
		$type = $this->db->GetOne("SELECT * from `@#_weixin_bonus` ");
		include $this->tpl(ROUTE_M,'wechat.huiyuan');
	}

	public function hblist(){
		if(isset($_POST['dosubmit']) && $_POST['dosubmit'] != 'del'){
			$v = $_POST['type_id'];
			$this->db->Query("UPDATE `@#_weixin_bonus` SET `type_id`='$v' WHERE (`id`= 1)");
			if($this->db->affected_rows()){
				_message("设置成功");
			}else{
				_message("设置失败");
			}
		}

		$num=20;	

		$total=$this->db->GetCount("SELECT COUNT(*) FROM `@#_weixin_keywords`");

		$page=System::load_sys_class('page');

		if(isset($_GET['p'])){$pagenum=$_GET['p'];}else{$pagenum=1;}	

		$page->config($total,$num,$pagenum,"0");


		$wechat= $this->db->GetPage("SELECT * from `@#_weixin_bonus_type` ORDER BY type_id DESC",array("num"=>$num,"page"=>$pagenum,"type"=>1,"cache"=>0));
		include $this->tpl(ROUTE_M,'wechat.hblist');
	}

	/******添加微信红包类型****/

	public function hbadd(){
		$id=intval($this->segment(4));
		if(isset($_POST['dosubmit']) && $_POST['dosubmit'] != 'del'){
			$type_name   = !empty($_POST['type_name']) ? trim($_POST['type_name']) : '';
			$type_money     = !empty($_POST['type_money'])    ? intval($_POST['type_money'])    : 0;
			$send_type  = !empty($_POST['send_type']) ? intval($_POST['send_type']) : 0;
			$total = $_POST['total'] > 0 ? intval($_POST['total']) : 0;
			if($id<=0){
				$wechat = $this->db->GetOne("SELECT * FROM `@#_weixin_bonus_type` WHERE `type_name`='$type_name'");
				if (!empty($wechat)){
			   	_message("红包已经存在了，请修改后重新添加");
				}
			}
			/* 获得日期信息 */
			$send_startdate = strtotime($_POST['send_start_date']);
			$send_enddate   = strtotime($_POST['send_end_date']);
			if($id>0){
				$res = $this->db->Query("UPDATE `@#_weixin_bonus_type` SET `type_name`='$type_name', `type_money`='$type_money',`send_type`='$send_type',`send_start_date`= '$send_startdate',`send_end_date`='$send_enddate',`total`='$total' WHERE (`type_id`= $id)");
				if($res>0){
					_message("红包修改成功",G_ADMIN_PATH.'/wechat/hblist/');
				}else{
					_message("红包修改失败",G_ADMIN_PATH.'/wechat/hblist/');
				}

			}else{
				/* 插入数据库。 */
				$sql = "INSERT INTO `@#_weixin_bonus_type` (`type_name`, `type_money`,`send_type`,`send_start_date`,`send_end_date`,`total`)
				VALUES ('$type_name',
				        '$type_money',
				        '$send_type',
				        '$send_startdate',
				        '$send_enddate',
				        '$total')";
				$res = $this->db->Query($sql);
				if($res>0){
					_message("红包添加成功",G_ADMIN_PATH.'/wechat/hblist/');
				}else{
					_message("红包添加失败",G_ADMIN_PATH.'/wechat/hblist/');
				}
			}
		}
		if($id>0){
			$wc = $this->db->GetOne("SELECT * FROM `@#_weixin_bonus_type` WHERE `type_id`='$id'");
		}

		include $this->tpl(ROUTE_M,'wechat.hbadd');

	}
	//删除红包
	public function hbdel(){
		$id=intval($this->segment(4));
		$this->db->Query("DELETE FROM `@#_weixin_bonus_type` WHERE (`type_id`='$id') LIMIT 1");
			if($this->db->affected_rows()){			
				_message("删除成功");
			}else{
				_message("删除失败");
			}
	}
	//红包报表
	public function baobiao(){
		$id=intval($this->segment(4));

		$num=20;	

		$total=$this->db->GetCount("SELECT COUNT(*) FROM `@#_weixin_user`  WHERE (`typeid`='$id')");

		$page=System::load_sys_class('page');

		if(isset($_GET['p'])){$pagenum=$_GET['p'];}else{$pagenum=1;}	

		$page->config($total,$num,$pagenum,"0");


		$list = $this->db->GetPage("SELECT * from `@#_weixin_user` WHERE (`typeid`='$id') ORDER BY `time` DESC",array("num"=>$num,"page"=>$pagenum,"type"=>1,"cache"=>0));
		foreach ($list as &$v) {
			$v['uinfo'] = $this->get_in($v['uname']);
		}
		include $this->tpl(ROUTE_M,'wechat.baobiao');
	}


	private function get_in($nic){
		return $wc = $this->db->GetOne("SELECT * FROM `@#_member` WHERE `username`='$nic'");
	}


}