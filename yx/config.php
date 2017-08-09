<?php
/**
 *	致命弱点小游戏
 *
 *  @version 	v1.0
 *  @date 		2015-11-12
 *
 */


//游戏列表
$gameList = array(
	
	//你的身体构造是？
	'shenti' => array(
		//游戏标题
		'title' => '你的身体构造是？',
		//描述
		'desc'	=> '快来测一测你的身体是怎样的构造！',
		//logo图片地址
		'logo'	=> 'images/shenti.jpg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s的身体构造竟然是： %s',
		//结果页提示
		'resultDesc' => '%s的身体构造竟然是',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '',
					'more' => '头 -铁头功<br>嘴- 狮吼功<br>心 -玉女心经<br>手 -葵花点穴手<br>脚 -佛山无影脚',
					'pic'	=> 'images/st_1.jpg',
				),

				array(
					'title' => '',
					'more' => '头 - 《最强大脑》<br>嘴 - 《中国好声音》<br>心 - 《快乐大本营》<br>手 - 《我是歌手》<br>脚 - 《奔跑吧！兄弟》',
					'pic'	=> 'images/st_2.jpg',
				),
				array(
					'title' => '',
					'more' => '头 -X教授<br>眼 -镭射眼<br>心 - 魔形女<br>手 -金刚狼<br>足 - 快银',
					'pic'	=> 'images/st_3.jpg',
				),
				array(
					'title' => '',
					'more' => '脑- 伴侣基本靠想<br>嘴- 通讯基本靠吼<br>心- 取暖基本靠抖<br>手- 夜生活基本靠手<br>腿- 交通基本靠走',
					'pic'	=> 'images/st_4.jpg',
				),
				array(
					'title' => '',
					'more' => '头 -灭世者的死亡之帽<br>嘴 -纳什之牙<br>心 -燃烧宝石<br>手 -无尽之刃<br>脚 -水银之靴',
					'pic'	=> 'images/st_5.jpg',
				),
				array(
					'title' => '',
					'more' => '头 - 想要睡<br>嘴 - 想要吃<br>心 - 想要爱<br>手 - 想要打字<br>腿 - 想要停止',
					'pic'	=> 'images/st_6.jpg',
				),
				array(
					'title' => '',
					'more' => '头 - 想象力丰富<br>嘴 - 甜言蜜语的唇<br>心 - 为爱跳动的心脏<br>手 - 青葱玉手<br>脚 - 白皙的腿',
					'pic'	=> 'images/st_7.jpg',
				),
				array(
					'title' => '',
					'more' => '头 - Gucci帽子<br>脖子 - Burberry围巾<br>胸 - Swarovski 胸针<br>手 - LV手袋<br>脚 - Alexandar Mcqueen鞋',
					'pic'	=> 'images/st_8.jpg',
				),
				array(
					'title' => '',
					'more' => '头 - 智力非同凡响<br>嘴 - 偷亲人专业户<br>心 - 一片丹心乳向日葵<br>手 - 握手界高手<br>腿 - 价值连城',
					'pic'	=> 'images/st_9.jpg',
				),
				array(
					'title' => '',
					'more' => '头 - 多愁善感<br>嘴 - 欲言又止的唇<br>心 - 心太软<br>手 - 厨艺精湛的手<br>脚 - 迈向真爱的脚',
					'pic'	=> 'images/st_10.jpg',
				),
				array(
					'title' => '',
					'more' => '头 - 爱因斯坦的大脑<br>嘴 - 周杰伦的嘴<br>心 - 陈冠希的心<br>手 - 朗朗的双手<br>腿 - 刘翔的双腿',
					'pic'	=> 'images/st_11.jpg',
				),
				array(
					'title' => '',
					'more' => '头 - 穆里尼奥<br>嘴 - 苏亚雷斯<br>心 - 梅西<br>手 - 诺伊尔<br>脚 - C罗',
					'pic'	=> 'images/st_12.jpg',
				),
				

			),

	),
	
	//你的受骗指数有多高？
	'pian' => array(
		//游戏标题
		'title' => '你的受骗指数有多高？',
		//描述
		'desc'	=> '你知道自己有多好骗嘛？',
		//logo图片地址
		'logo'	=> 'images/pian.jpg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s的受骗指数是： %s',
		//结果页提示
		'resultDesc' => '%s的受骗指数是',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '57%',
					'more' => '太单纯了，经常被骗',
					'pic'	=> 'images/p_57.gif',
				),

				array(
					'title' => '1%',
					'more' => '相当警惕，极难受骗',
					'pic'	=> 'images/p_1.gif',
				),
				array(
					'title' => '-200%',
					'more' => '别人不被你骗就不错啦',
					'pic'	=> 'images/p_f200.gif',
				),
				array(
					'title' => '100%',
					'more' => '被卖了还帮忙数钱',
					'pic'	=> 'images/p_100.gif',
				),
				array(
					'title' => '10%',
					'more' => '只被假乞丐骗过两次钱',
					'pic'	=> 'images/p_10.gif',
				),
				array(
					'title' => '66%',
					'more' => '太容易轻信别人',
					'pic'	=> 'images/p_66.gif',
				),
				array(
					'title' => '25%',
					'more' => '很聪明，很少受骗',
					'pic'	=> 'images/p_25.gif',
				),
				array(
					'title' => '99%',
					'more' => '被骗没商量',
					'pic'	=> 'images/p_99.gif',
				),
				

			),

	),
	
	//测测你的花心指数
	'huaxin' => array(
		//游戏标题
		'title' => '测测你的花心指数',
		//描述
		'desc'	=> '你知道自己的花心指数吗？',
		//logo图片地址
		'logo'	=> 'images/huaxin.jpg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s的花心指数： %s',
		//结果页提示
		'resultDesc' => '%s的花心指数',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '63%',
					'more' => '一见美女or帅哥脚就粘在地上了',
					'pic'	=> 'images/h_63.gif',
				),

				array(
					'title' => '60%',
					'more' => '外表看似淡定，其实内心翻腾厉害',
					'pic'	=> 'images/h_60.gif',
				),
				array(
					'title' => '5%',
					'more' => '爱人太难搞，一个足够',
					'pic'	=> 'images/h_5.gif',
				),
				array(
					'title' => '96%',
					'more' => '天生情种，招蜂引蝶',
					'pic'	=> 'images/h_96.gif',
				),
				array(
					'title' => '100%',
					'more' => '牡丹花下死，做鬼也风流',
					'pic'	=> 'images/h_100.gif',
				),
				array(
					'title' => '83%',
					'more' => '恋爱次数数也数不清',
					'pic'	=> 'images/h_83.gif',
				),
				array(
					'title' => '0%',
					'more' => '我的心里只有爱的人',
					'pic'	=> 'images/h_0.gif',
				),
				array(
					'title' => '70%',
					'more' => '吃着碗里看着锅里',
					'pic'	=> 'images/h_70.gif',
				),
				array(
					'title' => '90%',
					'more' => '宇宙超级花心大萝卜',
					'pic'	=> 'images/h_90.gif',
				),
				array(
					'title' => '50%',
					'more' => '有贼心你没贼胆',
					'pic'	=> 'images/h_50.gif',
				),
				array(
					'title' => '20%',
					'more' => '老实本分，轻易不乱搞',
					'pic'	=> 'images/h_20.gif',
				),
				array(
					'title' => '30%',
					'more' => '友情爱情傻傻分不清楚',
					'pic'	=> 'images/h_30.gif',
				),
				

			),

	),
	
	//你命里缺什么？
	'ming' => array(
		//游戏标题
		'title' => '你命里缺什么？',
		//描述
		'desc'	=> '赶紧测测你命里缺什么吧！',
		//logo图片地址
		'logo'	=> 'images/m.jpg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s的命里缺： %s',
		//结果页提示
		'resultDesc' => '%s的命里缺',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '男神',
					'more' => '',
					'pic'	=> 'images/m_nanshen.gif',
				),

				array(
					'title' => '房子',
					'more' => '',
					'pic'	=> 'images/m_fz.gif',
				),
				array(
					'title' => '钱',
					'more' => '钱！钱！钱！<br>重要的事情说三遍',
					'pic'	=> 'images/m_qian.gif',
				),
				array(
					'title' => '睡眠',
					'more' => '',
					'pic'	=> 'images/m_shuimian.gif',
				),
				array(
					'title' => '时间',
					'more' => '',
					'pic'	=> 'images/m_shijian.gif',
				),
				array(
					'title' => '女神',
					'more' => '',
					'pic'	=> 'images/m_nvshen.gif',
				),
				array(
					'title' => '理想',
					'more' => '',
					'pic'	=> 'images/m_lixiang.gif',
				),
				array(
					'title' => '节操',
					'more' => '',
					'pic'	=> 'images/m_jiecao.gif',
				),
				array(
					'title' => '钙',
					'more' => '',
					'pic'	=> 'images/m_gai.gif',
				),
				array(
					'title' => '豪车',
					'more' => '',
					'pic'	=> 'images/m_haoche.gif',
				),
				array(
					'title' => '安全感',
					'more' => '',
					'pic'	=> 'images/m_anquangan.gif',
				),
				array(
					'title' => '爱',
					'more' => '',
					'pic'	=> 'images/m_love.gif',
				),
				

			),

	),
	
	//你被爱的五个理由是？
	'love' => array(
		//游戏标题
		'title' => '你被爱的五个理由是？',
		//描述
		'desc'	=> '你知道你因为什么而被人爱吗？',
		//logo图片地址
		'logo'	=> 'images/love.jpg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s的被爱的理由是： %s',
		//结果页提示
		'resultDesc' => '%s的被爱的理由是',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '《小酒窝》',
					'more' => '《小酒窝》<br>《爱笑的眼睛》<br>《勇气》<br>《简单爱》<br>《因你而在》',
					'pic'	=> 'images/love_xjw.jpg',
				),

				array(
					'title' => '懒洋洋',
					'more' => '懒洋洋<br>很投缘<br>可以一起分享色色的东西<br>个性超好<br>人出乎意料地善良',
					'pic'	=> 'images/love_lyy.jpg',
				),
				array(
					'title' => '吹弹可破水嫩肌',
					'more' => '吹弹可破水嫩肌<br>温柔嗓音人著迷<br>笑容可掬如春风<br>细心贴心又耐心<br>大家都想爱上你',
					'pic'	=> 'images/love_chuitan.jpg',
				),
				array(
					'title' => '可爱',
					'more' => '吃饭的样子可爱<br>睡觉的样子可爱<br>发呆的样子可爱<br>生气的样子可爱<br>总之就是拿你没办法',
					'pic'	=> 'images/love_keai.jpg',
				),
				array(
					'title' => '将心比心',
					'more' => '将心比心，为他人着想<br>一表人才，人畜无害<br>尊老爱幼，孔儒让梨<br>沉默是金<br>徒手写一千行代码，调试没bug',
					'pic'	=> 'images/love_jxbx.jpg',
				),
				array(
					'title' => '长得帅',
					'more' => '长得帅<br>长得帅<br>长得帅<br>长得帅<br>长得帅',
					'pic'	=> 'images/love_zds.jpg',
				),
				array(
					'title' => '文能挂机喷队友',
					'more' => '文能挂机喷队友<br>武能越塔送人头<br>进可孤身一挑五<br>退可坐等二十投<br>卖起队友不回头',
					'pic'	=> 'images/love_wenneng.jpg',
				),
				array(
					'title' => '长得漂亮',
					'more' => '长得漂亮<br>长得漂亮<br>长得漂亮<br>长得漂亮<br>长得漂亮',
					'pic'	=> 'images/love_piaoliang.jpg',
				),
				array(
					'title' => '颜艺',
					'more' => '颜艺<br>傲娇<br>呆毛<br>元气<br>吃货',
					'pic'	=> 'images/love_yanyi.jpg',
				),
				array(
					'title' => '长发及腰',
					'more' => '长发及腰<br>回眸一笑<br>多重人格<br>粘人的小猫咪<br>女王气质',
					'pic'	=> 'images/love_changfa.jpg',
				),
				array(
					'title' => '爱笑的眼睛',
					'more' => '爱笑的眼睛<br>勾魂的背影<br>魔鬼身材<br>锁骨放硬币<br>反手摸肚脐',
					'pic'	=> 'images/love_yanjing.jpg',
				),
				

			),

	),
	
	//测测你的出轨指数？
	'chugui' => array(
		//游戏标题
		'title' => '测测你的出轨指数？',
		//描述
		'desc'	=> '你知道你的出轨指数有多少吗？',
		//logo图片地址
		'logo'	=> 'images/cg.jpg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s的出轨指数是： %s',
		//结果页提示
		'resultDesc' => '%s的出轨指数是',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '80%',
					'more' => '家中红旗不倒<br>外面彩旗飘飘',
					'pic'	=> 'images/cg_80.jpg',
				),

				array(
					'title' => '0%',
					'more' => '一心一意，爱一个人',
					'pic'	=> 'images/cg_0.jpg',
				),
				array(
					'title' => '15%',
					'more' => '经常被表白，但是不花心',
					'pic'	=> 'images/cg_15.jpg',
				),
				array(
					'title' => '20%',
					'more' => '用情至深，专情一人',
					'pic'	=> 'images/cg_20.jpg',
				),
				array(
					'title' => '-10%',
					'more' => '绝世仅有的不花心的人',
					'pic'	=> 'images/cg_f10.jpg',
				),
				array(
					'title' => '25%',
					'more' => '定力极强，不会花心',
					'pic'	=> 'images/cg_25.jpg',
				),
				array(
					'title' => '50%',
					'more' => '遇到真爱，就不再花心',
					'pic'	=> 'images/cg_50.jpg',
				),
				array(
					'title' => '35%',
					'more' => '喜欢可以很多，但爱只能一个',
					'pic'	=> 'images/cg_35.jpg',
				),
				array(
					'title' => '100%',
					'more' => '花心大萝卜',
					'pic'	=> 'images/cg_100.jpg',
				),
				array(
					'title' => '5%',
					'more' => '因为不花心，特别招人喜欢',
					'pic'	=> 'images/cg_5.jpg',
				),
				array(
					'title' => '10%',
					'more' => '从不花心，眼里只有爱人一个',
					'pic'	=> 'images/cg_10.jpg',
				),
				

			),

	),
	
	//你的致命弱点是什么
	'ruodian' => array(
		//游戏标题
		'title' => '你的致命弱点是什么？',
		//描述
		'desc'	=> '每个人都有弱点，你知道你的致命弱点是什么吗？',
		//logo图片地址
		'logo'	=> 'images/logo.jpg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s的致命弱点是：%s',
		//结果页提示
		'resultDesc' => '%s的致命弱点是',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '太纯真',
					'pic'	=> 'images/chunzhen.gif',
				),

				array(
					'title' => '太TM可爱',
					'pic'	=> 'images/keai.gif',
				),


				array(
					'title' => '太漂亮',
					'pic'	=> 'images/piaoliang.gif',
				),
				
				array(
					'title' => '太TM聪明',
					'pic'	=> 'images/congming.gif',
				),

				array(
					'title' => '太善良',
					'pic'	=> 'images/shanliang.gif',
				),
				array(
					'title' => '没有弱点',
					'pic'	=> 'images/meiyouruodian.gif',
				),

				array(
					'title' => '过于专一',
					'pic'	=> 'images/zhuangyi.gif',
				),
				array(
					'title' => '重色轻友',
					'pic'	=> 'images/qingyou.gif',
				),
				array(
					'title' => '喜欢说实话',
					'pic'	=> 'images/shihua.gif',
				),
				array(
					'title' => '恋爱太少',
					'pic'	=> 'images/lianai.gif',
				),

				array(
					'title' => '异性人缘好',
					'pic'	=> 'images/renyuan.gif',
				),
				array(
					'title' => '太招人喜欢',
					'pic'	=> 'images/zhaoren.gif',
				),
			),

	),

	//2016年
	'shieryue' => array(
		//游戏标题
		'title' => '你的2016年关键词是什么？',
		//描述
		'desc'	=> '快来测一测你的2016年关键词吧！',
		//logo图片地址
		'logo'	=> 'images/12.jpg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s的2016年关键词是： %s',
		//结果页提示
		'resultDesc' => '%s的2016年关键词是',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '激情',
					'more' => '在工作或生活的过程中<br>把事情做到极致<br>激情，是极度热爱<br>是信仰，是承担，是付出<br>追求完美的你<br>将在激情四射的2016年<br>完成内心的一小段蓝图',
					'pic'	=> 'images/12_jq.jpg',
				),

				array(
					'title' => '爱情',
					'more' => '2016年<br>爱情将是关键词<br>单身者翻身把歌唱<br>遇到一个满意度九分以上的爱人<br>双身者<br>另一半幡然醒悟明白对你不够好',
					'pic'	=> 'images/12_aq.jpg',
				),
				array(
					'title' => '努力',
					'more' => '2016年<br>开始明朗自己的职业发展与人生目标<br>并开始努力<br>完成一个内心的小愿望<br>小时候你总觉得<br>「努力」是没有「天赋」的人做的事情<br>现在开始明白<br>
原来<br>「努力」才是最珍贵的「天赋」',
					'pic'	=> 'images/12_nl.jpg',
				),
				array(
					'title' => '散金',
					'more' => '2016年<br>将会来遇到一次个人的经济危机<br>可能是生活上的小破费<br>投资上的小损失<br>但一切都是暂时的<br>波折后是新的转机和希望',
					'pic'	=> 'images/12_sj.jpg',
				),
				array(
					'title' => '对我好',
					'more' => '对我好一点<br>是你对2016年的期待<br>2016年<br>意外的惊喜<br>意外的表白<br>你将得到意想不到的爱<br>2016年<br>一扫阴霾<br>世界亮堂堂',
					'pic'	=> 'images/12_dwh.jpg',
				),
				array(
					'title' => '旅行',
					'more' => '2016年将会来一次说走就走的旅行<br>不想困在原地<br>不想再拘泥于家长里短的琐碎<br>2016年<br>你打算给自己放个假<br>去看更大的世界',
					'pic'	=> 'images/12_lx.jpg',
				),
				array(
					'title' => '离开',
					'more' => '离开，离别<br>再见，不见<br>2016年将多一次离开的经验<br>可能是离开学校<br>故乡或朋友<br>当然<br>还有离开不满意的自己',
					'pic'	=> 'images/12_lk.jpg',
				),
				

			),

	),
	

	//毕业后适合做什么
	'biye' => array(
		//游戏标题
		'title' => '你毕业后最适合做什么？',
		//描述
		'desc'	=> '',
		//logo图片地址
		'logo'	=> 'images/biye_logo.jpg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s毕业后最适合: %s',
		//结果页提示
		'resultDesc' => '%s毕业后最适合',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '出家',
					'more' => '曾经沧海难为水<br>色即是空，空即是色<br>出家是一个不错的选择<br>只是<br>需要研究生学历',
					'pic'	=> 'images/biye_chujia.png',
				),

				array(
					'title' => '结婚',
					'more' => '毕业就结婚<br/>份子钱收到手软',
					'pic'	=> 'images/biye_jiehun.png',
				),
				array(
					'title' => '创业',
					'more' => '立挣<br>向钱看<br>向厚赚<br>一二亿<br>收息',
					'pic'	=> 'images/biye_chuangye.png',
				),

				array(
					'title' => '出国深造',
					'more' => '金子般闪光的你<br>即使到世界任何一个地方<br>都会散发出迷人的光芒<br>那么问题来了<br>何处才是你的远方',
					'pic'	=> 'images/biye_chuguo.png',
				),
				array(
					'title' => '流浪',
					'more' => '表面上居无定所<br>实际上<br>我们自由洒脱不拘束',
					'pic'	=> 'images/biye_liuliang.png',
				),

				array(
					'title' => '搬砖',
					'more' => '搬砖是一门艺术<br>我搬砖我自豪<br>反正工资比你高',
					'pic'	=> 'images/biye_banzhuang.png',
				),
				array(
					'title' => '回家种地',
					'more' => '面朝黄土，春暖花开<br>简简单单地生活<br>人有多大胆<br>地有多大产',
					'pic'	=> 'images/biye_huijia.png',
				),
				array(
					'title' => '靠脸吃饭',
					'more' => '明明可以靠脸<br>何必非要靠才华<br>不服你来打我啊<br>哈哈哈哈哈',
					'pic'	=> 'images/biye_kaolian.png',
				),
				
				

			),

	),

	//长相
	'zhangxiang' => array(
		//游戏标题
		'title' => '我的长相容易让人？',
		//描述
		'desc'	=> '你知道你的长相能给人一种什么感觉吗？',
		//logo图片地址
		'logo'	=> 'images/zhangxiang_logo.png',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s的相貌容易让人： %s',
		//结果页提示
		'resultDesc' => '%s的相貌容易让人',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '走神',
					'more' => '每当你如蜻蜓点水般飘过，不知会摄走多少人的心身灵，余味无穷',
					'pic'	=> 'images/zhangxiang_zoushen.jpg',
				),

				array(
					'title' => '喜大普奔',
					'more' => '强在天生的喜感气质，聚集财神、福神、萌神气质于一身',
					'pic'	=> 'images/zhangxiang_xida.jpg',
				),
				array(
					'title' => '逃走',
					'more' => '别人之所以逃走，是因为现在社会的赏美水平还没有达到你的层次',
					'pic'	=> 'images/zhangxiang_taozou.jpg',
				),
				array(
					'title' => '走穴',
					'more' => '人家为了你可是不辞辛苦，奔波打拼，只为你璀璨的微笑',
					'pic'	=> 'images/zhangxiang_zouxue.jpg',
				),
				array(
					'title' => '走丢',
					'more' => '一般长相，过度平凡，适合各类卧底工作',
					'pic'	=> 'images/zhangxiang_zoudiu.jpg',
				),
				array(
					'title' => '走肾',
					'more' => '容易激发周围群众浓郁的荷尔蒙，夜深人静的时候多少人的梦里有你',
					'pic'	=> 'images/zhangxiang_zoushen2.jpg',
				),
				array(
					'title' => '走流量',
					'more' => '动静皆宜，360无死角，严重适合高清，建议周边好友使用4G以上网络查看你的颜值',
					'pic'	=> 'images/zhangxiang_zouliuliang.jpg',
				),
				array(
					'title' => '走心',
					'more' => '容易被很多人暗恋，不少人想执子之手，天长地久',
					'pic'	=> 'images/zhangxiang_zouxin.jpg',
				),
				

			),

	),


	//另一半
	'lingyiban' => array(
		//游戏标题
		'title' => '你靠什么找到另一半？',
		//描述
		'desc'	=> '明明可以靠长相，可我不是明明！',
		//logo图片地址
		'logo'	=> 'images/lingyiban_logo.png',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s找到另一半靠的是： %s',
		//结果页提示
		'resultDesc' => '%s找到另一半靠的是',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '卖萌',
					'more' => '么么哒！',
					'pic'	=> 'images/lingyiban_maimeng.png',
				),

				array(
					'title' => '逗逼',
					'more' => '我就是猴子请来的逗逼！',
					'pic'	=> 'images/lingyiban_doubi.png',
				),
				array(
					'title' => '颜值',
					'more' => '明明可以靠脸吃饭，对，我就是明明！',
					'pic'	=> 'images/lingyiban_yanzi.png',
				),
				array(
					'title' => '身材',
					'more' => '长的再帅，不如腹肌八块！',
					'pic'	=> 'images/lingyiban_shencai.png',
				),
				array(
					'title' => '壁咚',
					'more' => '你幻想的浪漫，我全部满足你！',
					'pic'	=> 'images/lingyiban_bidong.png',
				),
				array(
					'title' => '才华',
					'more' => '明明可以靠脸吃饭，而我偏要靠才华！',
					'pic'	=> 'images/lingyiban_caihua.png',
				),
				array(
					'title' => '变性',
					'more' => '弯了之后，想到了最好的解决方法！',
					'pic'	=> 'images/lingyiban_bianxing.png',
				),

			),

	),

	//命运
	'mingyun' => array(
		//游戏标题
		'title' => '你的命运是？',
		//描述
		'desc'	=> '人最关心的事项有寿命、婚宴、财富，而上天赐给你的命运究竟又是如何呢？',
		//logo图片地址
		'logo'	=> 'images/mingyun_logo.jpg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s的命运是: %s',
		//结果页提示
		'resultDesc' => '%s的命运是',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '活到93岁',
					'more' => '寿命 : 93岁<br>家庭 : 28岁结婚后得一男一女<br>车子 : 兰博基尼Veneno<br>房子 : 上海 陆家嘴 新外滩花苑',
					'pic'	=> 'images/mingyun_93sui.jpg',
				),

				array(
					'title' => '活到77岁',
					'more' => '寿命 : 77岁<br>家庭 : 30岁结婚后得俩男<br>车子 : 保时捷Carrera<br>房子 : LA海边的别墅',
					'pic'	=> 'images/mingyun_77sui.jpg',
				),
				array(
					'title' => '活到72岁',
					'more' => '寿命 : 72岁<br>家庭 : 34岁结婚后得一女<br>车子 : 吉利帝豪<br>房子 : 北京七环外<br>',
					'pic'	=> 'images/mingyun_72sui.jpg',
				),
				array(
					'title' => '活到102岁',
					'more' => '寿命 : 102岁<br>家庭 : 29岁结婚后得一男一女<br>车子 : 奥迪A6<br>房子 :三亚 豪宅',
					'pic'	=> 'images/mingyun_102sui.jpg',
				),
				array(
					'title' => '活到88岁',
					'more' => '寿命 : 88岁<br>家庭 : 40岁结婚后得一女<br>车子 : 玛莎拉蒂GranTurismo<br>房子 : 内湖豪宅',
					'pic'	=> 'images/mingyun_88sui.jpg',
				),
				array(
					'title' => '活到99岁',
					'more' => '寿命 : 99岁<br>家庭 : 28岁结婚后得两男<br>车子 : 别克君威<br>房子 : 上海 静安区公寓',
					'pic'	=> 'images/mingyun_99sui.jpg',
				),
				array(
					'title' => '活到82岁',
					'more' => '寿命 : 82岁<br>家庭 : 36岁结婚后得三胞胎<br>车子 : 奥迪R8<br>房子 :比佛利山庄',
					'pic'	=> 'images/mingyun_82sui.jpg',
				),
				array(
					'title' => '活到94岁',
					'more' => '寿命 : 94岁<br>家庭 : 39岁结婚后得一女<br>车子 : BMW 420D<br>房子 : 淡水顶楼海景豪宅',
					'pic'	=> 'images/mingyun_94sui.jpg',
				),

			),

		),


	//赚钱
	'zhuanqian' => array(
		//游戏标题
		'title' => '这辈子你能赚多少钱？',
		//描述
		'desc'	=> '想知道这辈子你能赚多少钱吗？是个穷鬼还是有钱人呢？一起来测测吧！',
		//logo图片地址
		'logo'	=> 'images/zhuanqian_logo.jpeg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s这辈子能赚到： %s',
		//结果页提示
		'resultDesc' => '%s这辈子能赚到',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '1亿日元',
					'more' => '你都在岛国做了些什么',
					'pic'	=> 'images/zhuanqian_riyuan.jpeg',
				),

				array(
					'title' => '900万泰铢',
					'more' => '这年头马杀鸡不好做',
					'pic'	=> 'images/zhuanqian_taizhu.jpg',
				),
				array(
					'title' => '200万瑞士法郎',
					'more' => '简直是个理财专家',
					'pic'	=> 'images/zhuanqian_ruishi.jpg',
				),
				array(
					'title' => '5000万人民币',
					'more' => '绝对的农民企业家',
					'pic'	=> 'images/zhuanqian_renmin.jpg',
				),
				array(
					'title' => '300万英镑',
					'more' => '既有钱又有品位',
					'pic'	=> 'images/zhuanqian_yingbang.jpg',
				),
				array(
					'title' => '4000万韩元',
					'more' => '简直是个穷鬼',
					'pic'	=> 'images/zhuanqian_hanyuan.jpg',
				),
				array(
					'title' => '6000万卢布',
					'more' => '天然气生意做的不错哟',
					'pic'	=> 'images/zhuanqian_lubu.jpg',
				),
				array(
					'title' => '500万人民币',
					'more' => '今晚双色球要开奖啦',
					'pic'	=> 'images/zhuanqian_500w.jpg',
				),
				array(
					'title' => '10000万美元',
					'more' => '典型的成功人士',
					'pic'	=> 'images/zhuanqian_meiyuan.jpg',
				),
				array(
					'title' => '100元人民币',
					'more' => '百元哥，这样真的好吗',
					'pic'	=> 'images/zhuanqian_yibai.jpg',
				),


			),

		),

	
	//吃饭
	'chifan' => array(
		//游戏标题
		'title' => '你这辈子靠什么吃饭？',
		//描述
		'desc'	=> '脸皮？才华？快来找半仙算算你这辈子是靠什么吃饭的！',
		//logo图片地址
		'logo'	=> 'images/chifan_logo.jpeg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s这辈子吃饭靠： %s',
		//结果页提示
		'resultDesc' => '%s这辈子吃饭靠',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '爹',
					'more' => '天生就是啃老族，看破不说破。',
					'pic'	=> 'images/chifan_die.jpg',
				),

				array(
					'title' => '逗比',
					'more' => '走路爱摔跤，脑子常秀逗。',
					'pic'	=> 'images/chifan_doubi.jpeg',
				),
				array(
					'title' => '身材',
					'more' => '傲人的身材，性感的线条太耀眼。',
					'pic'	=> 'images/chifan_shencai.jpeg',
				),
				array(
					'title' => '勤劳',
					'more' => '朝九晚五的上班，每天努力的工作。',
					'pic'	=> 'images/chifan_qinlao.jpeg',
				),
				array(
					'title' => '读书',
					'more' => '不喜欢喧嚣的你，只想安静的做个文艺青年。',
					'pic'	=> 'images/chifan_dushu.jpeg',
				),

				array(
					'title' => '手机',
					'more' => '刷朋友圈，屏幕上的乐趣根本停不下来！',
					'pic'	=> 'images/chifan_shouji.jpeg',
				),
				array(
					'title' => '智商',
					'more' => '和你相比，世人都是愚蠢的人类。',
					'pic'	=> 'images/chifan_zhishang.jpeg',
				),

				array(
					'title' => '口才',
					'more' => '讲起话来条条分明，你是演说家。',
					'pic'	=> 'images/chifan_koucai.jpeg',
				),
				array(
					'title' => '脸皮',
					'more' => '天下无敌，城墙没你脸皮厚！',
					'pic'	=> 'images/chifan_lianpi.jpeg',
				),
				array(
					'title' => '头脑',
					'more' => '明明可以靠脸吃饭，然并卵，你不是明明。',
					'pic'	=> 'images/chifan_tounao.jpeg',
				),


			),

		),


	//开什么车
	'kaiche' => array(
		//游戏标题
		'title' => '你的气质适合开什么车？',
		//描述
		'desc'	=> '你知道你的气质适合开什么车吗？赶紧来测试一下吧！',
		//logo图片地址
		'logo'	=> 'images/kaiche_logo.jpg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s的气质最适合开： %s',
		//结果页提示
		'resultDesc' => '%s的气质最适合开',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '宝马',
					'more' => '',
					'pic'	=> 'images/kaiche_baoma.png',
				),

				array(
					'title' => '路虎',
					'more' => '',
					'pic'	=> 'images/kaiche_luhu.png',
				),
				array(
					'title' => '悍马',
					'more' => '',
					'pic'	=> 'images/kaiche_hanma.png',
				),
				array(
					'title' => '法拉利',
					'more' => '',
					'pic'	=> 'images/kaiche_falali.png',
				),
				array(
					'title' => '保时捷',
					'more' => '',
					'pic'	=> 'images/kaiche_baoshijie.png',
				),

				array(
					'title' => '坦克',
					'more' => '',
					'pic'	=> 'images/kaiche_tanke.png',
				),
				array(
					'title' => '电动车',
					'more' => '',
					'pic'	=> 'images/kaiche_diandongche.jpeg',
				),

				array(
					'title' => '奔驰',
					'more' => '',
					'pic'	=> 'images/kaiche_benchi.png',
				),
				array(
					'title' => '拖拉机',
					'more' => '',
					'pic'	=> 'images/kaiche_tuolaji.jpeg',
				),
				array(
					'title' => '东风小康',
					'more' => '',
					'pic'	=> 'images/kaiche_dongfeng.png',
				),
				array(
					'title' => '奥迪',
					'more' => '',
					'pic'	=> 'images/kaiche_aodi.png',
				),
				array(
					'title' => '自行车',
					'more' => '',
					'pic'	=> 'images/kaiche_zixingche.jpeg',
				),
				array(
					'title' => '布加迪威龙',
					'more' => '',
					'pic'	=> 'images/kaiche_bujiadi.png',
				),
				array(
					'title' => '劳斯莱斯',
					'more' => '',
					'pic'	=> 'images/kaiche_laoshi.png',
				),
				array(
					'title' => '奇瑞QQ',
					'more' => '',
					'pic'	=> 'images/kaiche_qirui.png',
				),


			),

		),


	//单身
	'danshen' => array(
		//游戏标题
		'title' => '你还单身的原因是？',
		//描述
		'desc'	=> '作为一只单身狗，别再自怨自艾了，看看你单身的原因究竟是什么？',
		//logo图片地址
		'logo'	=> 'images/danshen_logo.jpeg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s单身的原因是: %s',
		//结果页提示
		'resultDesc' => '%s单身的原因是',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '屌丝',
					'more' => '屌丝也有英雄梦，单身一年接一年',
					'pic'	=> 'images/danshen_diaoshi.jpeg',
				),

				array(
					'title' => '穷',
					'more' => '还是先多赚点钱再考虑脱单吧',
					'pic'	=> 'images/danshen_qiong.jpeg',
				),
				array(
					'title' => '丑',
					'more' => '还是先去高丽国整容先吧',
					'pic'	=> 'images/danshen_chou.jpeg',
				),
				array(
					'title' => '神秘',
					'more' => '每天戴着面具累不累？',
					'pic'	=> 'images/danshen_shenmi.jpeg',
				),
				array(
					'title' => '忙碌',
					'more' => '加班加到吐血，哪有时间恋爱',
					'pic'	=> 'images/danshen_manglu.jpeg',
				),
				array(
					'title' => '花心',
					'more' => '改过自新，重新做人吧',
					'pic'	=> 'images/danshen_huaxin.jpeg',
				),
				array(
					'title' => '吝啬',
					'more' => '约会都要AA的人还是别谈爱情了',
					'pic'	=> 'images/danshen_linshe.jpeg',
				),
				array(
					'title' => '自私',
					'more' => '你是不懂分享的自私鬼',
					'pic'	=> 'images/danshen_zisi.jpeg',
				),
				array(
					'title' => '邋遢',
					'more' => '洗个热水澡，换身新衣服，还是有市场的',
					'pic'	=> 'images/danshen_lata.jpeg',
				),


			),

		),

	//朋友眼中
	'pengyou' => array(
		//游戏标题
		'title' => '你在朋友眼中是什么人？',
		//描述
		'desc'	=> '自己在朋友眼中是什么样的人？说不在意是假的，一起来测测吧！',
		//logo图片地址
		'logo'	=> 'images/pengyou_logo.jpeg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s在朋友眼中是：%s',
		//结果页提示
		'resultDesc' => '%s在朋友眼中是',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '爱管闲事',
					'more' => '如果你想试试，我可以让你看看我的实力！',
					'pic'	=> 'images/pengyou_xianshi.jpeg',
				),

				array(
					'title' => '多愁善感',
					'more' => '啊，大海啊，全是水',
					'pic'	=> 'images/pengyou_duochou.jpeg',
				),
				array(
					'title' => '理想主义者',
					'more' => '我们一起谈哲学，聊人生吧',
					'pic'	=> 'images/pengyou_lixiang.jpeg',
				),
				array(
					'title' => '高大上的土豪',
					'more' => '你只要记住<br>我是土豪<br>高大上的',
					'pic'	=> 'images/pengyou_tuhao.jpeg',
				),
				array(
					'title' => '风趣幽默',
					'more' => '妈妈再也不用担心我找不到对象了',
					'pic'	=> 'images/pengyou_youmo.jpeg',
				),
				array(
					'title' => '普通青年',
					'more' => '啤酒饮料旷泉水<br>花生瓜子八宝粥<br>来，腿收一下',
					'pic'	=> 'images/pengyou_qingnian.jpeg',
				),
				array(
					'title' => '善解人意',
					'more' => '…哪里不会点哪里…',
					'pic'	=> 'images/pengyou_shanjie.jpeg',
				),
				array(
					'title' => '完美主义者',
					'more' => '听说，你也是处女座？',
					'pic'	=> 'images/pengyou_wanmei.jpeg',
				),
				array(
					'title' => '2B青年',
					'more' => '我2B<br>我快乐',
					'pic'	=> 'images/pengyou_2b.jpeg',
				),
				array(
					'title' => '处事洒脱',
					'more' => '让我们红尘作伴活的潇潇洒洒',
					'pic'	=> 'images/pengyou_satuo.jpeg',
				),
				array(
					'title' => '重色轻友',
					'more' => '若你回心转意<br>日后必有重谢',
					'pic'	=> 'images/pengyou_zhongse.jpeg',
				),
				array(
					'title' => '赵日天徒弟',
					'more' => '日天你啥时收徒弟了，咋不告诉我一声尼？',
					'pic'	=> 'images/pengyou_tudi.jpeg',
				),

			),

		),

	//身价
	'shenjia' => array(
		//游戏标题
		'title' => '测测你未来的身价',
		//描述
		'desc'	=> '你知道自己未来十年的身价是多少吗？',
		//logo图片地址
		'logo'	=> 'images/shenjia_logo.jpg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s未来十年的身价是：%s',
		//结果页提示
		'resultDesc' => '%s未来十年的身价是',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '5头牛',
					'more' => '',
					'pic'	=> 'images/shenjia_5touniu.gif',
				),

				array(
					'title' => '500万',
					'more' => '',
					'pic'	=> 'images/shenjia_500w.gif',
				),
				array(
					'title' => '15亿',
					'more' => '',
					'pic'	=> 'images/shenjia_15yi.gif',
				),
				array(
					'title' => '一亩地',
					'more' => '',
					'pic'	=> 'images/shenjia_yimu.gif',
				),
				array(
					'title' => '1块钱',
					'more' => '',
					'pic'	=> 'images/shenjia_yiyuan.gif',
				),
				array(
					'title' => '村里首富',
					'more' => '',
					'pic'	=> 'images/shenjia_shoufu.gif',
				),
				array(
					'title' => '福布斯榜首',
					'more' => '',
					'pic'	=> 'images/shenjia_fubusi.gif',
				),
				array(
					'title' => '穷的叮当响',
					'more' => '',
					'pic'	=> 'images/shenjia_qiong.gif',
				),
				array(
					'title' => '一个亿',
					'more' => '',
					'pic'	=> 'images/shenjia_yiyi.gif',
				),
				array(
					'title' => '5毛钱',
					'more' => '',
					'pic'	=> 'images/shenjia_5maoqian.gif',
				),
				array(
					'title' => '3000万',
					'more' => '',
					'pic'	=> 'images/shenjia_3000w.gif',
				),
				array(
					'title' => '100万',
					'more' => '',
					'pic'	=> 'images/shenjia_100w.gif',
				),


			),

		),


	//2015意外之喜
	'yiwaizhixi' => array(
		//游戏标题
		'title' => '2016年你的意外之喜',
		//描述
		'desc'	=> '2016年，快来看看你会有什么意外之喜！',
		//logo图片地址
		'logo'	=> 'images/yiwaizhixi_logo.jpg',
		//结果页的标题,分享到朋友圈使用
		'resultTitle' => '%s下半年的意外之喜是：%s',
		//结果页提示
		'resultDesc' => '%s下半年的意外之喜是',
		//测试的结果
		'resultList' => array(
				array(
					'title' => '被包养',
					'more' => '',
					'pic'	=> 'images/yiwaizhixi_baoyang.png',
				),

				array(
					'title' => '遇到真爱',
					'more' => '',
					'pic'	=> 'images/yiwaizhixi_zhenai.png',
				),
				array(
					'title' => '买车买房',
					'more' => '',
					'pic'	=> 'images/yiwaizhixi_chefang.png',
				),
				array(
					'title' => '被异性表白',
					'more' => '',
					'pic'	=> 'images/yiwaizhixi_biaobai.png',
				),
				array(
					'title' => '相亲成功',
					'more' => '',
					'pic'	=> 'images/yiwaizhixi_xiangqin.png',
				),
				array(
					'title' => '被暗恋',
					'more' => '',
					'pic'	=> 'images/yiwaizhixi_anlian.png',
				),
				array(
					'title' => '被同性表白',
					'more' => '',
					'pic'	=> 'images/yiwaizhixi_biaobai2.png',
				),
				array(
					'title' => '升职加薪',
					'more' => '',
					'pic'	=> 'images/yiwaizhixi_shengzhi.png',
				),
				array(
					'title' => '订婚',
					'more' => '',
					'pic'	=> 'images/yiwaizhixi_dinghun.png',
				),
				array(
					'title' => '艳遇',
					'more' => '',
					'pic'	=> 'images/yiwaizhixi_yanyu.png',
				),
				array(
					'title' => '性取向趋向正常',
					'more' => '',
					'pic'	=> 'images/yiwaizhixi_zhengchang.png',
				),
				array(
					'title' => '',
					'more' => '',
					'pic'	=> 'images/shenjia_100w.gif',
				),


			),

		),

	




);


//获取推荐的游戏
$recomList = $gameList;
$recomCount = count($recomList);
//获取推荐的游戏的数量
$count = 2;
if($recomCount > $count){
	$recomCount = $recomCount - $count;
	//开始数组索引
	$startIndex = mt_rand(0,$recomCount);
}else{
	$startIndex = 0;
}

$recomInfo = array_slice($recomList, $startIndex, $count);
unset($recomList);

//关注二维码图片地址
$qrcodePic = 'images/qrcode.jpg';

//是否开启底部广告,1为开启，0为关闭
$openad = 0;

//跳转首页
function jumpIndex(){
	$refer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER']  : '';
	$url = $_SERVER['PHP_SELF']; 
	$arr = explode( '/' , $url ); 
	//获取当前访问文件名
	$access_filename= $arr[count($arr)-1]; 
	$type = isset($_GET['type']) ? $_GET['type'] : '';
	// var_dump($access_filename);
	// exit();
	//如果直接访问的结果页
	if( in_array($access_filename, array('result.php')) && empty($refer)){
		header("Location:index.php?type=".$type);
		exit();

	}

}

//jumpIndex();


