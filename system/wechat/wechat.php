<?php

if(!isset($system_path) || !isset($statics_path)){

    $system_path = 'system';

    $statics_path = 'statics';

}

require(dirname(dirname(__FILE__)) . '/config/global.php');

require(dirname(dirname(__FILE__)) . '/libs/mysql.class.php');

require(dirname(dirname(__FILE__)) . '/libs/model.class.php');



$wechatObj = new wechatCallbackapiTest();



if(isset($_GET['echostr'])){

        $wechatObj->valid();

    }else{

        $wechatObj->responseMsg();              

}





class wechatCallbackapiTest{

            public function __construct() { 

                    $this->db = system::load_sys_class("model");



             }   



	public function valid(){

                $echoStr = $_GET["echostr"];

                if($this->_checkSignature()){

        	           echo $echoStr;

        	           exit;

                            }

            }



            public function responseMsg(){

		$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];



                        // 把接收的消息写入日志

                        $this->log("R\n".$postStr,"./log/log.xml");



		if (!empty($postStr)){

                                    libxml_disable_entity_loader(true);

              	             $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);

                                    $fromUsername = $postObj->FromUserName;

                                    $toUsername = $postObj->ToUserName;

                                    $keyword = trim($postObj->Content);

                                    if(empty($keyword)){

                                        $keyword = $_GET['keyword'];

                                    }

                                    if(empty($fromUsername)){

                                        $fromUsername = 'opSicjigYKxue3QWHbWEGAd8VKPA';

                                    }

                                    $time = time();



                                    $ret = $this->db-> GetOne("SELECT `setp`,`uname` FROM `@#_weixin_user` WHERE `wxid` = '$fromUsername'");



                                    $setp = $ret['setp'];

                                    $uname = $ret['uname'];

                                    $base_ret = $this->db -> GetOne("SELECT * FROM  `@#_wxch_cfg` WHERE `cfg_name` = 'baseurl'");

                                    if(!empty($base_ret['cfg_value'])){

                                        $base_url = $base_ret['cfg_value'];

                                    }



                                    $base_img = $this->db -> GetOne("SELECT * FROM  `@#_wxch_cfg` WHERE `cfg_name` = 'imgpath'");

                                    if(!empty($base_img['cfg_value'])){

                                        $img_url = $base_img['cfg_value'];

                                    }





                                    $ret = $this->db-> GetOne("SELECT `uid` FROM `@#_member` WHERE `username` ='$uname'");

                                    $user_id = $ret['uid'];

                                    $ret = $this->db -> GetOne("SELECT `wxid` FROM `@#_weixin_user` WHERE `wxid` = '$fromUsername'");



                                     $this->log("R\n".$ret,"./log/log.xml");



                                    if(empty($ret)){

                                        if(!empty($fromUsername)){

                                            $this->db -> Query("INSERT INTO `@#_weixin_user` ( `wxid`) VALUES ('$fromUsername')");

                                        }

                                    }



                                   $textTpl = "<xml>

                                                                <ToUserName><![CDATA[%s]]></ToUserName>

                                                                <FromUserName><![CDATA[%s]]></FromUserName>

                                                                <CreateTime>%s</CreateTime>

                                                                <MsgType><![CDATA[%s]]></MsgType>

                                                                <Content><![CDATA[%s]]></Content>

                                                                <FuncFlag>0</FuncFlag>

                                                                </xml>";

                                    $imageTpl = "<xml>

                                                             <ToUserName><![CDATA[%s]]></ToUserName>

                                                             <FromUserName><![CDATA[%s]]></FromUserName>

                                                             <CreateTime>%s</CreateTime>

                                                             <MsgType><![CDATA[%s]]></MsgType>

                                                             <ArticleCount>%s</ArticleCount>

                                                             <Articles>

                                                             %s

                                                             </Articles>

                                                             <FuncFlag>0</FuncFlag>

                                                             </xml>";

                                    $newsTpl = "<xml>

                                                             <ToUserName><![CDATA[%s]]></ToUserName>

                                                             <FromUserName><![CDATA[%s]]></FromUserName>

                                                             <CreateTime>%s</CreateTime>

                                                             <MsgType><![CDATA[%s]]></MsgType>

                                                             <ArticleCount>%s</ArticleCount>

                                                             <Articles>

                                                             %s

                                                             </Articles>

                                                             <FuncFlag>0</FuncFlag>

