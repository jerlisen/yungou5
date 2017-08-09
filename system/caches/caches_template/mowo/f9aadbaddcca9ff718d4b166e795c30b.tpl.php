<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta property="qc:admins" content="372363545576117046375" />
<link rel="shortcut icon" href=" /favicon.ico" /> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title><?php if(isset($title)): ?><?php echo $title; ?><?php  else: ?><?php echo _cfg("web_name"); ?><?php endif; ?></title>
<meta name="keywords" content="<?php if(isset($keywords)): ?><?php echo $keywords; ?><?php  else: ?><?php echo _cfg("web_key"); ?><?php endif; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=8" /> 
<meta name="description" content="<?php if(isset($description)): ?><?php echo $description; ?><?php  else: ?><?php echo _cfg("web_des"); ?><?php endif; ?>" />
<meta property="qc:admins" content="73052615576751207677756375" />
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8;  IE=EDGE">
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/header.css" />
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/Comm1.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/register.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/head.css"/>
<link rel="icon" type="image/x-icon" href="<?php echo WEB_PATH; ?>/favicon.ico">
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/global/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cookie.js"></script>
<meta name="pinggu-site-verification" content="99cdd3d4e37ce0865dd158cab6d87cfb" />


<!--新菜单栏start-->
<link rel="stylesheet" type="text/css" href="<?php echo G_GLOBAL_STYLE; ?>/newnav/Comm.css">
<link rel="stylesheet" type="text/css" href="<?php echo G_GLOBAL_STYLE; ?>/newnav/register.css">
<link rel="stylesheet" type="text/css" href="<?php echo G_GLOBAL_STYLE; ?>/newnav/index_o.css">
<script type="text/javascript" async="" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/ag.js"></script>
<script async="" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/analytics.js"></script>
<script src="<?php echo G_GLOBAL_STYLE; ?>/newnav/hm.js"></script>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/index.js"></script>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/jquery.lazyload.js"></script>



<script language="javascript" type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/wpa.php"></script>
<!--新菜单栏End-->
</head>

