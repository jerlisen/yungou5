<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>

<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/Home.css"/>

<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.flexslider-min.js"></script>

<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/changimages.js"></script>



<style type="text/css">

.demo{ width:740px; height:202px; position:relative; overflow:hidden; padding:0px;}

.num{ position:absolute;right:20px; top:170px; z-index:10;}

.num a{background:#fff; color:#d22a3a; border:1px solid #ccc; width:16px; height:16px; display:inline-block; text-align:center; line-height:16px; margin:0 3px; cursor:pointer;}

.num a.cur{ background:#d22a3a;color:#fff;}

.demo ul{ position:relative; z-index:5;}

.demo ul li{ position:absolute; display:none;}

</style>

<div class="g-body">

<div class="m-index">

<div class="g-wrap g-body-hd f-clear">

	<div class="g-main">

		<div class="g-main-l">

			<div class="m-index-duobaoIntro">

				<h4>规则说明</h4>

				<ul class="m-index-duobaoIntro-list">

				<li><span class="index">1</span>取该商品最后购买时间前网站所有商品的最后100条购买时间记录 </li>

				<li><span class="index">2</span>每个时间记录按时、分、秒、毫秒依次排列取数值</li>

				<li><span class="index">3</span>将这100个数值之和除以该商品总参与人次后取余数，余数加上10000001 即为“幸运1元淘码”。</li>
				</ul>

			</div>

		</div>

		<div class="g-main-m">

			<div class="flexslider">

					<?php $slides=$this->DB()->GetList("select * from `@#_slide` where 1",array("type"=>1,"key"=>'',"cache"=>0)); ?>

					<ul class="slides">		

					<?php $ln=1;if(is_array($slides)) foreach($slides AS $slide): ?>

					<?php if($ln == 1): ?>

					<li style="display:list-item;"><a href="<?php echo $slide['link']; ?>" target="_blank"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $slide['img']; ?>"></a></li>

					<?php  else: ?>

					<li style="display:none;"><a href="<?php echo $slide['link']; ?>" target="_blank"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $slide['img']; ?>"></a></li>

					<?php endif; ?>

					<?php  endforeach; $ln++; unset($ln); ?>

					</ul>

					<script type="text/javascript">

					$(document).ready(function(){

						$('.flexslider').flexslider({

							directionNav: true,

							pauseOnAction: false

						});

					});

					</script>

			</div>

			<div class="w-silde m-index-newReveal">

				<h4>&nbsp; &nbsp;最新揭晓</h4>

				<div class="m-results-leastRemain-title-ft"></div>

				<div class="w-slide-wrap">

					<ul id="ulNewAwary" class="w-silde-wrap-list" style="width: 4380px;">			 

					<?php $ln=1;if(is_array($shopqishu)) foreach($shopqishu AS $qishu): ?>

                    <?php 

                    	$qishu['q_user'] = unserialize($qishu['q_user']);

                     ?>					

						<li>

							<div class="w-goods-newReveal">

								<i title="最新揭晓" class="ico ico-label ico-label-newReveal">&nbsp;</i>

								<p class="w-goods-title"><a href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $qishu['id']; ?>.html" target="_blank" class="name">(第<?php echo $qishu['qishu']; ?>期)<?php echo $qishu['title']; ?></a> </p>

								<div class="w-goods-pic"><a href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $qishu['id']; ?>.html" target="_blank" class="pic"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $qishu['thumb']; ?>" width="105px" height="105px" /></a></div>

								<p class="w-goods-price">总需1元淘：<?php echo $qishu['zongrenshu']; ?>人次</p>

								<div class="w-goods-record">

									<p class="w-goods-owner f-txtabb">获得者：<a rel="nofollow" class="blue" href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($qishu['q_uid']); ?>.html" target="_blank"><b><?php echo get_user_name($qishu['q_user']); ?></b></a></p>

									<p>本次1元淘：<?php echo get_user_goods_num($qishu['q_uid'],$qishu['id']); ?>次</p>

									<p>幸运号码：<?php echo $qishu['q_user_code']; ?></p>

									<p class="w-goods-ratio">回报率：<b class="txt-red"><?php echo (int)$qishu['zongrenshu']/(int)get_user_goods_num($qishu['q_uid'],$qishu['id']); ?></b> 倍</p>

								</div>									

						</div>

						</li>	

					<?php  endforeach; $ln++; unset($ln); ?>						

					</ul>

					<!------>

						<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/GLotteryFun.js"></script>

						<script type="text/javascript">

							$(document).ready(function(){gg_show_time_init("ulNewAwary",'<?php echo WEB_PATH; ?>',0);});					

						</script>  

					<!------>



				</div>

			</div>

		</div>

	</div>

	<div class="g-side">

		<div class="m-index-recommend">

		 <!-- 首页右边推荐奖品 start-->

			<?php if($new_shop): ?>

			<h4></h4>

			<i title="1元淘推荐" class="ico ico-label ico-label-recommend">&nbsp;</i>

			<div class="w-goods w-goods-ing">

				

				<div class="w-goods-pic">

					<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $new_shop['id']; ?>.html" target="_blank" title="<?php echo $new_shop['title']; ?>">

					<img width="160px" height="150px" alt="<?php echo $new_shop['title']; ?>" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $new_shop['thumb']; ?>"></a>

				</div>

				<p class="w-goods-title f-txtabb"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $new_shop['id']; ?>.html" target="_blank" title="<?php echo $new_shop['title']; ?> ">

                   <!-- (第<?php echo $renqi['qishu']; ?>期)--><?php echo $new_shop['title']; ?></a></p>

				<p class="w-goods-price">总需：<?php echo $new_shop['money']; ?></p>

				<div class="Progress-bar" style="">

					<p class="w-progressBar-wrap" title="已完成<?php echo percent($new_shop['canyurenshu'],$new_shop['zongrenshu']); ?>"><span  class="w-progressBar-bar" style="width:<?php echo width($new_shop['canyurenshu'],$new_shop['zongrenshu'],205); ?>px;"></span></p>

					<ul class="Pro-bar-li">

						<li class="P-bar01"><em><?php echo $new_shop['canyurenshu']; ?></em>已参与人次</li>

						<li class="P-bar02"><em><?php echo $new_shop['zongrenshu']; ?></em>总需人次</li>

						<li class="P-bar03"><em><?php echo $new_shop['zongrenshu']-$new_shop['canyurenshu']; ?></em>剩余人次</li>

					</ul>

				</div>

				<div class="w-goods-opr">

					<a class="w-button w-button-main w-button-l" style="width:96px;" href="<?php echo WEB_PATH; ?>/goods/<?php echo $new_shop['id']; ?>.html" target="_blank" class="go_buy">立即1元淘</a>

				</div>

			</div>

		  <?php endif; ?>

    <!-- 首页右边推荐奖品 end-->

		</div>

		<div class="w-slide m-index-newGoods">

			<i title="新品推荐" class="ico ico-label ico-label-newRecommend">&nbsp;</i>

			<div class="wait_lottery" id="divLottery">

			<!--<a href="<?php echo G_WEB_PATH; ?>/goods/16930" target="_blank"><img src="<?php echo G_UPLOAD_PATH; ?>/banner/20130510162727797.jpg" width="230" height="200"></a>-->

			<div id="imgADPlayer01"></div>

			<script type="text/javascript">

				PImgPlayer.addItem("iPhone6s Plus 5.5英寸", "<?php echo G_WEB_PATH; ?>/goods_list/137_0_0.html", "http://www.1ytb.cc/single/iphone6s.jpg");

				PImgPlayer.addItem("iPhone6s Plus 5.5英寸", "<?php echo G_WEB_PATH; ?>/goods_list/137_0_0.html", "http://www.1ytb.cc/single/iphone6s.jpg");

				PImgPlayer.addItem("iPhone6s Plus 5.5英寸", "<?php echo G_WEB_PATH; ?>/goods_list/137_0_0.html", "http://www.1ytb.cc/single/iphone6s.jpg");

				PImgPlayer.addItem("iPhone6s Plus 5.5英寸", "<?php echo G_WEB_PATH; ?>/goods_list/137_0_0.html", "http://www.1ytb.cc/single/iphone6s.jpg");

				PImgPlayer.addItem("iPhone6s Plus 5.5英寸", "<?php echo G_WEB_PATH; ?>/goods_list/137_0_0.html", "http://www.1ytb.cc/single/iphone6s.jpg");

				PImgPlayer.init("imgADPlayer01", 230, 200);   

			</script>

		</div>

		</div> 

	</div>

</div>



<div class="g-wrap g-body-bd f-clear">

	<div class="g-main">

		<div class="m-index-mod m-index-goods-hotest">

			<div class="w-hd">

				<h3 class="w-hd-title">人气商品</h3>

				<a class="w-hd-more" href="<?php echo WEB_PATH; ?>/goods_list/index.html">更多商品,点击查看&gt;&gt;</a>

			</div>

			<div class="m-index-mod-bd">	               

			<div class="hot">

				<ul id="hostGoodsItems" class="hot-list">				

					<?php $ln=1;if(is_array($shoplistrenqi)) foreach($shoplistrenqi AS $renqi): ?>

					<li class="list-block">

						<div class="pic"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>.html" target="_blank" title="<?php echo $renqi['title']; ?>">					

						<?php if(isset($renqi['t_max_qishu'])): ?>							

								<i class="goods_rq"></i>							

						<?php endif; ?>					

						<?php if(isset($renqi['t_new_goods'])): ?>						

								<i class="goods_xp"></i>					

						<?php endif; ?>

						<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $renqi['thumb']; ?>" alt="<?php echo $renqi['title']; ?>"></a></div>

						<p class="name"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>.html" target="_blank" title="<?php echo $renqi['title']; ?>"><!-- (第<?php echo $renqi['qishu']; ?>期)--><?php echo $renqi['title']; ?></a></p>

						<p class="money">价值：<span class="rmb"><?php echo $renqi['money']; ?></span></p>

						<div class="Progress-bar" style="">

							<p class="w-progressBar-wrap" title="已完成<?php echo percent($renqi['canyurenshu'],$renqi['zongrenshu']); ?>"><span class="w-progressBar-bar" style="width:<?php echo width($renqi['canyurenshu'],$renqi['zongrenshu'],221); ?>px;"></span></p>

							<ul class="Pro-bar-li">

								<li class="P-bar01"><em><?php echo $renqi['canyurenshu']; ?></em>已参与人次</li>

								<li class="P-bar02"><em><?php echo $renqi['zongrenshu']; ?></em>总需人次</li>

								<li class="P-bar03"><em><?php echo $renqi['zongrenshu']-$renqi['canyurenshu']; ?></em>剩余人次</li>

							</ul>

						</div>

						<div class="w-goods-opr"><a class="w-button w-button-main w-button-l" style="width:96px;" href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>.html" target="_blank" class="shop_but" title="立即1元淘">立即1元淘</a></div>

					</li>

					<?php  endforeach; $ln++; unset($ln); ?>

				</ul>

			</div>

			</div>

		</div>

		<div class="m-index-mod m-index-goods-others">

			<div class="w-hd">

				<h3 class="w-hd-title">最新上架</h3>

				<a class="w-hd-more" href="<?php echo WEB_PATH; ?>/goods_list">更多商品,点击查看&gt;&gt;</a>

			</div>

			<div class="m-index-mod-bd">

				<ul id="readyLotteryItems" class="w-goodsList f-clear">

					<?php $ln=1;if(is_array($shoplist)) foreach($shoplist AS $shop): ?>

					<li class="w-goodsList-item">

						<div class="w-goods w-goods-ing">

							<div class="w-goods-pic"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $shop['id']; ?>.html" target="_blank" title="<?php echo $shop['title']; ?>"><img width="185px" height="185px" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $shop['thumb']; ?>" alt="<?php echo $shop['title']; ?>"></a></div>

							<p class="w-goods-title f-txtabb"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $shop['id']; ?>.html" target="_blank" title="<?php echo $shop['title']; ?>"><!-- (第<?php echo $renqi['qishu']; ?>期)--><?php echo $shop['title']; ?></a></p>

							<p class="money">价值：<span class="rmb"><?php echo $shop['money']; ?></span></p>

							<div class="Progress-bar" style="">

								<p  class="w-progressBar-wrap" title="已完成<?php echo percent($shop['canyurenshu'],$shop['zongrenshu']); ?>"><span  class="w-progressBar-bar"  style="width:<?php echo width($shop['canyurenshu'],$shop['zongrenshu'],221); ?>px;"></span></p>

								<ul class="Pro-bar-li">

									<li class="P-bar01"><em><?php echo $shop['canyurenshu']; ?></em>已参与人次</li>

									<li class="P-bar02"><em><?php echo $shop['zongrenshu']; ?></em>总需人次</li>

									<li class="P-bar03"><em><?php echo $shop['zongrenshu']-$shop['canyurenshu']; ?></em>剩余人次</li>

								</ul>

							</div>

							<div class="w-goods-opr"><a class="w-button w-button-main w-button-l" style="width:96px;" href="<?php echo WEB_PATH; ?>/goods/<?php echo $shop['id']; ?>.html" target="_blank" class="shop_but" title="立即1元淘">立即1元淘</a></div>

						</div>

					</li>

					<?php  endforeach; $ln++; unset($ln); ?>			

				</ul>

			</div>

		</div> 

	</div>

	<div class="g-side">

		<div class="m-index-mod m-index-record-newest">

			<div class="m-index-mod-hd">

				<h3>最新参与</h3>

			</div>

			<div class="m-index-mod-bd">

					<ul id="buyList" class="w-record-newest-list">

					<?php $ln=1;if(is_array($go_record)) foreach($go_record AS $gorecord): ?>

					<li class="w-record-newest-item">

						<div class="w-record-goods">

							<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $gorecord['shopid']; ?>.html"  target="_blank">

							<img width="64px" height="58px" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo shopimg($gorecord['shopid']); ?>"></a>

						</div>

						<div class="w-record-detail">

							<p class="w-record-intro"><a class="w-record-user" title="<?php echo get_user_name($gorecord); ?>ID(<?php echo idjia($gorecord['uid']); ?>)" href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($gorecord['uid']); ?>.html"><?php echo get_user_name($gorecord); ?></a>&nbsp;&nbsp;1元淘了</p>

							<p class="w-record-title"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $gorecord['shopid']; ?>.html" class="name" target="_blank"><?php echo $gorecord['shopname']; ?></a></p>

						</div>

					</li>

					<?php  endforeach; $ln++; unset($ln); ?>

				</ul>

			</div>

			<div class="m-index-mod-ft">看看谁的狗屎运最好！</div>

		</div>

		<div class="m-index-mod m-index-record-nb">

			<div class="m-index-mod-hd">

				<h3>人气排行</h3>

			</div>

			<div class="m-index-mod-bd">

					<ul id="buyList" class="w-record-nb-list" >						

					<?php $ln=1;if(is_array($shoplistrenqi)) foreach($shoplistrenqi AS $list): ?>

					<li class="w-record-nb-item">

						<div class="w-record-avatar">

							<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $list['id']; ?>.html" target="_blank">

							<?php if(shopimg($list['id'])!=''): ?>

								<img width="64px" height="58px" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo shopimg($list['id']); ?>">

							<?php  else: ?>

								<img width="64px" height="58px" src="<?php echo G_UPLOAD_PATH; ?>/photo/member.jpg_30.jpg">

							<?php endif; ?>

							</a>

						</div>

						<div class="w-record-detail">

							<p class="w-record-intro"><a class="w-record-user f-txtabb"  href="<?php echo WEB_PATH; ?>/goods/<?php echo $list['id']; ?>.html" target="_blank"><?php echo $list['title']; ?></a></p>

							<p><i>剩余人次</i><em><?php echo $list['zongrenshu']-$list['canyurenshu']; ?></em></p>

						</div>

						

					</li>

					<?php  endforeach; $ln++; unset($ln); ?>

				</ul>

			</div>

			<div class="m-index-mod-ft">&nbsp;</div>

		</div>

	</div>

</div>

<div class="g-wrap g-body-ft f-clear">
  <!--晒单分享开始-->
<div class="m-index-mod m-index-share">

	<div class="w-hd">

		<h3 class="w-hd-title">晒单分享</h3>

		<a class="w-hd-more" href="<?php echo WEB_PATH; ?>/go/shaidan/.html">更多分享，点击查看>></a>

	</div>

	<div class="m-index-mod-bd">

		<ul class="m-index-share-list f-clear" style="margin-top: 0px;" id="buyList1">

			<?php $ln=1;if(is_array($shaidan)) foreach($shaidan AS $sdfx): ?>

			<li class="m-index-share-item m-index-share-item-left">

				<a class="m-index-share-picLink" href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sdfx['sd_id']; ?>.html" target="_blank">

					<img width="110" class="m-index-share-pic" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $sdfx['sd_thumbs']; ?>" />

				</a>

				<div class="m-index-share-wrap">

					<i class="ico ico-quote ico-quote-former">&nbsp;</i>

					<p class="txt">

						<a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sdfx['sd_id']; ?>.html" target="_blank">

							<span title="<?php echo $sdfx['sd_title']; ?>">【<?php echo _strcut($sdfx['sd_title'],30); ?>】</span></a>

				  <div class="pclass"><?php echo _strcut($sdfx['sd_content'],100); ?>

				  </div>

					</p>

					<p class="author">

						--<a title="Lin(ID:<?php echo $sdfx['sd_userid']; ?>)" href="<?php echo WEB_PATH; ?>/uname/<?php echo $sdfx['sd_userid']; ?>.html" target="_blank">

						<?php echo get_user_name($sdfx['sd_userid']); ?>&nbsp;&nbsp;<?php echo date("Y-m-d",$sdfx['sd_time']); ?>

						</a>

					</p>

					<i class="ico ico-quote ico-quote-after">&nbsp;</i>

				</div>

			</li>

			<?php  endforeach; $ln++; unset($ln); ?>

		</ul>

	</div>

</div>

<!---news--->

<!---news--->
</div>
<?php include templates("index","footer");?>

<script type="text/javascript">

    $(function(){

		$(".m-catlog-wrap").show();

	    var _BuyList=$("#buyList");

        var Trundle = function () {

            _BuyList.prepend(_BuyList.find("li:last")).css('marginTop', '-85px');

            _BuyList.animate({ 'marginTop': '0px' }, 800);

        }

        var setTrundle = setInterval(Trundle, 3000);

        _BuyList.hover(function () {

            clearInterval(setTrundle);

            setTrundle = null;

        },function () {

            setTrundle = setInterval(Trundle, 3000);

        });

    });

	    $(function(){

	    var _BuyList=$("#buyList1");

        var Trundle = function () {

            _BuyList.prepend(_BuyList.find("li:last")).css('marginTop', '-85px');

            _BuyList.animate({ 'marginTop': '0px' }, 1500);

        }

        var setTrundle = setInterval(Trundle, 5000);

        _BuyList.hover(function () {

            clearInterval(setTrundle);

            setTrundle = null;

        },function () {

            setTrundle = setInterval(Trundle, 5000);

        });

    });

    </script>

