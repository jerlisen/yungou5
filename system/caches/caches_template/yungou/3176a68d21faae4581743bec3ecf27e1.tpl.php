<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!-- 栏目页面顶部 -->
<header class="header">
  <h1 class="fl"><span><?php echo $webname; ?></span><a style="color:#fff; font-size:16px" href="<?php echo WEB_PATH; ?>/mobile/mobile">一元淘</a></h1>
  <div class="backbtn">
<a href="javascript:;" onclick="history.go(-1)" class="h-count white"></a>
</div>
	    <div class="fr head-r">

            <a href="<?php echo WEB_PATH; ?>/mobile/user/login" class="z-Member"></a>
            <a id="btnCart" href="<?php echo WEB_PATH; ?>/mobile/cart/cartlist" class="z-shop"></a>
        </div>
    </header> 
    <!-- 栏目导航 -->

    <nav class="g-snav u-nav">
	    <div class="g-snav-lst"><a href="<?php echo WEB_PATH; ?>/mobile/mobile/" <?php if($key=="首页" ): ?>class="nav-crt"<?php endif; ?>>首页</a> <?php if($key=="首页" ): ?><s class="z-arrowh"></s><?php endif; ?></div>
		
	    <div class="g-snav-lst"><a href="<?php echo WEB_PATH; ?>/mobile/mobile/glist" <?php if($key=="所有商品" ): ?>class="nav-crt"<?php endif; ?>>所有商品</a><?php if($key=="所有商品" ): ?><s class="z-arrowh"></s><?php endif; ?></div>
		
	    <div class="g-snav-lst"><a href="<?php echo WEB_PATH; ?>/mobile/mobile/lottery" <?php if($key=="最新揭晓" ): ?>class="nav-crt"<?php endif; ?>>最新揭晓</a><?php if($key=="最新揭晓" ): ?><s class="z-arrowh"></s><?php endif; ?></div>
		
	    <div class="g-snav-lst"><a href="<?php echo WEB_PATH; ?>/mobile/shaidan/" <?php if($key=="晒单" ): ?>class="nav-crt"<?php endif; ?>>最新晒单</a><?php if($key=="晒单" ): ?><s class="z-arrowh"></s><?php endif; ?></div>
		
	       <div class="g-snav-lst"><a href="<?php echo WEB_PATH; ?>/mobile/home/userrecharge" <?php if($key=="充值" ): ?>class="nav-crt"<?php endif; ?>>快速充值</a><?php if($key=="充值" ): ?><s class="z-arrowh"></s><?php endif; ?></div>
    </nav>
    