                                                             </xml>";    



                        //如果是关注事件

                                    if ($postObj->MsgType == 'event') {

                                        $Eventkeyword = $postObj->EventKey;

                                        if ($Eventkeyword ==''){

                                            $retuser = $this->db -> GetOne( "SELECT `username` from `@#_member` WHERE `wxid`= '$fromUsername' and username != '';");

                                            $msgType = "text";

                                            $lang['regmsg'] = $this->db -> GetOne("SELECT `cfg_value` FROM `@#_wxch_cfg` WHERE `cfg_name` = 'reply'");

                                            if(empty($retuser)){

                                                $contentgz = htmlspecialchars_decode($lang['regmsg']['cfg_value']);

                                                srand((double)microtime()*1000000);

                                                $ychar="0,1,2,3,4,5,6,7,8,9,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z";

                                                $list=explode(",",$ychar);

                                                for($i=0;$i<6;$i++){

                                                $randnum=rand(0,35);

                                                $password.=$list[$randnum];

                                                }

                                                //查询设置

                                                $pwd = $this->db -> GetOne("SELECT `cfg_value` FROM `@#_wxch_cfg` WHERE `cfg_name` = 'userpwd'");

                                                $cfgv = trim($pwd['cfg_value']);

                                                if(!empty($cfgv)){

                                                    $password = $pwd['cfg_value'];

                                                }



                                                // 自动登陆----S

                                                $wechat= $this->db->GetOne("select * from `@#_wechat_config` where id = 1");

                                                // 获取token

                                                $token= get_token($wechat['appid'],$wechat['appsecret']);

                                                $user_info_url = 'https://api.weixin.qq.com/cgi-bin/user/info?access_token='.$token.'&openid='.$fromUsername;

                                                $user_info = json_decode(getCurl($user_info_url),true);

                                                $names = $user_info['nickname'];

                                                 // 自动登陆----E

                                                 $info1 = $this->db -> GetOne("SELECT * FROM `@#_weixin_user`  WHERE `wxid`= '$fromUsername' LIMIT 1");

                                                 if(empty($info1['nickname'])){



                                                     $go_y_user = $this->db->GetOne("select * from `@#_member` where `username` = '$names' LIMIT 1");

                                                     if($go_y_user){

                                                        $weixinuser= $names.rand(0,9);

                                                    }else{

                                                         $weixinuser = $names;

                                                    }

                                                    

                                                    $password2 = md5($password);

                                                    $headimg  = $user_info['headimgurl'];

                                                    $nickname = $names;

                                                    $now = time();



                                                    $this->db -> Query("UPDATE `@#_weixin_user` SET `uname` = '$weixinuser' ,`headimgurl`='$headimg' , `nickname` = '$nickname', `setp` = 3 WHERE `wxid`= '$fromUsername';");



                                                    $info = $this->db -> GetOne("SELECT * FROM `@#_weixin_user`  WHERE `wxid`= '$fromUsername' LIMIT 1");



                                                    $weixinu = $info['uname'];



                                                    $head = $info['headimgurl'];



                                                    $this->db -> Query("INSERT INTO `@#_member` (`username`, `password`, `time`, `img`, `headimg`, `wxid`) VALUES ('$weixinu', '$password2','$now','photo/member.jpg','$head','$fromUsername');");



                                                    $b_uid = $this->db->insert_id();



                                                    $this->db -> Query("INSERT INTO `@#_member_band` SET `b_uid` = '$b_uid' , `b_time` = '$now', `b_type`='weixin', `b_code`='$fromUsername'");



                                                 }

                                               



                                                $contentreg = "\n\n恭喜您注册成功!\n您的用户名为:".$weixinuser."\n密码为:".$password."\n\n<a href='".$base_url."index.php/mobile/home?wxid=".$fromUsername."'>进入会员中心</a>";

                                                $gzshb = $this->coupon($fromUsername);

                                                $contentStr = $contentgz.$contentreg.$gzshb;

                                                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                                                echo $resultStr;

                                                exit;

                                            }else{

                                                $gzshb = $this->coupon($fromUsername);

                                                $contentStr = htmlspecialchars_decode($lang['regmsg']['cfg_value']).$gzshb;

                                                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                                                echo $resultStr;

                                                exit;

                                            }

                                        }else{

                                        $keyword = $postObj->EventKey;

                                        }

                                    }



                                    $auto_res = $ret = $this->db -> GetList("SELECT * FROM `@#_weixin_keywords`");

