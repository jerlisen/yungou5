<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta property="qc:admins" content="142671211761142633" /> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="360-site-verification" content="a80c40891b1bd8eae41813fe1ca5d9d0" />
<meta name="baidu-site-verification" content="bNvHFO12rY" />
<meta name="pinggu-site-verification" content="e5ab2b2099e18bdfe759dc89506c9c31" />
<title><?php echo get_user_name($member,'username'); ?><?php if(isset($title)): ?><?php echo $title; ?>-一元淘吧<?php  else: ?><?php echo _cfg("web_name"); ?><?php endif; ?></title>
<meta name="keywords" content="<?php if(isset($keywords)): ?><?php echo $keywords; ?><?php  else: ?><?php echo _cfg("web_key"); ?><?php endif; ?>" />
<meta name="description" content="<?php if(isset($description)): ?><?php echo $description; ?><?php  else: ?><?php echo _cfg("web_des"); ?><?php endif; ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/Comm.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/kefu.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/indexlink.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/register.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/all.css"/>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/global/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/indexlink.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/window.js"></script>
</head>
<body>
<script> 
jQuery(function() {
		//Set the popup window to center
		var COOKIE_NAME = "mode";
		if( $.cookie(COOKIE_NAME)){
			$("#indexheadpopup").hide();
		}else{
		   var winH = $(window).height();
		   var winW = $(window).width();
		  $("#indexheadpopup").css({'top': winH/2-$("#indexheadpopup").height()/2,'left': winW/2-$("#indexheadpopup").width()/2 });
	        //$("#indexheadpopup").slideDown(1000, function() {
	        //setTimeout("ClearIndexHeadPopup()", '3000000');
	        //});
	     // $.cookie(COOKIE_NAME,"mode", {path: '/', expires: 1});
		}
    });
function ClearIndexHeadPopup() {
	     $('#indexheadpopup').hide();
	       }
</script>
<div class="header">
	<div class="site_top">
	<div class="head_top">
		<p class="collect"><a href="javascript:;" id="addSiteFavorite">收藏<?php echo _cfg("web_name_two"); ?></a></p>
		 <p class="collect" style="padding-top: 4px;">&nbsp;</p>
		 <p class="collect" style="margin-top: 2px;">&nbsp;</p>
		 <p class="Ht-qqicon"><a style="text-indent:0em; background:none;width:160px;"  rel="nofollow" href="<?php echo WEB_PATH; ?>/group_qq">官方QQ群</a></p>
		<ul class="login_info" style="display: block;">
		<?php if(get_user_arr()): ?>
			<li class="h_wel" id="logininfo">
				<a href="<?php echo WEB_PATH; ?>/member/home" class="gray01" >					
					<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_img('3030'); ?>" width="30" height="30"/>					
					<?php echo get_user_name(get_user_arr(),'username'); ?>
				</a>&nbsp;&nbsp;
				<a href="<?php echo WEB_PATH; ?>/member/user/cook_end" class="gray01">[退出登录]</a>
			</li>
			<?php  else: ?>
                      <!--	   <li class="h_login">-->
						 <li id="logininfo" class="h_login">
				<i>您好，欢迎光临！</i>	

			<!--	<li id="logininfo" class="h_login">-->
                                <a class="gray01" href="<?php echo WEB_PATH; ?>/login" >登录1元淘</a>
				<a class="gray01" href="<?php echo WEB_PATH; ?>/register" style="color:#FF0000; font-weight:bolder" >&nbsp;免费注册</a>				
			</li>
			<?php endif; ?>
			<li class="h_1yyg">
				<a  href="<?php echo WEB_PATH; ?>/member/home.html">我的账户<b></b></a>
				<div class="h_1yyg_eject" style="display:none;">
					<dl>
						<dt><a  href="<?php echo WEB_PATH; ?>/member/home.html">个人中心<i></i></a></dt>
						<dd><a  href="<?php echo WEB_PATH; ?>/member/home/userbuylist.html">1元淘记录</a></dd>
						<dd><a  href="<?php echo WEB_PATH; ?>/member/home/orderlist.html">获得的商品</a></dd>
						<dd><a  href="<?php echo WEB_PATH; ?>/member/home/userrecharge">帐户充值</a></dd>
						<dd><a  href="<?php echo WEB_PATH; ?>/member/home/modify.html">个人设置</a></dd>
					</dl>
				</div>
			</li>
          <li class="h_help"><a href="<?php echo WEB_PATH; ?>/member/home/userrecharge.html" target="_blank">快速充值</a></li>
	     <li class="h_help"><a href="<?php echo WEB_PATH; ?>/group/" target="_blank">1元淘社区</a></li>
	     <li class="h_help"><a href="<?php echo WEB_PATH; ?>/help/1.html" target="_blank">帮助中心</a></li>
		<!--<li class="h_tel"><b><?php echo _cfg("cell"); ?></b></li>-->
		</ul>
	  </div>
	</div>
	<div class="head_mid">
		<div class="head_mid_bg">
