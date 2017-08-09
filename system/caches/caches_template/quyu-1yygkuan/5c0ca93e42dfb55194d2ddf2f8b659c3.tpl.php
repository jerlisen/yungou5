<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=8" /> 
    <link rel="shortcut icon" href=" /favicon.ico" /> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?php if(isset($keywords)): ?><?php echo $keywords; ?><?php  else: ?><?php echo _cfg("web_key"); ?><?php endif; ?>" />
    <meta name="description" content="<?php if(isset($description)): ?><?php echo $description; ?><?php  else: ?><?php echo _cfg("web_des"); ?><?php endif; ?>" />
    <title><?php if(isset($title)): ?><?php echo $title; ?><?php  else: ?><?php echo _cfg("web_name"); ?><?php endif; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/header.css" />
    <link href="<?php echo G_TEMPLATES_STYLE; ?>/css/register.css" rel="stylesheet" type="text/css" />
   <!--[if IE 6]>
       <script type="text/javascript" src="http://skin.1ytb.cc/js/iepng.js"></script>
       <script type="text/javascript">
       EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.F_goods_rq, .F_goods_xp, .F_goods_tj,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s');
       </script>
   <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/index2.css?date=20140731">
     <link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/Comm1.css?date=20140731">
    <script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/global/js/jquery-1.8.3.min.js"></script>