                                    if(count($auto_res) > 0){

                                        foreach($auto_res as $k => $v){

                                            $res_ks = explode(' ', $v['keyword']);

                                            if($v['type'] == 1){

                                                $msgType = "text";

                                                foreach($res_ks as $kk => $vv){

                                                    if($vv == $keyword){

                                                        $contentStr = $v['contents'];

                                                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                                                        echo $resultStr;

                                                        $this->db -> Query("UPDATE `@#_weixin_keywords` SET `count` = `count`+1 WHERE `id` =$v[id]");

                                                    }

                                                }

                                            }

                                            if($v['type'] == 2){

                                                $msgType = "news";

                                                foreach($res_ks as $kk => $vv){

                                                    if($vv == $keyword){

                                                $ArticleCount = 1;

                                                $v['images'] = $img_url.'/'.$v['pic'];

                                                $items .= "<item>

                                                 <Title><![CDATA[" . $v['pic_tit'] . "]]></Title>

                                                 <Description><![CDATA[" . $v['desc'] . "]]></Description>

                                                 <PicUrl><![CDATA[" . $v['images'] . "]]></PicUrl>

                                                 <Url><![CDATA[" . $v['pic_url'] . "]]></Url>

                                         </item>";

                                        $resultStr = sprintf($imageTpl, $fromUsername, $toUsername, $time, $msgType, $ArticleCount, $items);

                                                        echo $resultStr;

                                                        $this->db -> Query("UPDATE `@#_weixin_keywords` SET `count` = `count`+1 WHERE `id` =$v[id]");

                                                    }

                                                }

                                            }

                                        }

                                    }         

                                    /******绑定会员********/

                                    if($setp > 0 and $setp < 3){

                                        $msgType = "text";

                                        if($keyword == 'quit'){

                                            $this->db -> Query("UPDATE `@#_weixin_user` SET `setp`= 0 WHERE `wxid`= '$fromUsername';");

                                            $contentStr = "您已退出会员绑定流程，再次绑定输入【cxbd】进入绑定流程";

                                            $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                                            echo $resultStr;

                                            exit;

                                        }

                                        if($setp == 1){

                                            $ret = $this->db -> GetOne("SELECT `username` FROM  `@#_member` WHERE `username` = '$keyword'");

                                            if(empty($ret)){

                                                $contentStr ="您输入的用户名不存在，检查之后请重新输入：" . $keyword."\n退出绑定回复【quit】";

                                            }else{

                                                $ret = $this->db -> GetOne("SELECT `uname` FROM  `@#_weixin_user` WHERE `uname` = '$keyword'");

                                                if(!empty($ret)){

                                                    $contentStr = $keyword . "已经被其他用户绑定了，请绑定其他账号\n退出绑定回复【quit】";

                                                    $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                                                    echo $resultStr;

                                                    exit;

                                                }

                                                $this->db -> Query("UPDATE `@#_weixin_user` SET `setp`=`setp`+1 WHERE `wxid`= '$fromUsername';");

                                                $this->db -> Query("UPDATE `@#_weixin_user` SET `uname` = '$keyword' WHERE `wxid`= '$fromUsername';");

                                                $contentStr = '请输入密码';

                                            }

                                        }elseif($setp == 2){

                                            $password = $keyword;

                                            $verifyLogin = $this -> _login($uname, $password);

                                            if(!$verifyLogin){

                                                $contentStr = "您输入的密码不正确，请重新输入\n退出绑定回复【quit】";

                                            }else{

                                                $this->db -> Query("UPDATE `@#_weixin_user` SET `setp`=`setp`+1 WHERE `wxid`= '$fromUsername';");

                                                $contentStr = $uname . '，您的账号已经绑定成功！';

                                            }

                                        }

                                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                                        $this->plusPoint($uname, $keyword, $fromUsername);

                                        echo $resultStr;

                                        exit;

                                    }



                               // 关键字回复

