<?php 
defined('G_IN_SYSTEM')or exit('No permission resources.');
ini_set("display_errors","OFF");
class alipay_url extends SystemAction {
	public function __construct(){			
		$this->db=System::load_sys_class('model');		
	} 	
	
	public function qiantai(){	
		sleep(2);
		$out_trade_no = $_GET['out_trade_no'];	//商户订单号
		$dingdaninfo = $this->db->GetOne("select * from `@#_member_addmoney_record` where `code` = '$out_trade_no'");
		if(!$dingdaninfo || $dingdaninfo['status'] == '未付款'){
			_message("支付失败");			
		}else{
			if(empty($dingdaninfo['scookies'])){
				_message("充值成功!",WEB_PATH."/member/home/userbalance");
			}else{
				if($dingdaninfo['scookies'] == '1'){
					_message("支付成功!",WEB_PATH."/member/cart/paysuccess");
				}else{
					_message("商品还未购买,请重新购买商品!",WEB_PATH."/member/cart/cartlist");
				}
					
			}
		}
	}
	
	public function houtai(){

        //收支宝回调数据配置www.168szb.com
        $sign        =trim($_POST['key']);//回调签密钥
        $total_fee   =trim($_POST['money']);//收款金额
		$out_trade_no =trim($_POST['name']);// $_POST['out_trade_no'];	//商户订单号
		$payy =trim($_POST['pay']);// 支付方式
		if($payy==1)$payy="支付宝";
		if($payy==2)$payy="财付通";

		$trade_no =trim($_POST['ddh']); //$_POST['trade_no'];			//支付宝交易号
		$trade_status='WAIT_SELLER_SEND_GOODS';
		
		if($alipay_config['key']==null){
		  $alipay_config['key']='egx6emt89z2u0kon7azgyuqadgytxi40';  //收支宝密钥设置--这里设置什么，软件也设置相同即可
		}
		if($sign!=$alipay_config['key']){exit();}

		require('./168szb/function.php');
		if(!CheckMoney($total_fee) && !CheckId($out_trade_no) && !CheckId($trade_no) ){exit();}
		
		//开始处理及时到账和担保交易订单
		if($trade_status == 'TRADE_FINISHED' || $trade_status == 'TRADE_SUCCESS' || $trade_status == 'WAIT_SELLER_SEND_GOODS') {
			
			$this->db->Autocommit_start();
			$dingdaninfo = $this->db->GetOne("select * from `@#_member_addmoney_record` where `code` = '$out_trade_no' and `status` = '未付款' for update");
			if(!$dingdaninfo){	echo "fail";exit;}	//没有该订单,失败
			$c_money = $total_fee;			
			$uid = $dingdaninfo['uid'];
			$time = time();			
			$up_q1 = $this->db->Query("UPDATE `@#_member_addmoney_record` SET `pay_type` = '$payy', `status` = '已付款' where `id` = '$dingdaninfo[id]' and `code` = '$dingdaninfo[code]'");
			$up_q2 = $this->db->Query("UPDATE `@#_member` SET `money` = `money` + $c_money where (`uid` = '$uid')");				
			$up_q3 = $this->db->Query("INSERT INTO `@#_member_account` (`uid`, `type`, `pay`, `content`, `money`, `time`) VALUES ('$uid', '1', '账户', '$payy', '$c_money', '$time')");
				
			if($up_q1 && $up_q2 && $up_q3){
				$this->db->Autocommit_commit();			
			}else{
				$this->db->Autocommit_rollback();
				echo "fail";exit;
			}			
			if(empty($dingdaninfo['scookies'])){					
					echo "okokok";exit;	//充值完成			
			}			
			$scookies = unserialize($dingdaninfo['scookies']);			
			$pay = System::load_app_class('pay','pay');			
			$pay->scookie = $scookies;	

			$ok = $pay->init($uid,$pay_type['pay_id'],'go_record');	//云购商品	
			if($ok != 'ok'){
				_setcookie('Cartlist',NULL);
				echo "fail";exit;	//商品购买失败			
			}			
			$check = $pay->go_pay(1);
			if($check){
				$this->db->Query("UPDATE `@#_member_addmoney_record` SET `scookies` = '1' where `code` = '$out_trade_no' and `status` = '已付款'");
				_setcookie('Cartlist',NULL);
				echo "okokokok";exit;			
			}else{
				echo "fail";exit;
			}
		
		}//开始处理订单结束
				

	}//function end
	
}//

?>