<!--新导航-->
<link rel="stylesheet" type="text/css" href="<?php echo G_GLOBAL_STYLE; ?>/newnav/mowo.css">
<link rel="stylesheet" type="text/css" href="<?php echo G_GLOBAL_STYLE; ?>/newnav/Comm.css">
<link rel="stylesheet" type="text/css" href="<?php echo G_GLOBAL_STYLE; ?>/newnav/register.css">
<link rel="stylesheet" type="text/css" href="<?php echo G_GLOBAL_STYLE; ?>/newnav/index_oo.css">
<script type="text/javascript" async="" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/ag.js"></script>
<script async="" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/analytics.js"></script>
<script src="<?php echo G_GLOBAL_STYLE; ?>/newnav/hm.js"></script>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/index.js"></script>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/jquery.lazyload.js"></script>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/mowo.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/wpa.php"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cookie.js"></script>
</head>
<body>
<style>
.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab li.f-cart a.u-menus i,.nav-main li.f-nav-thanks span,.u-shortcut .u-float-list i,.cartEmpty i,.g-toolbar li.u-arr .u-menu-hd{
	display:block;
	background-image:url(../images/head-2014.png?v=0415);
	background-repeat:no-repeat;
}
 </style>

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
                }else{
            $("#goTopBtn").css("display","none");
            $("#fixednav").css("position","relative");
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
    <div class="wrapper">
        <!--头部-->

<!-- 挂牌广告开始 -->
<div id="div2" style="display: none;">
    <a href="#" target="_blank"><img id="imgdiv" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/mowo.jpg"></a>
</div>
<script>
    var max_width=$(document).width();
    $(function () {
      function initss(){
        setTimeout('$("#div2").slideDown()',3000);
        setTimeout('$("#div2").slideUp(3000)',7000);
        $("#div2 img").each(function(){
          var img = new Image();
          img.src =$('#imgdiv').attr("src") ;
          var w = img.width;
          var h = img.height;
            if(w > max_width) {
                var ratio=max_width/w;
                $(this).width(max_width);
                var imgheight=h*ratio;          
                $(this).height(imgheight);
            }
        });
          $("#div2").click(function () {
              $(this).slideUp(3000);
          });
      }

      if(!getCookie("myss")){
        initss();
        setCookie('myss','111','h1');
        }
    });
</script>
<!-- 挂牌广告结束 -->
<!--顶部悬浮导航-->

<!--顶部悬浮导航/-->
        <!--顶部-->
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
                     <a href="<?php echo WEB_PATH; ?>/group_qq" target="_blank" title="官方QQ群">官方QQ群</a>
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
 </div><!--头部-->
 <div class="g-header" >
     <div class="w1190">
     
         <div class="logo_1yyg fl">
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
                      <input id="txtSearch" type="text" value=""输入手机试试"" />
                     <span>
                         <a href="<?php echo WEB_PATH; ?>/s_tag/苹果" target="_blank">苹果</a>
                         <a href="<?php echo WEB_PATH; ?>/s_tag/电脑" target="_blank">电脑</a>
                         <a href="<?php echo WEB_PATH; ?>/s_tag/手机" target="_blank">手机</a>
                     </span>
                 </div>
                 <a id="butSearch" href="javascript:;" class="seaIcon" style="line-height:20px;font-size:18px;text-align:center;deceration:none;color:white;background:#FF4A00;">搜索</a>
             </div>
         </div>
     </div>
     <div id="navline"></div>
 </div>

<!-- 导航 start -->
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
                    <ul class="pullDownList" style="display:block;">
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
                            <a href="<?php echo WEB_PATH; ?>/jf_goods_list">直购商城</a>
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
                                    淘吧社区
                                </a>
                            </dd>
                            <dd>
                                <a href="<?php echo WEB_PATH; ?>/single/newbie" target="_blank">
                                    新手指南
                                </a>
                            </dd>
                           
                        </dl>
                    </li>
                </ul>
            </div>
            <!-- 导航 end -->





<script>
            function delheader(id) {
                var Cartlist = $.cookie('Cartlist');
                var info = $.evalJSON(Cartlist);
                var num = $("#sCartTotal2").html() - 1;
                var sum = $("#sCartTotalM").html();
                info['MoenyCount'] = sum - info[id]['money'] * info[id]['num'];

                delete info[id];
                //$.cookie('Cartlist','',{path:'/'});
                $.cookie('Cartlist', $.toJSON(info), {
                    expires: 30,
                    path: '/'
                });
                $("#sCartTotalM").html(info['MoenyCount']);
                $('#sCartTotal2').html(num);
                $('#sCartTotal').text(num);
                $('#btnMyCart em').text(num);
                $("#mycartcur" + id).remove();
            }
            $(function() {
                $(".h_1yyg").mouseover(function() {
                    $(".h_1yyg_eject").show();
                });
                $(".h_1yyg").mouseout(function() {
                    $(".h_1yyg_eject").hide();
                });
                $(".h_news").mouseover(function() {
                    $(".h_news_down").show();
                });
                $(".h_news").mouseout(function() {
                    $(".h_news_down").hide();
                });
            });
			
	
																																																																																																																											
 
        </script>
<!-- 导航开始-->
        <div class="yBanner">

            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(85, 169, 255);">
                <div class="yBannerListIn">
                    <a href="?/goods/2209" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/26894807158213.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword1.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="?/goods/2201" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/48856548325243.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="?/goods/2333" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/50965198325292.jpg">
                        </a>
                    </div>
                </div>
            </div>

            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(53, 54, 49);">
                <div class="yBannerListIn">
                    <a href="?/goods/1672" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/78194325316109.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword2.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="?/goods/2080">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/75984041325391.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="?/goods/1438" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/39096059325454.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: block; background: rgb(19, 108, 198);">
                <div class="yBannerListIn">
                    <a href="?/goods/2282" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/87562991158387.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword3.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="?/goods/2391">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/41404456325692.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="?/goods/2318" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/75908314325753.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(229, 215, 93);">
                <div class="yBannerListIn">
                    <a href="?/goods/2406" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/29244643158510.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword4.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="?/goods/2370">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/33304559326145.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="?/goods/2307" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/92906709326299.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(129, 223, 225);">
                <div class="yBannerListIn">
                    <a href="?/goods/2321" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/19415379159563.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword5.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="?/goods/2321">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/40675673326832.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="?/goods/2260" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/26563635326891.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(60, 124, 234);">
                <div class="yBannerListIn">
                    <a href="?/goods/2316" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/54694884159697.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword6.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="?/goods/2181">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/32867424857794.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="?/goods/2322" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/24421870164827.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(246, 58, 59);">
                <div class="yBannerListIn">
                    <a href="?/register" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/16234858159837.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword7.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="?/goods/2414">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/17011445904788.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="?/goods_list/131_0_0" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/21459137165323.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(246, 58, 59);">
                <div class="yBannerListIn">
                    <a href="?/register" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/82506764159978.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword8.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="?/goods/2414">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/40806048165567.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="?/goods_list/131_0_0" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/70822734165505.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(224, 70, 72);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/30791556659384.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword9.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/56591094107643.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/67960452107695.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(247, 170, 62);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/25849099160386.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword10.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/38655367908227.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/15181703909275.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(212, 12, 84);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/88742630160606.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword11.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/26802099892667.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/19936400892247.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList" style="display: none; background: rgb(214, 214, 216);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/80401650659594.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword12.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/26915107891532.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/82460701891580.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList" style="display: none; background: rgb(122, 255, 234);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/76671891160912.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword13.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/58591232874884.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/62235729893318.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(236, 65, 57);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/85751683161100.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword14.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/30369863166964.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/48410684167012.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList" style="display: none; background: rgb(5, 5, 5);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/17013426165330.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword15.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/45807868891263.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/96694456167508.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <script style="display: none;">
                $(function() {
                    $($(".pullDownList li")[0]).addClass("menuliselected");
                    $($(".yBannerList")[0]).addClass("ybannerExposure");
                    $($(".yBannerList")[0]).show().siblings().hide();
                })
            </script>

        </div>
<!-- banner end -->



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
		if(va1=='输入"汽车"试试'){
			$("#txtSearch").val("");
		}
	});
	$("#txtSearch").blur(function(){
		$("#txtSearch").css({background:"#FFF"});
		var va2=$("#txtSearch").val();
		if(va2==""){
			$("#txtSearch").val('输入"汽车"试试');
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
<!--end所有商品下拉特效-->