                                           if($keyword == 'debug'){

                                               $msgType = "text";

                                               $contentStr = "Welcome to here!";

                                               $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                                               echo $resultStr;

                                               exit;

                                           }elseif($keyword == 'member'){

                                               $msgType = "text";

                                            $contentStr = "<a href='".$base_url."index.php/mobile/home?wxid=".$fromUsername."'>进入会员中心</a>";

                                            $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                                            echo $resultStr;

                                            exit;

                                           } elseif ($keyword == 'qiandao') {

                                               $jf_state = $this->db->GetOne("SELECT `autoload` FROM `@#_weixin_point` WHERE `point_name` = '$keyword'");

                                               $jf_state = $jf_state['autoload'];

                                               $msgType = "text";

                                               if ($jf_state == 'yes') {

                                                   $qd_jf = $this->db->getOne("SELECT `point_value` FROM `@#_weixin_point` WHERE `point_name` = '$keyword'");

                                                   $res = $this->plusPoint($uname, $keyword, $fromUsername);

                                                   if ($res['errmsg'] == 'ok') {

                                                       $contentStr = $res['contentStr'] . $qd_jf['point_value'];

                                                   } else {

                                                       $contentStr = $res['contentStr'];

                                                   }

                                               } elseif ($jf_state == 'no') {

                                                   $contentStr = '签到送壕分已停止使用';

                                               }

                                               $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                                               echo $resultStr;

                                               exit;

                                           }elseif ($keyword == 'jfcx') {

                                                $ret = $this->db -> GetOne("SELECT `uname` FROM `@#_weixin_user` WHERE `wxid` = '$fromUsername'");

                                                $uname = $ret['uname'];

                                                $ret = $this->db->GetOne("SELECT * FROM `@#_member` WHERE `username` = '$uname'");

                                                $pay_points = $ret['score'];

                                                $money = $ret['money'];

                                                $jingyan = $ret['jingyan'];

                                                $msgType = "text";

                                                $contentStr = "尊敬的".$ret['username']."您好：\r\n账户余额：$money\r\n壕分：$pay_points\r\n经验：$jingyan";

                                                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                                                echo $resultStr;

                                                exit;

            }elseif($keyword == 'new'){

                                                $ret = $this->db -> GetList("SELECT * FROM  `@#_shoplist` WHERE `qishu` < 5 ORDER BY `time`  DESC LIMIT 0 , 5");

                                                $ArticleCount = count($ret);

                                                 if($ArticleCount >= 1){

                                                    foreach($ret as $v){

                                                    $v['thumbnail_pic'] = $img_url .'/'. $v['thumb'];

                                                        $goods_url = $base_url . '/?/mobile/mobile/item/'. $v['id'] . '&wxid='.$fromUsername;

                                                        $items .= "<item>

                                                            <Title><![CDATA[" . $v['title'] . "]]></Title>

                                                            <PicUrl><![CDATA[" . $v['thumbnail_pic'] . "]]></PicUrl>

                                                            <Url><![CDATA[" . $goods_url . "]]></Url>

                                                        </item>";

                                    }

                    $msgType = "news";

                }

                $resultStr = sprintf($newsTpl, $fromUsername, $toUsername, $time, $msgType, $ArticleCount, $items);

                $this->plusPoint($uname, $keyword, $fromUsername);

                echo $resultStr;

                exit;

            }elseif($keyword == 'renqi'){

                $ret = $this->db -> GetList("SELECT * FROM  `@#_shoplist` WHERE `renqi` = 1 ORDER BY `time` DESC LIMIT 0 , 5");

                $ArticleCount = count($ret);

                if($ArticleCount >= 1){

                    foreach($ret as $v){

                         $v['thumbnail_pic'] = $img_url .'/'. $v['thumb'];

                        $goods_url = $base_url . '/?/mobile/mobile/item/'. $v['id'] . '&wxid='.$fromUsername;

                        $items .= "<item>

                 <Title><![CDATA[" . $v['title'] . "]]></Title>

                 <PicUrl><![CDATA[" . $v['thumbnail_pic'] . "]]></PicUrl>

                 <Url><![CDATA[" . $goods_url . "]]></Url>

                 </item>";

                    }

                    $msgType = "news";

                }

                $resultStr = sprintf($newsTpl, $fromUsername, $toUsername, $time, $msgType, $ArticleCount, $items);

                $this->plusPoint($uname, $keyword, $fromUsername);

                echo $resultStr;

                exit;

            }elseif($keyword == 'tuijian'){

                 $ret = $this->db -> GetList("SELECT * FROM  `@#_shoplist` WHERE `pos` = 1 ORDER BY `time` DESC LIMIT 0 , 5");

                $ArticleCount = count($ret);

                if($ArticleCount >= 1){

                    foreach($ret as $v){

                         $v['thumbnail_pic'] = $img_url .'/'. $v['thumb'];

                        $goods_url = $base_url . '/?/mobile/mobile/item/'. $v['id'] . '&wxid='.$fromUsername;

                        $items .= "<item>

                 <Title><![CDATA[" . $v['title'] . "]]></Title>

                 <PicUrl><![CDATA[" . $v['thumbnail_pic'] . "]]></PicUrl>

                 <Url><![CDATA[" . $goods_url . "]]></Url>

                 </item>";

                    }

                    $msgType = "news";

                }

                $resultStr = sprintf($newsTpl, $fromUsername, $toUsername, $time, $msgType, $ArticleCount, $items);

                $this->plusPoint($uname, $keyword, $fromUsername);

                echo $resultStr;

                exit;

            }elseif($keyword == 'ddcx') {

                    $orders = $this->db->GetList("SELECT * FROM `@#_member_go_record` WHERE `uid` = '$user_id' AND `huode` > 100 ORDER BY `id` DESC LIMIT 1");

                if (!empty($orders)) {

                    $msgType = "news";

                    $ArticleCount = count($orders);

                    if($ArticleCount >= 1){

                        foreach($orders as $v){



                    $title = '最近订单：' . $v['shopname'];

                    $url = $base_url . '/?/mobile/mobile/dataserver/' . $v['shopid'] . '&wxid='.$fromUsername;

                    $description = "用户名：" . $v['username'] ."\r\n商品信息：" . $v['shopname'] . "\r\n总金额：" . $v['moneycount'] . "\r\n中奖码：" . $v['huode'] ."\r\n订单状态：" . $v['status'] . "\r\n快递公司：" . $v['company'] . "\r\n物流单号：" . $v['company_code']. "\r\n快递费用：" . $v['company_money'].'元';

                    $items = "<item>

                 <Title><![CDATA[" . $title . "]]></Title>

                 <Description><![CDATA[" . $description . "]]></Description>

                 <PicUrl><![CDATA[]]></PicUrl>

                 <Url><![CDATA[" . $url . "]]></Url>

                 </item>";

                     }

                    $resultStr = sprintf($newsTpl, $fromUsername, $toUsername, $time, $msgType, $ArticleCount, $items);

                    $this->plusPoint($uname, $keyword, $fromUsername);

                    echo $resultStr;

                }

                } else {

                    $msgType = "text";

                    $contentStr = "您还没有订单";

                    $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                    echo $resultStr;

                }

                exit;

            }elseif($keyword == 'cxbd'){

                $ret = $this->db -> GetList("SELECT `uname` FROM  `@#_weixin_user`");

                $this->db -> Query("UPDATE  `@#_weixin_user` SET `setp` = 0 WHERE `wxid`= '$fromUsername';");

                    $contentStr = '您已进入会员绑定流程，想要退出绑定流程请回复【quit】,继续请输入网站会员昵称';

                    $this->db -> Query("UPDATE  `@#_weixin_user` SET `setp`=`setp`+1 WHERE `wxid`= '$fromUsername';");

                $msgType = "text";

                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                echo $resultStr;

                exit;

            } elseif ($keyword == 'kdcx') {

                if (!empty($user_id)) {

                    $orders = $this->db->GetOne("SELECT * FROM `@#_member_go_record` WHERE `uid` = '$user_id' AND `huode` > 100 ORDER BY `id` DESC LIMIT 1");

                } else {

                    $ret = $this->db-> GetOne("SELECT `uid` FROM `@#_member` WHERE `username` ='$fromUsername'");

                    $user_id = $ret['uid'];

                    $orders = $db->GetOne("SELECT * FROM `@#_member_go_record` WHERE `uid` = '$user_id' ORDER BY `id` DESC");

                }

                if (empty($orders)) {

                    $msgType = "text";

                    $contentStr = '您还没有订单，无法查询快递';

                    $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                    echo $resultStr;

                    exit;

                }

                if (empty($orders['company_code'])) {

                    $msgType = "text";

                    $contentStr = '中奖订单：' . $orders['shopname'] . '还没有快递单号，不能查询';

                    $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                    echo $resultStr;

                    exit;

                }

                $k_arr = $this->kuaidi($orders['company_code'], $orders['company']);

                $contents = '';

                if ($k_arr['message'] == 'ok') {

                    $count = count($k_arr['data']) - 1;

                    for ($i = $count; $i >= 0; $i--) {

                        $contents.= "\r\n" . $k_arr['data'][$i]['time'] . "\r\n" . $k_arr['data'][$i]['context'];

                    }

                    $msgType = "text";

                    $contentStr = "快递信息" . $contents;

                    $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                    $this->plusPoint($db, $uname, $keyword, $fromUsername);

                    echo $resultStr;

                    exit;

                }

            }elseif(!empty($keyword)){

                $goods_name = $keyword;

                $ret = $this->db -> GetList("SELECT * FROM  `@#_shoplist` WHERE  `title` LIKE '%$goods_name%' AND `q_user` = '' LIMIT 0,5");

                $ArticleCount = count($ret);

                if($ArticleCount >= 1){

                    foreach($ret as $v){

                         $v['thumbnail_pic'] = $img_url .'/'. $v['thumb'];

                        $goods_url = $base_url . '/?/mobile/mobile/item/'. $v['id'] . '&wxid='.$fromUsername;

                        $items .= "<item>

                 <Title><![CDATA[" . $v['title'] . "]]></Title>

                 <PicUrl><![CDATA[" . $v['thumbnail_pic'] . "]]></PicUrl>

                 <Url><![CDATA[" . $goods_url . "]]></Url>

                 </item>";

                    }

                    $msgType = "news";

                }else{

                    $msgType = "text";

                    $tj_str = $this -> plusTj($base_url,$fromUsername);

                    $contentStr = '没有搜索到"' . $goods_name . '"的商品' . $tj_str;

                    $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                    echo $resultStr;

                    exit;

                }

                $resultStr = sprintf($newsTpl, $fromUsername, $toUsername, $time, $msgType, $ArticleCount, $items);

                echo $resultStr;

                exit;

            }else{

                echo "";

                exit;

            }



                        }else {

        	                       echo "";

        	                       exit;

        }

    }

















