				function gg_show_Time_fun(times,objc,uhtml,data){		
					time = times - (new Date().getTime());
					i =  parseInt((time/1000)/60);
					s =  parseInt((time/1000)%60);
					ms =  String(Math.floor(time%1000));
					ms = parseInt(ms.substr(0,2));
					if(i<10)i='0'+i;
					if(s<10)s='0'+s;
					if(ms<0)ms='00';
					objc.html('<b>'+i+'</b>:<b>'+s+'</b>:<b>'+ms+'</b>');				
	
					if(time<=0){
						
						var obj = objc.parent().parent();							
							obj.find(".w-countdown").html('<p class="w-countdown-ing txt-red">正在计算,请稍后…</p>');	
							 setTimeout(function(){
								obj.html(uhtml);						
								obj.attr('class',"new_li");
								$.ajaxSetup({
									async : false
								});								
								$.post(data['path']+"/api/getshop/lottery_shop_set/",{'lottery_sub':'true','gid':data['id']},null);
							},5000);							 
							return;						
					}
					
					 setTimeout(function(){										 	
							gg_show_Time_fun(times,objc,uhtml,data);				 
					 },30); 
				
				}
				function gg_show_time_add_li(div,path,info){	
				
					var html = '';					
					html+='<li class="countdown_li"><div class="w-goods-newReveal">';
						html+='<i title="正在揭晓" class="ico ico-label ico-label-revealing">&nbsp;</i>';
						html+='<p class="w-goods-title">';
						html+='<a href="'+path+'/dataserver/'+info.id+'" target="_blank" class="name">(第'+info.qishu+'期)'+info.title+'</a>';
						html+='</p>';
						html+='<div class="w-goods-pic">';
						html+='<a href="'+path+'/dataserver/'+info.id+'" target="_blank" class="pic">';
							html+='<img width="105px" height="105px" src="'+info.upload+'/'+info.thumb+'">';
						html+='</a>';
					    html+='</div>'
						html+='<p class="w-goods-price">总需1元淘：'+info.money+'人次';
						html+='</p>';
					html+='<div class="w-goods-countdown">';
						html+='<div class="w-countdown">揭晓倒计时:<br/>';
	
						html+='<span class="w-countdown-nums">';
						html+='<b>99</b>:<b>99</b>:<b>99</b>';
					html+='</div></span></div>';
					html+='</div></li>';
					
					var uhtml = '';
					
						
						//uhtml+='<a href="'+path+'/dataserver/'+info.id+'" target="_blank" class="name">'+info.title+'</a>';	
						uhtml+='<div class="w-goods-record">';
						uhtml +='<p class="w-goods-owner f-txtabb">';
						uhtml+='获得者：<a rel="nofollow" class="blue" href="'+path+'/uname/'+(1000000000 + parseInt(info.uid))+'" target="_blank"><b>';	
						uhtml+=info.user;
					uhtml+='</b></a></p>';
					uhtml+='<p>本次1元淘：'+info.cishu+'次</p>';
					uhtml+='<p>本次1元淘码：'+info.q_user_code+'</p>';
					uhtml+='<p class="w-goods-ratio">回报率：<b class="txt-red">'+info.huibao+'</b>&nbsp;倍</p>';
					
					uhtml+='</div>';

					var divl = $("#"+div).find('li');
					var len = divl.length;			
					if(len==4 && len  >0){
						var this_len = len - 1;
						//divl[this_len].remove();
						divl.eq(this_len).remove();
					}			
					$("#"+div).prepend(html);					
					//var div_li_obj = $(".countdown_li").eq(0).find(".w-countdown-nums");
					var div_li_obj = $(".countdown_li .w-countdown-nums").eq(0);
					//setInterval(function(){gg_show_Time_fun(div_obj,info.times);},123);
					var data = new Array();
						data['id'] = info.id;
						data['path'] = path;							
					info.times = (new Date().getTime())+(parseInt(info.times))*1000;					
					gg_show_Time_fun(info.times,div_li_obj,uhtml,data,info.id);				
				}//	
				
				function gg_show_time_init(div,path,gid){	
					window.setTimeout("gg_show_time_init()",5000);	
					if(!window.GG_SHOP_TIME){	
						window.GG_SHOP_TIME = {
							gid : '',
							path : path,
							div : div,
							arr : new Array()
						};
					}
					$.get(GG_SHOP_TIME.path+"/api/getshop/lottery_shop_json/"+new Date().getTime(),{'gid':GG_SHOP_TIME.gid},function(indexData){																									
							var info = jQuery.parseJSON(indexData);		
							
							if(info.error == '0' && info.id != 'null'){							
								if(!GG_SHOP_TIME.arr[info.id]){
											GG_SHOP_TIME.gid =  GG_SHOP_TIME.gid +'_'+info.id;		
											GG_SHOP_TIME.arr[info.id] = true;											
											gg_show_time_add_li(GG_SHOP_TIME.div,GG_SHOP_TIME.path,info);							
								}			
							}			
					});	
						
				}