<body>
<style>
.g-nav a {
font-size: 16px;
}
.number li.gray6 {
width: 56px;
font-size: 14px;
line-height: 29px;
_line-height: 31px;
}
.g-toolbar {width: 100%;height: 36px;border-bottom: 1px solid #ddd;position: relative;z-index: 99;background: #fff;-moz-box-shadow: 1px 1px 1px #f7f7f7;-webkit-box-shadow: 1px 1px 1px #f7f7f7;box-shadow: 1px 1px 1px #f7f7f7;}
.g-toolbar .w1190 {margin: 0 auto;}
.fl, .fl-img {float: left;}
ol, ul {list-style: none;}
div, ul, li, dl, dt, dd, table, td, input {font-size: 12px;}
.g-toolbar li {float: left;height: 36px;position: relative;z-index: 0;}
li {list-style: none;}
.g-toolbar li .u-menu-hd {float: left;height: 20px;line-height: 18px;padding: 8px 17px;position: relative;z-index: 93;}
.g-toolbar li a {color: #666;}
a:focus, a:link {outline: none;}
a:link, a:visited {text-decoration: none;}
a {text-decoration: none;color: #666;margin: 0;padding: 0;word-break: break-all;}
.g-toolbar li.u-arr, .g-toolbar li.u-arr-1yyg, .g-toolbar li.u-arr-news {position: relative;}
.g-toolbar li.u-arr .u-menu-hd {width: 79px;padding: 8px 17px 8px;_padding: 9px 17px 7px;}
.g-toolbar li .u-menu-hd {float: left;height: 20px;line-height: 18px;padding: 8px 17px;position: relative;z-index: 93;}
.g-toolbar li a {color: #666;}

.g-toolbar li.u-arr .u-select {width: 91px;height: 93px;padding: 7px 0 3px;text-align: center;}
.g-toolbar li .u-select {background: #fff;position: absolute;top: 36px;left: 0;z-index: 90;border: 1px solid #ddd;border-top: 0 none;display: none;overflow: hidden;}
* {padding: 0;margin: 0;}
.g-toolbar li.u-arr .u-select a {line-height: 20px;text-align: center;}
.g-toolbar li.u-arr .u-select img {display: block;width: 66px;height: 66px;margin: 0 auto 3px;}
.g-toolbar li.f-gap s {width: 0;height: 12px;font-size: 0;display: inline-block;border-left: 1px solid #ddd;overflow: hidden;margin: 12px 0;}
.g-toolbar li {float: left;height: 36px;position: relative;z-index: 0;}
.fr {float: right;}
.g-toolbar li {float: left;height: 36px;position: relative;z-index: 0;}
.g-toolbar li .u-select span {display: block;padding-left: 17px;text-align: left;margin-bottom: 7px;}
.g-toolbar li.u-arr .u-select a {text-align: center;}
h1, h2, h3, h4, h5, h6 {font-size: 100%;}
a.u-service-off i {background: url(/statics/templates/quyu-1yygkuan/images/service-off-2014.gif) no-repeat;}
a.u-service i {display: block;float: left;width: 24px;height: 24px;cursor: pointer;}
.g-toolbar li i {display: block;float: left;background-position: 0 0;position: relative;top: -2px;left: -2px;_left: 0;}
.g-header {clear: both;height: 110px;}
.g-header .w1190 {position: relative;}
.logo_1yyg {width: 260px;height: 110px;background-repeat: no-repeat;}
.logo_1yyg a.logo {float: left;display: block;width: 122px;height: 74px;margin: 25px -5px;}
a:hover {color: #f60;}
fieldset, img {border: 0;}
.search_cart_wrap {width: 930px;position: relative;z-index: 0;}
.number {width: 380px;height: 29px;margin-left: 600px;text-align: center;padding-top: 59px;}
.number ul {float: left;position: relative;}
.number li.gray6 {width: 56px;font-size: 14px;line-height: 29px;_line-height: 31px;}
.number li.nobor {width: 10px;border: 0 none;}
.number a li {display: block;width: 21px;color: #f60;position: relative;}
.number li {float: left;display: block;font-size: 24px;height: 27px;line-height: 27px;text-align: center;margin: 0 2px;border-radius: 1px;border: 1px solid #ddd;overflow: hidden;}
.gray6, a.gray6:link, a.gray6:visited {color: #666;}
.gray6, a.gray6:link, a.gray6:visited {color: #666;}
.gray6 {color: #666!important;}
.number li cite {display: block;width: 21px;position: absolute;top: 0;left: 0;z-index: 1;}
.number li em {display: block;width: 21px;color:#F60;}
.number li i {width: 196px;height: 0;border-top: 1px solid #ededed;position: absolute;top: 13px;left: 0;z-index: 0;}
.number li.nobor {width: 10px;border: 0 none;}
.number li.u-secondary {width: 40px;position: relative;text-align: left;}
.number li.u-secondary b {border-style: solid;border-width: 4px 0 4px;border-color: #fff;border-left: 4px solid rgb(102,102,102);width: 0;height: 0;font-size: 0;line-height: 0;position: absolute;left: 33px;top: 11px;}
.number li.u-secondary b s {border-style: solid;_border-style: dashed;border-width: 3px;border-color: transparent;border-left-width: 0;border-left: 3px solid #fff;width: 0;height: 0;font-size: 0;line-height: 0;position: absolute;top: -3px;left: -5px;}
s, strike, del {text-decoration: line-through;}
.search {width: 520px;position: absolute;top: 50px;left: 26px;}
.search .form {float: left;border: 1px solid #ccc;border-right: 0 none;width: 430px;height: 36px;position: relative;}
.search .form input {position: absolute;left: 0;top: 0;z-index: 0;color: #bbb;width: 295px;height: 18px;line-height: 18px;border: 0 none;padding: 9px 130px 9px 5px;font: 12px/150% "\5FAE\8F6F\96C5\9ED1",Arial;outline: 0;}
body, button, input, select, textarea {margin: 0 auto;font: 12px tahoma,arial,'Hiragino Sans GB',\5b8b\4f53,sans-serif;}
.search .form span {height: 36px;position: absolute;top: 0;right: 0;z-index: 10;}
.search .form span a {display: block;float: left;width: 35px;height: 20px;line-height: 20px;background: #eee;color: #666;margin: 8px 7px 0 0;display: inline;text-align: center;cursor: pointer;}
.search a.seaIcon {display: block;float: left;width: 80px;height: 30px;background: #f60;padding-top: 8px;cursor: pointer;}
.search a.seaIcon i {display: block;width: 21px;height: 21px;background-position: 0 0;margin: 0 auto;}
.search a.seaIcon i, .m-menu-all h3 em, .nav-cart-btn i.f-cart-icon, a.u-cart s, .u-mui-tab li.f-cart a.u-menus i {display: block;background-image: url(/statics/templates/quyu-1yygkuan/images/head-2014.png?v=141124);background-repeat: no-repeat;}
.g-nav {width: 1190px;height: 40px;line-height: 40px;margin: 0 auto;background: #f60;color: #fff;}
.g-nav .w1190 {position: relative;z-index: 20;}
.w1190 {clear: both;width: 1190px;margin: 0 auto;}
.m-menu {width: 240px;height: 40px;float: left;background: #2af;position: relative;z-index: 60;}
.m-menu-all {width: 240px;position: absolute;left: 0;top: 0;z-index: 20;}
.m-menu-all h3 a {display: block;width: 222px;height: 40px;padding-left: 18px;position: relative;z-index: 5;color: #fff;}
.m-menu-all h3 em {display: block;width: 16px;height: 10px;background-position: -27px 0;position: absolute;right: 16px;top: 15px;}
.m-all-sort {display: block;}
.m-all-sort {width: 238px;height: 438px;background: #fff;border: 1px solid #21a5f7;border-top: 0 none;position: absolute;left: 0;top: 40px;z-index: 200;overflow: hidden;}
.m-all-sort dl.hover {background: #fffdf0;width: 238px;height: auto;padding: 13px 0 18px;position: relative;z-index: 10;}
.m-all-sort dl {clear: both;border-top: 1px solid #e6e6e6;margin-top: -1px;padding: 13px 0 18px;height: auto;line-height: 25px;overflow: hidden;}
.m-all-sort dl.hover dt a {color: #f60;}
.m-all-sort dl a {margin-left: 15px;color: #666;}
.m-all-sort dt a {font-size: 15px;color: #333;}
.m-all-sort dl {clear: both;border-top: 1px solid #e6e6e6;margin-top: -1px;padding: 13px 0 18px;height: auto;line-height: 18px;overflow: hidden;}
body.home .nav-main li.f-nav-home, body.lottery .nav-main li.f-nav-lottery, body.share .nav-main li.f-nav-share, body.group .nav-main li.f-nav-group, body.cooperation .nav-main li.f-nav-invite, body.helper .nav-main li.f-nav-guide {background: #f04900;line-height: 40px;}
.nav-main li {float: left;}
.nav-main li a {display: block;padding: 0 30px;color: #fff;}
.nav-cart {width: 135px;height: 40px;background: #2af;position: relative;z-index: 20;}
.nav-cart-con {width: 239px;background: #fff;border: 1px solid #2af;position: absolute;right: 0;_right: -1px;z-index: 20;font-size: 12px;display: none;overflow: hidden;}
.nav-cart-con .m-loading-2014 {height: 100px;position: relative;display: none;}
.nav-cart-con .m-loading-2014 em {background: url(/statics/templates/quyu-1yygkuan/images/goods_loading2.gif) no-repeat;width: 50px;height: 50px;position: absolute;top: 25px;left: 94px;}
.nav-car-cartEmpty {text-align: center;font-size: 14px;height: 100px;padding: 30px 0;line-height: 50px;position: relative;display: none;color: #666;text-align: center;}
.nav-car-cartEmpty i {display: block;width: 54px;height: 53px;background-position: 0 -30px;margin: 0 auto;}
.m-ser li .u-icons, .g-special li em, .nav-car-cartEmpty i, .u-cartEmpty i {display: block;background-image: url(/statics/templates/quyu-1yygkuan/images/comm-2014.gif?v=1411112);background-repeat: no-repeat;}
.nav-cart-select {clear: both;width: 239px;overflow: hidden;}
.nav-cart-pay {clear: both;}
.nav-cart-btn i.f-cart-icon {display: block;width: 21px;height: 20px;float: left;background-position: 0 -34px;position: absolute;top: 10px;left: 17px;display: inline;}
.nav-cart-btn a {display: block;color: #fff;height: 40px;line-height: 40px;padding-left: 42px;position: relative;cursor: pointer;}
}

</style>
<body id="loadingPicBlock" class="home" rf="1" >
<SCRIPT language=javascript>
<!--
window.onerror=function(){return true;}
// -->
</SCRIPT>
<style>  
 .g-snow-con {
position: relative;
top: 130px;
z-index: 1001;
margin-bottom: -30px;
}
.g-snow {
background:none;
height: 30px;
_width: 1211px;
_margin: 0 auto;
}
.g-snow2 {
background:none;
height: 30px;
_width: 1012px;
_margin: 0 auto;
display: none;
} 
    .d {
 
 top: 0px;
 margin-top: 0px;
 padding-top:0px;
 margin-right: auto;
 margin-bottom: 0;
 margin-left: auto;
 background-color: #fff;
 background-repeat: no-repeat;
 background-position: center top; 
} </style>

<!--自动置顶导航&GOTOP按钮
<style>
#goTopBtn {position: fixed;line-height:38px;width:38px;bottom:35px;height:38px;cursor:pointer;display:none;
background:url(<?php echo G_GLOBAL_STYLE; ?>/gotop/back_to_top_white.gif);}
</style>
<div id="goTopBtn" style=""></div>
<script type="text/javascript">
  $(window).scroll(function(){
           var sc=$(window).scrollTop();
           var rwidth=$(window).width()
          if(sc>150){
                $("#goTopBtn").css("display","block");
                $("#goTopBtn").css("left",(rwidth-138)+"px")

                $("#fixednav").css("position","fixed");
                $("#fixednav").css("top","0px");
                $("#fixednav").css("left","0px");
                $("#fixednav").css("right","0px");
                $("#fixednav").css("margin-left","auto");
                $("#fixednav").css("margin-right","auto");
                $("#fixednav").css("z-index","999");
                $("#fixednav").css("background","#fff");

                $("#navline").css("position","fixed");
                $("#navline").css("top","53px");
                $("#navline").css("z-index","1000");

                }else{
            $("#goTopBtn").css("display","none");

            $("#fixednav").css("position","relative");
            $("#fixednav").css("z-index","");

            $("#navline").css("position","absolute");
            $("#navline").css("top","195px");
            $("#navline").css("z-index","9");
                }
          })
            
      $("#goTopBtn").click(function(){
          var sc=$(window).scrollTop();
         $('body,html').animate({scrollTop:0},500);
          })        
</script>
自动置顶导航/-->



<div id="divSnow" class="g-snow-con clrfix">
        <div class="g-snow"></div>
        <div class="g-snow2"></div>
    </div><div class="d"><div>
        <!--头部-->
        <!--顶部-->
          <div class="wrapper">
 <div class="g-toolbar">
     <div class="w1190">
         <ul class="fl">
             <li>
                 <div class="u-menu-hd">
                     <a id="addSiteFavorite" href="javascript:;" title="收藏">收藏<?php echo _cfg("web_name_two"); ?></a>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li id="liMobile" class="u-arr">
                 <div class="u-menu-hd">
                     <a href="<?php echo G_WEB_PATH; ?>/?/go/index/app" title="手机版">手机<?php echo _cfg('web_name_two'); ?></a>
                     <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                 </div>
               <div class="u-select u-select-weix">
                     <p>
                         <a href="<?php echo G_WEB_PATH; ?>/?/go/index/app" target="_blank">
                             <img src="/and.png" />
                             下载客户端
                         </a>
                     </p>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li>
                 <div class="u-menu-hd">
                     <a href="<?php echo WEB_PATH; ?>/single/zzgs" target="_blank" title="魔窝网资质公示">魔窝资质</a>
                 </div>
             </li>
                   <li class="f-gap"><s></s></li>
              <li>
                 
             </li>
                      <li>
                 <div class="u-menu-hd">
                     <a href="<?php echo WEB_PATH; ?>/single/renwu" target="_blank" title="任务中心">任务中心</a>
                 </div>
             </li>
              <li class="f-gap"><s></s></li>
             <li>
                 <div class="u-menu-hd">
                    
                 </div>
             </li>
         </ul>
         <ul id="ulTopRight" class="fr">
         <?php if(get_user_arr()): ?>
<li>
<div class="u-menu-hd u-menu-login">
<a class="blue" title="<?php echo get_user_name(get_user_arr(),'username'); ?>" href="<?php echo WEB_PATH; ?>/member/home"><?php echo get_user_name(get_user_arr(),'username'); ?></a>
<a title="退出" href="<?php echo WEB_PATH; ?>/member/user/cook_end">[退出]</a>
</div>
</li>
<li class="f-gap">
<s></s>
</li>

<?php  else: ?>
<li id="logininfo">
<div class="u-menu-hd">
<a title="登录" href="<?php echo WEB_PATH; ?>/login">登录</a>
</div>
</li>
<li class="f-gap">
<s></s>
</li>
<li>
<div class="u-menu-hd">
<a title="注册" href="<?php echo WEB_PATH; ?>/register">注册</a>
</div>
</li>
<li class="f-gap">
<s></s>
</li>
<?php endif; ?>
<li id="liMember" class="u-arr">
<div class="u-menu-hd">
<a href="<?php echo WEB_PATH; ?>/member/home">我的<?php echo _cfg('web_name_two'); ?></a>
                     <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                 </div>
                 <div class="u-select u-select-my">
                     <span><a href="<?php echo WEB_PATH; ?>/member/home/userbuylist" title="购买记录"><?php echo _cfg('web_name_two'); ?>记录</a></span>
                     <span><a href="<?php echo WEB_PATH; ?>/member/home/orderlist" title="获得的商品">获得的商品</a></span>
                     <span><a href="<?php echo WEB_PATH; ?>/member/home/modify" title="个人设置">个人设置</a></span>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li id="liTopUMsg" class="u-arr" style="display: none;">
                 <div class="u-menu-hd">
                     <a href="#" title="消息">消息</a>
                     <h3 style="display: none;"></h3>
                     <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                 </div>
                 <div class="u-select u-select-my">
                     <span><a href="#" title="好友请求">好友请求</a></span>
                     <span><a href="#" title="系统消息">系统消息</a></span>
                     <span><a href="#" title="私信" class="f-msg">私信</a></span>
                 </div>
             </li>
             <li class="f-gap" style="display: none;"><s></s></li>
             <li>
                 <div class="u-menu-hd">
                     <a href="<?php echo WEB_PATH; ?>/member/home/userrecharge" title="帮助">快速冲值</a>
                 </div>
             </li>
             <li>
                 <div class="u-menu-hd">
                     <a href="<?php echo WEB_PATH; ?>/help/1" title="帮助">帮助</a>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li>
                 <div class="u-menu-hd">
                     <a id="btnTopQQ" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo _cfg('qq'); ?>&site=qq&menu=yes" title="在线客服" class="u-service-off u-service"><i></i>在线客服</a>
                 </div>
             </li>
         </ul>
     </div>
 </div>
 
 <!--头部-->
<div id="navline"></div>
<div class="g-header" >
     <div class="w1190">
     
         <div id="topLogoAd" class="logo_1yyg fl">
			  <a class="logo" href="<?php echo G_WEB_PATH; ?>/" title="<?php echo _cfg('web_name'); ?>">
					<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>"/>
				</a>
         </div>
         <div class="search_cart_wrap fr">
             <div class="number">
                 <a href="<?php echo WEB_PATH; ?>/buyrecord" target="_blank">
                      <ul id="ulHTotalBuy">
      <li class="nobor gray6" style="width: 56px;">累计参与</li>

                       <li class="num" style="display: none;"><cite><em>0</em></cite><i></i></li>
                <li class="num" style="display: none;"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="nobor">,</li>
				<li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="nobor">,</li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="nobor gray6 u-secondary">人次<b><s></s></b></li>
			</ul>
                 </a>
             </div>

             <div class="search">
                 <div class="form">
                      <input id="txtSearch" type="text" value=""输入航模试试"" />
                     <span>
                         <a href="<?php echo WEB_PATH; ?>/s_tag/DJI" target="_blank">DJI</a>
                         <a href="<?php echo WEB_PATH; ?>/s_tag/电池" target="_blank">电池</a>
                         <a href="<?php echo WEB_PATH; ?>/s_tag/车模" target="_blank">车模</a>
                     </span>
                 </div>
                 <a id="butSearch" href="javascript:;" class="seaIcon" style="line-height:20px;font-size:18px;text-align:center;deceration:none;color:white;background:#FF4A00;">搜索</a>
             </div>
         </div>
     </div>
 </div>





<!-- 导航 start -->

<!-- 导航装饰条 -->

 <?php 
    if($this->db){
      $cmodel=$this->db;
    }else{
      $cmodel=$mysql_model;
    }

    $two_cate_list = $cmodel->GetList("select cateid,parentid,name from `@#_category` where `model` = '1' and `parentid` = '0' order by `order` DESC");
   ?>
            <div class="yNavIndex" id="fixednav">
                <div class="pullDown">
                    <h2 class="pullDownTitle">
                        <a href="<?php echo WEB_PATH; ?>/goods_list" class="pullDownTitle">
                            所有商品分类
                        </a>
                    </h2>
                    <ul class="pullDownList" style="display:none;">
                    <?php $ln=1; if(is_array($two_cate_list)) foreach($two_cate_list AS $key => $catelist): ?>
                    <?php 
                      //$brand=$this->db->GetList("select id,cateid,name from `@#_brand` where `cateid` LIKE '%$catelist[cateid]%' order by `order` DESC");

                        $cate2 = $cmodel->GetList("select cateid,parentid,name from `@#_category` where `parentid` = '$catelist[cateid]' order by `order` DESC");
                        //echo "select cateid,parentid,name from `@#_category` where `parentid` = '$catelist[cateid]' order by `order` DESC";
                      $i=$key+1;
                     ?>
                        <li class="">
                            <i class="listi<?php echo $i; ?>">
                            </i>
                            <a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $catelist['cateid']; ?>_0_0"><?php echo $catelist['name']; ?></a>
                            <span>
                            </span>
                        </li>
                    <?php  endforeach; $ln++; unset($ln); ?>
					<li class="">
                            <i class="listi8">
                            </i>
                            <a href="<?php echo WEB_PATH; ?>/jf_goods_list">魔窝直购商城</a>
                            <span>
                            </span>
                        </li>
                    </ul>
                    <!-- 下拉详细列表具体分类 -->
                    <div class="yMenuListCon" style="display: none;">
                    <?php $ln=1; if(is_array($two_cate_list)) foreach($two_cate_list AS $key => $catelist): ?>
                      <?php 
                        //$brand=$this->db->GetList("select id,cateid,name from `@#_brand` where `cateid` LIKE '%$catelist[cateid]%' order by `order` DESC");

                        $cate2 = $cmodel->GetList("select cateid,parentid,name from `@#_category` where `parentid` = '$catelist[cateid]' order by `order` DESC");
                        
                        //echo "select cateid,parentid,name from `@#_category` where `parentid` = '$catelist[cateid]' order by `order` DESC";

                        $i=$key+1;
                       ?>



                         <div class="yMenuListConin" style="display: none;">
                            <div class="yMenuLCinList">
                                <h3>
                                    <a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $catelist['cateid']; ?>_0_0" class="yListName"
                                    style="background:url(http://www.yungouworld.com/statics/templates/yungou2/images/yListNameicon.png) no-repeat -25px -<?php echo $i*48+20; ?>px"><?php echo $catelist['name']; ?>
                                    </a>
                                    <a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $catelist['cateid']; ?>_0_0" class="yListMore">
                                        更多 &gt;
                                    </a>
                                </h3>
                                <p>
                                    <?php 
                                      if(is_array($cate2)){
                                         foreach($cate2 AS $bval){
                                     ?>
                                    <a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $bval['cateid']; ?>_0_0">
                                    <?php echo $bval['name']; ?>
                                    </a>
                                    <?php 
                                       }}
                                     ?>
                                </p>
                            </div>
                        </div> 
                      <?php  endforeach; $ln++; unset($ln); ?>
                    </div>
                </div>
                <ul class="yMenuIndex">
                    <ul>
					<div style="display:none;"><span id="sCartTotal"></div> 

                       <li class="f-nav-home"><a href="/">首页</a></li>
                        <?php echo Getheader('index'); ?>
                   </ul>
                    <li class="look_index_nav">
                        <a href="javascript:void(0)" target="_blank" class="look_index_nava">
                            发现
                            <i class="ico-dot">
                            </i>
                        </a>
                        <dl>
                            <dd>
                                <a href="<?php echo WEB_PATH; ?>/group" target="_blank">
                                    云购社区
                                </a>
                            </dd>
                            <dd>
                                <a href="<?php echo WEB_PATH; ?>/single/newbie" target="_blank">
                                    新手指南
                                </a>
                            </dd>
                           <dd>
                                <a href="<?php echo WEB_PATH; ?>/single/zzgs" target="_blank">
                                    魔窝资质
                                </a>
                            </dd>
                            <dd>
                                <a href="http://www.1ytb.cc/" target="_blank">
                                   魔窝论坛
                                </a>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <!-- 导航 end -->

<script>
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

 $(".pullDownTitle").mouseover(function(){
        $(".pullDownList").show();
})
 $(".pullDownTitle").mouseout(function(){
        $(".pullDownList").hide();
})
 $(".pullDownList,.yMenuListCon").mouseover(function(){
        $(".pullDownList").show();
})
 $(".pullDownList,.yMenuListCon").mouseout(function(){
        $(".pullDownList").hide();
})
    
</script>


 <!--所有商品下拉特效-->
   <script language="javascript" type="text/javascript">
     var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
     function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
     Base.getScript('/statics/templates/quyu-1yygkuan/js/Bottom2.js?v=' + GetVerNum());
 </script>
	<script>
		$(document).ready(function(){
				$("#divGoodsSortList").hover(function() {
				$(this).addClass("U-goods-hover").children("div.U-goods-class").show().prev().find("b").addClass("b_Triangle")
				}
				,function() {
					$(this).removeClass("U-goods-hover").children("div.U-goods-class").hide().prev().find("b").removeClass("b_Triangle")
				}
				).find("dl").each(function() {
					$(this).hover(function() {
					$(this).addClass("U-list-hover")
				}
				,function() {
					$(this).removeClass("U-list-hover")
				}
				)});

		});
	</script>
	<script>
$(function(){
	$("#sCart,#liTopCart").hover(
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
	$(".M-my-1yyg").mouseover(function(){
		$(this).addClass("menu-hd-hover");
	});
	$(".M-shop").mouseover(function(){
		$(this).addClass("menu-hd-hover");
	});
	$(".M-my-1yyg").mouseout(function(){
		$(this).removeClass("menu-hd-hover");
	});
	$(".M-shop").mouseout(function(){
		$(this).removeClass("menu-hd-hover");
	});
});
$(function(){
	$("#txtSearch").focus(function(){
		$("#txtSearch").css({background:"#FFFFCC"});
		var va1=$("#txtSearch").val();
		if(va1=='输入“航模”试试'){
			$("#txtSearch").val("");
		}
	});
	$("#txtSearch").blur(function(){
		$("#txtSearch").css({background:"#FFF"});
		var va2=$("#txtSearch").val();
		if(va2==""){
			$("#txtSearch").val('输入“航模”试试');
		}
	});
	$("#butSearch").click(function(){
		window.location.href="<?php echo WEB_PATH; ?>/s_tag/"+$("#txtSearch").val();
	});
});

var getAllNum = function(){
	var a = $("#spBuyCount");
	var b = a.text();
	$.ajax({
		url: "<?php echo WEB_PATH; ?>/api/wrenciajax/get",
		type:"POST",
		success: function(data){
			if(b == data){

			}else{
				a.css({
					color:"white",background:"red"
				}).html(data);
				a.animate({
					opacity:0.1
				}
				,{
					queue:false,duration:1000,complete:function(){
						a.show().css({
							color:"#22AAFF",background:"#F5F5F5",opacity:1
						})
					}
				})

			}
		}
	});
	//setTimeout(getAllNum,3000);
};
getAllNum();

	
																																																																																																																	
 
</script>
 <script language="javascript" type="text/javascript">
     var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
     function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
     Base.getScript('<?php echo G_TEMPLATES_JS; ?>/Bottom.js?v=' + GetVerNum());
 </script>
 <script>
$("body").attr('class','lottery');
</script>

<!--end所有商品下拉特效-->
<link rel="stylesheet" type="text/css" href="/statics/templates/quyu-1yygkuan/css/Home.css?date=20140731">