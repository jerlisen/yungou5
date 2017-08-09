<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/layout-home.css"/>
<br/>
<div class="c_person_center">
		
<style>
	#memberSign{cursor:pointer;}
	.c_error{border: none;position: absolute;top: 2px;left: 10px;height: 36px;background-color: #fff;
		min-width: 124px;font-size: 12px;color: #ff4c4c;line-height: 38px;display: none;padding-left: 20px;
		background: #fff url(/static/img/front/cloud_global/error_icon.png) no-repeat 0 center;
	}
	.c_valid_error{ min-width:100px;}
</style>
			<div style="background: transparent url(../../../../../images/morning.jpg) no-repeat scroll 0% 0%;" class="c_person_info">
			<div class="c_info_left">
				<div class="c_person_img">
					<a href="<?php echo WEB_PATH; ?>/member/home/userphoto"><img id="alterFace" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_img('160160'); ?>" alt=""></a>
				</div>
				<div class="c_person_greet">
					<p class="c_greet"><span class="c_time_period">Hi！</span>，<b style="color:#06F;"><?php echo $member['username']; ?></b>一元淘吧有梦想就要惊喜！</p>
					<ul class="c_detail_info">
								<li class="account-money">
				<em class = "gray02">经验值：<?php echo $member['jingyan']; ?></em> 
				<span class="class-icon0<?php echo $dengji_1['groupid']; ?> gray01"><s></s><?php echo $dengji_1['name']; ?></span>
				<?php if($dengji_2): ?>
					<span class = "gray02">（还差<?php echo $dengji_x; ?>经验值升级到<?php echo $dengji_2['name']; ?>）</span>
				<?php  else: ?>
					<span class = "gray02">（还差<?php echo $dengji_x; ?>经验值升级到最高等级）</span>
				<?php endif; ?>
			</li>
					
					
					<?php if($member['username']==null): ?>
					<li>昵称：<div class="c_already_user">
									<span id="nicknamemsg" title="未设置">未设置</span>&nbsp;
									<a href="<?php echo WEB_PATH; ?>/member/home/modify" class="c_user_update">[马上设置]</a>
								</div>
						</li>
						<?php  else: ?>
						<li>昵称：<div class="c_already_user">
									<span id="nicknamemsg" title="<?php echo $member['username']; ?>"><?php echo $member['username']; ?></span>&nbsp;
									<a href="<?php echo WEB_PATH; ?>/member/home/modify" class="c_user_update">[修改]</a>
								</div>
						</li>
						<?php endif; ?>

						<!--手机绑定-->
						<?php if($member['mobile']!=null): ?>
						<li>手机：<span><?php echo $member['mobile']; ?></span>&nbsp;
								<a href="<?php echo WEB_PATH; ?>/member/home/modify" class="c_tel_update">[修改]</a>
						</li>		
						<?php  else: ?>
						<li>手机：<span>未绑定</span>&nbsp;
								<a href="<?php echo WEB_PATH; ?>/member/home/modify" class="c_tel_update">[马上绑定]</a>
						</li>	
						<?php endif; ?>

						<!-- 绑定邮箱 -->
						<?php if($member['email']!=null): ?>
						<li>邮箱：<span><?php echo $member['email']; ?></span>&nbsp;<a href="<?php echo WEB_PATH; ?>/member/home/modify" class="c_mail_update">[修改]</a></li>
						<?php  else: ?>
						<li>邮箱：<span>未绑定</span>&nbsp;<a href="<?php echo WEB_PATH; ?>/member/home/modify" class="c_mail_update">[马上绑定]</a></li>
						<?php endif; ?>

						
						<li>
							<form class="registerform" method="post" action="<?php echo WEB_PATH; ?>/member/home/qiandao">

							<a class="c_quick_recharge c_quick_sign" id="memberSign" style="position:relative;top:6px;width: auto;"><input name="submit" type="submit" class="c_quick_recharge c_quick_sign" style="position: relative; top: -4px; width: auto; height: 26px; font-family: 微软雅黑;" value="签到"></a>
							
							</form>
						</li>
					</ul>
				</div>
			</div>
			<div class="c_info_right"><a href="<?php echo WEB_PATH; ?>/member/home/userrecharge" class="c_quick_recharge">立即充值</a></div>
		</div>
		<div class="c_person_detail">
			<ul class="c_account_left">
				<li>账户余额<span class="c_account_icon"></span></li>
				<li id="rechargeMoney"><?php echo uidcookie('money'); ?>&nbsp元</li>
				
			</ul>
			<div class="c_account_center">
				<ul>
					<li>可用余额：<span id="jsd_shop_card"><?php echo uidcookie('money'); ?></span>&nbsp元</li>
					<li>可用淘豆：<span id="redCount"><?php echo $member['score']; ?></span>&nbsp个</li>
				</ul>
				<ul>
					<li>账号经验：<span id="use_score"><?php echo $member['jingyan']; ?></span></li>
					<li>佣金：<a href="<?php echo WEB_PATH; ?>/member/home/commissions">佣金明细</a></li>
				</ul>
			</div>
			<div class="c_account_right">
				<div class="c_info_right"><a href="<?php echo WEB_PATH; ?>/member/home/userrecharge" target="_blank" class="c_quick_recharge">立即充值</a></div>
			</div>
		</div>