/*****获取推荐商品********/

protected function plusTj($base_url,$fromUsername){

    $ret = $this->db -> GetList("SELECT * FROM  `@#_shoplist` WHERE  `q_user` = ''");

    $tj_count = count($ret);

    $tj_key = mt_rand(0, $tj_count);

    $tj_goods = $ret[$tj_key];

    return $tj_str = "\r\n我们为您推荐:" . '<a href="' . $base_url . '/?/mobile/mobile/item/' . $tj_goods['id'] . '&wxid='.$fromUsername.'">' . $tj_goods['title'] . '</a>';

}

/*****************获取新闻**************/

protected function getNews($db, $base_url){

    $ret = $this->db -> GetList("SELECT * FROM  `@#_article` ORDER BY `posttime` LIMIT 0 , 5");

    $ArticleCount = count($ret);

    if($ArticleCount >= 1){

        foreach($ret as $v){

            $v['thumbnail_pic'] = $base_url . $v['goods_img'];

            $goods_url = $base_url . 'goods.php?id=' . $v['goods_id'] . '&wxid='.$fromUsername;

            $items .= "<item>

         <Title><![CDATA[" . $v['goods_name'] . "]]></Title>

         <PicUrl><![CDATA[" . $v['thumbnail_pic'] . "]]></PicUrl>

         <Url><![CDATA[" . $goods_url . "]]></Url>

         </item>";

        }

    }

    $data = array();

    $data['ArticleCount'] = $ArticleCount;

    $data['items'] = $items;

    return $data;

}	