<!--<s style="background:url( http://img.1ytb.cc/Images/menuimg/huo.gif) no-repeat; display:block; width:20px; height:15px; position:absolute; left:600px; top:101px; z-index:50;"></s>--><s style="background:url( http://img.1ytb.cc/Images/menuimg/HOT.png) no-repeat; display:block; width:25px; height:15px; position:absolute; left:715px; top:101px; z-index:50;"></s>	
<h1 class="logo_1yyg">
				<a class="logo_1yyg_img" href="<?php echo G_WEB_PATH; ?>/" title="<?php echo _cfg('web_name'); ?>">
					<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>"/>
				</a>
			</h1>
			<div class="newbie_guide"><a title="什么是一元淘吧？" id="whatIsThis" href="http://www.1ytb.cc/single/newbie"><img style="zoom: 1;" src="http://www.1ytb.cc/statics/templates/yungou/images/shiping.png" width="260px" height="60px" /></a> </div>
                      <div class="newbie_guide"><a title="手机客户端下载" id="whatIsThis" href="#" ><img style="zoom: 1;" src="http://www.1ytb.cc/statics/templates/yungou/images/app.gif" width="120px" height="50px" /></a> </div>
		<div class="mini_mycart" id="sCart">
			<a rel="nofollow" href="<?php echo WEB_PATH; ?>/member/cart/cartlist" class="w-miniCart-btn">
				<i class="icoo ico-miniCart"></i>结算
				<b class="w-miniCart-count" id="pro-view-3">
					<i class="ico ico-arrow-white-solid ico-arrow-white-solid-l"/></i><span id="sCartTotal">0</span>
				</b>
			</a>
 			<div class="mycart_list" id="sCartlist" style="z-index: 99999; display: none;">
				
 				<div class="goods_loding" id="sCartLoading" style="display: none;"><img border="0" alt="" src="<?php echo G_TEMPLATES_STYLE; ?>/images/goods_loading.gif">正在加载......</div>
 				<p id="p1">共计 <span id="sCartTotal2"> 2</span> 件商品 金额总计：<span id="sCartTotalM" class="rmbred">5.00</span></p>
 				<h3><input type="button" id="sGotoCart" value="去购物车并结算"></h3>
 			</div>
 		</div>
			<div class="head_search">
							<div class="keySearch">
					<a href="<?php echo WEB_PATH; ?>/s_tag/苹果" target="_blank">苹果</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/iPhone" target="_blank">iPhone</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/智能手机" target="_blank">智能手机</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/4G手机" target="_blank">4G手机</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/电脑" target="_blank">电脑</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/单反" target="_blank">单反</a>                 
				</div>
				<input type="text" id="txtSearch" class="init" value='输入"IPhone"试一试'/>
				<input type="button" id="butSearch" class="search_submit" value="搜索"/>

			</div>
		</div>
	</div>
	<div class="head_nav">
 	<div class="nav_center f-clear">
		<div class="m-catlog">
		     <div class="m-catlog-hd"><a href="<?php echo WEB_PATH; ?>/goods_list/index.html"><h2>奖品分类</h2></a><i class="ico ico-arrow ico-arrow-white ico-arrow-white-down"></i></div>
			 <div class="m-catlog-wrap">
				<div class="m-catlog-bd">
					<ul class="m-catlog-list">
					<!--<li><a href="<?php echo WEB_PATH; ?>/goods_list/index.html">全部奖品</a></li>-->
					<?php $data=$this->DB()->GetList("select * from `@#_category` where `model`='1' and `parentid` = '0' order by `order`
			 desc",array("type"=>1,"key"=>'',"cache"=>0)); ?>
					<?php $ln=1;if(is_array($data)) foreach($data AS $categoryx): ?>
					<li><a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $categoryx['cateid']; ?>/index.html"><?php echo $categoryx['name']; ?></a></li>
					<?php  endforeach; $ln++; unset($ln); ?>
					<?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?>
			
					</ul>
				</div>
				<div class="m-catlog-ft"></div>
			 </div>
		</div>
		<div class="m-menu">
			<ul class="m-menu-list">
				<li class="selected" ><a href="<?php echo G_WEB_PATH; ?>">首页</a></li>
				<?php echo Getheader('index'); ?>
			</ul>
		</div>
 		<!-- <div class="mini_mycart" id="sCart">
 			<input type="hidden" id="hidChanged" value="0"/>
 			<a id="sCartNavi" class="cart"><s></s>购物车<span id="sCartTotal">0</span></a>
			<a href="<?php echo WEB_PATH; ?>/member/cart/cartlist" target="_blank" class="checkout">去结算</a>
 		</div> -->

				<style type="text/css">
				
					
				</style>

				<div class="m-joinNum r">
				<!--	<a href="<?php echo WEB_PATH; ?>/buyrecord" target="_blank"> -->
						<input type="hidden" value="<?php echo go_count_renci(); ?>">
						<span class="qian text">已有</span>
						<span class="hou text">人次参加</span>
					<!-- </a> -->
				</div>

					<!-- 人次参与 -->
				<script type="text/javascript">
					var WEB_PATH = '<?php echo WEB_PATH; ?>';
					var G_WEB_PATH = '<?php echo G_WEB_PATH; ?>';
					var WEB_NAME = '<?php echo _cfg("web_name"); ?>';
					// 总汇购人次
					function updateTotal(total){
						var lastTotalLength = $('.m-joinNum .tnum').length;
						var newTotalArr = total.split('');

						if (newTotalArr.length > lastTotalLength) {	// 补位
							if (lastTotalLength == 0) {
								var count = newTotalArr.length;
								var obj = $('.m-joinNum .hou');
							} else {
								var count = newTotalArr.length - lastTotalLength;
								var obj = $('.m-joinNum .tnum').eq(0);
							}
							for (var i = 0; i < count; i++) {
								var _tmpNum = '<span class="tnum"><ul><li>9</li><li>8</li><li>7</li><li>6</li><li>5</li><li>4</li><li>3</li><li>2</li><li>1</li><li>0</li></ul></span>';
								obj.before(_tmpNum);
							};
						};

						for (var i = 0; i < newTotalArr.length; i++) {	// 调整数字
							$('.m-joinNum .tnum ul').eq(i).css('margin-top', -270).animate({
								marginTop : 0 - ((9 - newTotalArr[i]) * 30)
							}, 1000)
						};
						// 记录当前人次
						$('.m-joinNum input').val(total);
					}

					if ($('.m-joinNum').length > 0) {
						var huiTotal = $('.m-joinNum input').val();
						huiTotal=huiTotal
						updateTotal(huiTotal);	// 首次更新

						var _totalTime = setInterval(function (){
							$.ajax({
								url:WEB_PATH + '/api/wujing/getTotal',
								success:function(e){
									updateTotal(e);
								}
							})
						}, 30000)
					};
				</script>
		
 	</div>
</div>
</div>
<!--header end-->
<script type="text/javascript"> 
   $(function(){
	$(".m-catlog-hd").hover(
		function(){			
			$(".m-catlog-wrap").show();
			//$(".ico-arrow-white-down").remove();
			//$(".ico-arrow-white").addClass(".ico-arrow-white-up");
			$(".m-catlog-wrap").hover(function(){
				$(".m-catlog-wrap").show();
			},
			function(){
			$(".m-catlog-wrap").hide();
		}
			);
		},
		function(){
			$(".m-catlog-wrap").hide();
		}
	);
})
</script> 
<script>
$(function(){
	$("#sCart").hover(
		function(){			
			$("#sCartlist,#sCartLoading").show();
			$("#sCartlist p,#sCartlist h3").hide();
			$("#sCart .mycartcur").remove();
			$("#sCartTotal2").html("");
			$("#sCartTotalM").html("");
			$.getJSON("<?php echo WEB_PATH; ?>/member/cart/cartheader/="+ new Date().getTime(),function(data){
				$("#sCart .mycartcur").remove();
				$("#sCartLoading").before(data.li);
				$("#sCartTotal2").html(data.num);
				$("#sCartTotalM").html(data.sum);
				$("#sCartLoading").hide();
				$("#sCartlist p,#sCartlist h3").show();
			});
		},
		function(){
			$("#sCartlist").hide();
		}
	);
	$("#sGotoCart").click(function(){
		window.location.href="<?php echo WEB_PATH; ?>/member/cart/cartlist";
	});
})
function delheader(id){
	var Cartlist = $.cookie('Cartlist');
	var info = $.evalJSON(Cartlist);
	var num=$("#sCartTotal2").html()-1;
	var sum=$("#sCartTotalM").html();
	info['MoenyCount'] = sum-info[id]['money']*info[id]['num'];
		
	delete info[id];
	//$.cookie('Cartlist','',{path:'/'});
	$.cookie('Cartlist',$.toJSON(info),{expires:30,path:'/'});
	$("#sCartTotalM").html(info['MoenyCount']);
	$('#sCartTotal2').html(num);
	$('#sCartTotal').text(num);											
	$('#btnMyCart em').text(num);
	$("#mycartcur"+id).remove();
}
$(function(){
	$(".h_1yyg").mouseover(function(){
		$(".h_1yyg_eject").show();
	});
	$(".h_1yyg").mouseout(function(){
		$(".h_1yyg_eject").hide();
	});
	$(".h_news").mouseover(function(){
		$(".h_news_down").show();
	});
	$(".h_news").mouseout(function(){
		$(".h_news_down").hide();
	});
});
$(function(){
	$("#txtSearch").focus(function(){
		$("#txtSearch").css({background:"#FFFFCC"});
		var va1=$("#txtSearch").val();
		if(va1=='输入"IPhone"试一试'){
			$("#txtSearch").val("");
		}
	});
	$("#txtSearch").blur(function(){
		$("#txtSearch").css({background:"#FFF"});
		var va2=$("#txtSearch").val();
		if(va2==""){
			$("#txtSearch").val('输入"IPhone"试一试');
		}			
	});
	$("#butSearch").click(function(){
		window.location.href="<?php echo WEB_PATH; ?>/s_tag/"+$("#txtSearch").val();
	});
});


</script>