/*****************关注送红包活动**********/



        protected function coupon($fromUsername) {

            $retc = $this->db->GetOne("SELECT `coupon`,`uname` FROM `@#_weixin_user` WHERE `wxid` ='$fromUsername'");

            $umane = $retc['uname'];

            $userinfo = $this->db->GetOne("SELECT * FROM `@#_member` WHERE `username` ='$umane'");

            if (!empty($retc['coupon'])) {

                $contentStr = "\r\n您已经领取过红包:" . $retc['coupon'];

                return $contentStr;

            } else {

                $ret = $this->db->GetOne("SELECT * FROM `@#_weixin_bonus` WHERE `id` = 1");

                $type_id = $ret['type_id'];

                if($type_id == 0){

                    return '';

                }

                $ret = $this->db->GetOne("SELECT * FROM `@#_weixin_bonus_type` WHERE `type_id` =$type_id ");

                $type_money = $ret['type_money'];

                $time = time();

                if (($time >= $ret['send_start_date']) AND ($time <= $ret['send_end_date'])) {

                    if ($ret['total']>0 && ($ret['total']-$ret['getnum']) >0) {

                        //更新微信红包是否领取以及领取的那个红包

                        $q1 = $this->db->Query("UPDATE `@#_weixin_user` SET `coupon` = 1, `typeid` = $type_id, `time`= $time WHERE `wxid` ='$fromUsername'");

                        //更新用户金额

                         $q2 = $this->db->Query("UPDATE `@#_member` SET `money` = `money`+ $type_money WHERE `username` ='$umane'");

                         //组合内容

                         $userid = $userinfo['uid'];

                         $pay_type = '微信关注送现金红包'.$type_money.'元';

                        //增加我的充值记录报

                         $q3 = $this->db->Query("INSERT INTO `@#_member_addmoney_record` (`money`,`uid`,`pay_type`,`status`,`time`) VALUES ('$type_money', '$userid','$pay_type','已付款','$time')");

                        //更新红包剩余总数

                         $q4 = $this->db->Query("UPDATE `@#_weixin_bonus_type` SET `getnum` = `getnum`+1 WHERE `type_id`=$type_id");

                        $contentStr = "\r\n关注送". $type_money . "元红包:";

                    } else {

                        $contentStr = "\r\n本次活动红包已送完!";

                    }

                    return $contentStr;

                }

            }

        }



    private function _checkSignature(){

                $info=$this->db->GetOne("select * from `@#_wechat_config`");

                define("TOKEN", $info['token']);

                if (!defined("TOKEN")) {

                     throw new Exception('TOKEN is not defined!');

                 }

                        $signature = $_GET["signature"];

                        $timestamp = $_GET["timestamp"];

                        $nonce = $_GET["nonce"];

        	            $token = TOKEN;

		$tmpArr = array($token, $timestamp, $nonce);

		sort($tmpArr, SORT_STRING);

		$tmpStr = implode( $tmpArr );

		$tmpStr = sha1( $tmpStr );

		

		if( $tmpStr == $signature ){

			return true;

		}else{

			return false;

		}

	}



    /******增加菜单点击事件*********/

        public function plusPoint($uname, $keyword, $fromUsername) {

            $res_arr = array();

            $record = $this->db->GetOne("SELECT * FROM `@#_weixin_point_record` WHERE `point_name` = '$keyword' AND `wxid` = '$fromUsername'");

            $num = $this->db->GetOne("SELECT `point_num` FROM `@#_weixin_point` WHERE `point_name` = 'qiandao'");

            $num = $num['point_num'];

            $lasttime = time();

            if (empty($record)) {

                $dateline = time();

                $potin_name = $this->db->GetOne("SELECT `point_name` FROM `@#_weixin_point` WHERE `point_name` = '$keyword'");

                $potin_name=$potin_name['point_name'];

                if (!empty($potin_name)) {

                    $this->db->Query("INSERT INTO `@#_weixin_point_record` (`wxid`, `point_name`, `num`, `lasttime`, `datelinie`,`total`) VALUES ('$fromUsername', '$keyword' , 1, $lasttime, $dateline, 1);");

                }

            } else {

                $time = time();

                $db_lasttime = $this->db->GetOne("SELECT `lasttime` FROM `@#_weixin_point_record` WHERE `point_name` = '$keyword' AND `wxid` = '$fromUsername'");

                if (($time - $db_lasttime['lasttime']) > (60 * 60 * 24)) {

                    $this->db->Query("UPDATE `@#_weixin_point_record` SET `num` = 0,`lasttime` = '$lasttime' WHERE `wxid` ='$fromUsername';");

                }

                $record_num = $this->db->GetOne("SELECT `num`,`total`,`lasttime` FROM `@#_weixin_point_record` WHERE `point_name` = '$keyword' AND `wxid` = '$fromUsername'");

                if ($record_num['num'] < 1) {

                    $this->db->Query("UPDATE `@#_weixin_point_record` SET `num` = `num`+1, `total` = `total`+1,`lasttime` = '$lasttime' WHERE `point_name` = '$keyword' AND `wxid` ='$fromUsername';");

                } else {

                    $res_arr['errmsg'] = 'no';

                    $res_arr['contentStr'] = '今天签到过啦，明天继续哦！';

                    return $res_arr;

                }

            }

            $wxch_points = $this->db->GetList("SELECT * FROM  `@#_weixin_point`");

            foreach ($wxch_points as $k => $v) {

                if ($v['point_name'] == $keyword) {

                    if ($v['autoload'] == 'yes') {

                        $points = $v['point_value'];

                        $this->db->Query("UPDATE `@#_member` SET `score` = `score`+$points WHERE `username` ='$uname'");

                    }

                }

            }

            $res_arr['errmsg'] = 'ok';

            if($record_num['total']==0){

                $res_arr['contentStr'] = "签到成功,\r\n共计签到1天 , 壕分+";

            }

            if($record_num['total']>0){

                $totals = $record_num['total']+1;

                $res_arr['contentStr'] ="您共签到".$totals."天\r\n上次签到时间：".date('Y-m-d H:i:s',$record_num['lasttime']) ."\r\n本次签到成功,壕分+";

            }

            return $res_arr;

        }



        public function kuaidi($invoice_no, $shipping_name) {

            switch ($shipping_name) {

                case '中国邮政':

                    $logi_type = 'ems';

                    break;



                case '申通快递':

                    $logi_type = 'shentong';

                    break;



                case '圆通速递':

                    $logi_type = 'yuantong';

                    break;



                case '顺丰速运':

                    $logi_type = 'shunfeng';

                    break;



                case '韵达快递':

                    $logi_type = 'yunda';

                    break;



                case '天天快递':

                    $logi_type = 'tiantian';

                    break;



                case '中通速递':

                    $logi_type = 'zhongtong';

                    break;



                case '增益速递':

                    $logi_type = 'zengyisudi';

                    break;

            }

            $kurl = 'http://www.kuaidi100.com/query?type=' . $logi_type . '&postid=' . $invoice_no;

            $ret = $this->curl_get_contents($kurl);

            $k_arr = json_decode($ret, true);

            return $k_arr;

        }

        public function curl_get_contents($url) {

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);

            curl_setopt($ch, CURLOPT_TIMEOUT, 1);

            curl_setopt($ch, CURLOPT_USERAGENT, _USERAGENT_);

            curl_setopt($ch, CURLOPT_REFERER, _REFERER_);

            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

            $r = curl_exec($ch);

            curl_close($ch);

            return $r;

        }

        public function curl_grab_page($url, $data, $proxy = '', $proxystatus = '', $ref_url = ''){

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");

            curl_setopt($ch, CURLOPT_TIMEOUT, 40);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

            if ($proxystatus == 'true'){

                curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, TRUE);

                curl_setopt($ch, CURLOPT_PROXY, $proxy);

            }

            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

            curl_setopt($ch, CURLOPT_URL, $url);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            if(!empty($ref_url)){

                curl_setopt($ch, CURLOPT_HEADER, TRUE);

                curl_setopt($ch, CURLOPT_REFERER, $ref_url);

            }

            curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

            curl_setopt($ch, CURLOPT_POST, TRUE);

            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

            ob_start();

            return curl_exec ($ch);

            ob_end_clean();

            curl_close ($ch);

            unset($ch);

        }



        // get方法请求

       function getCurl($url){//get https的内容

         $ch = curl_init();

         curl_setopt($ch, CURLOPT_URL,$url);

         curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);//不输出内容

         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

         $result= curl_exec($ch);

         curl_close($ch);

         return $result;     

         }



         // 获取token

        function get_token($appid,$appsecret){

            $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";

            $json=$this->getCurl($url);

            $arr=json_decode($json,true);

            return $arr['access_token'];

         }





    // 检查用户登陆状态的

    private function _login($uname, $password){

            $userinfo = $this->db->GetOne("SELECT * FROM `@#_member` WHERE `username` ='$uname'");

            if($userinfo['password'] == md5($password)){

                    return true;

            }else{

                    return false;

            }

    }

    // 写日志，私有化(需要写入的数据，文件名-非必须) 

    private function log($data,$log_filename){

            // 如果文件夹不存在则创建文件夹

            is_dir(dirname($log_filename)) || mkdir(dirname($log_filename),0777,true); 

            // 日志大小

            $max_size=10000;

            // 判断文件大小做自动删除动作

            if(file_exists($log_filename) && abs(filesize($log_filename))>$max_size){

                // 删除文件

                unlink($log_filename);

            }else{

                // 写日志(第三个参数是系统函数，可以连续写文件不覆盖)

                file_put_contents($log_filename, date("H:i:s")." ".$data."\n", FILE_APPEND);    

            }

    }





}