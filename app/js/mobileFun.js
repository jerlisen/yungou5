$(document).ready(function(){var o=500;var H=1000;var E=93;var y=null;var d=null;var n=null;var L=null;var m=null;var g=true;var u=false;var M=0;var a=$("#divHead");var K=$("#divBox");var J=$("#part1");var k=$("#part2");var A=$("#part3");var e=$("#part4");var q=$("#part5");var r=$("#divTip");var x=$("#divPage");var p=$("#divReturnTop");var i=null;var z=null;var c=-1;var D=680;var G=function(){D=$(window).height();K.parent().height(D*5);J.height(D);k.height(D);A.height(D);e.height(D);q.height(D);x.css("top",(D-x.height())/2+"px")};G();$(window).resize(function(){G()});var t=["<h4>客户端 v3.2</h4><h3>全新体验  发现更多精彩</h3>","<h3>简约视觉  更加快捷</h3><h4>全新视觉设计，操作更加快捷！</h4>","<h3>新增搜索更方便</h3><h4>想找什么，一搜即达！</h4>","<h3>支付方式更便捷</h3><h4>支付方式选择更多更便捷！</h4>","<h3>随时拍照随时晒</h3><h4>手机晒单想拍就拍，想晒就晒！</h4>"];var l=function(){var P=J.find("div.part1_phone");var O=[J.find("div.part1_search"),J.find("div.part1_card"),J.find("div.part1_wx")];var Q=[{top1:"-404px",top2:"259px",top3:"635px"},{top1:"-177px",top2:"171px",top3:"635px"},{top1:"-239px",top2:"210px",top3:"635px"}];var N=[J.find("div.part1_circle1"),J.find("div.part1_circle2"),J.find("div.part1_pic1"),J.find("div.part1_pic2")];var R=[{bottom1:"-35px",bottom2:"130px",bottom3:"630px"},{bottom1:"-88px",bottom2:"169px",bottom3:"635px"},{bottom1:"-150px",bottom2:"28px",bottom3:"635px"},{bottom1:"-176px",bottom2:"0px",bottom3:"630px"}];this.show=function(S){p.hide();x.find("li").eq(0).addClass("active").siblings().removeClass("active");K.animate({marginTop:"0px"},{queue:false,duration:g?0:o,complete:function(){g=false;r.html(t[0]);$.each(O,function(T){$(O[T]).css({top:Q[T].top1,opacity:"0"}).fadeIn().animate({top:Q[T].top2,opacity:1},{queue:false,duration:H+T*110})});$.each(N,function(T){$(N[T]).css({bottom:R[T].bottom1,opacity:"0"}).fadeIn().animate({bottom:R[T].bottom2,opacity:1},{queue:false,duration:H+T*110,complete:function(){P.prevAll("div").fadeIn("slow");clearInterval(i);i=setInterval(j,200);if(S!=undefined){S()}}})})}})};this.hide=function(S){clearInterval(i);i=null;P.prevAll("div").fadeOut("fast");$.each(O,function(T){$(O[T]).animate({top:Q[T].top3,opacity:0},{queue:false,duration:H,complete:function(){$(this).fadeOut().css({top:Q[T].top1});P.prevAll("div").fadeOut("fast")}})});$.each(N,function(T){$(N[T]).animate({bottom:R[T].bottom3,opacity:0},{queue:false,duration:H,complete:function(){$(this).fadeOut().css({bottom:R[T].bottom1});if(T==N.length-1){p.show();if(S!=undefined){S()}}}})})}};var F=[];var I=function(){for(var N=0;N<7;N++){F[N]=N+1}F.sort(function(){return 0.5-Math.random()})};var j=function(){if(F.length<=0){I()}var N=F.pop();var O=J.find("div.stars"+N);if(O!=null&&O!=undefined){O.fadeOut("normal",function(){if(i==null||i==undefined){O.hide()}else{O.fadeIn("normal")}})}};var C=function(){var S=k.find("div.part2_packs");var O=k.find("div.part2_phone");var P=k.find("div.part2_shape");var T=k.find("div.part2_people");var Q={left1:"409px",left2:"354px",left3:"-150px"};var N={top1:"-500px",top2:"5px",top3:"594px"};var R={left1:"-160px",left2:"-105px",left3:"500px"};this.show=function(U){x.find("li").eq(1).addClass("active").siblings().removeClass("active");K.animate({marginTop:"-"+(D)+"px"},{queue:false,duration:o,complete:function(){r.html(t[1]);T.css({left:R.left1,opacity:"0"}).fadeIn().animate({left:R.left2,opacity:1},{queue:false,duration:H});S.css({left:Q.left1,opacity:"0"}).fadeIn().animate({left:Q.left2,opacity:1},{queue:false,duration:H});O.css({top:N.top1,opacity:"0"}).fadeIn().animate({top:N.top2,opacity:1},{queue:false,duration:H,complete:function(){P.fadeIn("slow");if(U!=undefined){U()}}})}})};this.hide=function(U){P.fadeOut("fast");T.animate({left:R.left3,opacity:0},{queue:false,duration:H,complete:function(){$(this).fadeOut().css({left:R.left1})}});S.animate({left:Q.left3,opacity:0},{queue:false,duration:H,complete:function(){$(this).fadeOut().css({left:Q.left1})}});O.animate({top:N.top3,opacity:0},{queue:false,duration:H,complete:function(){$(this).fadeOut().css({top:N.top1});if(U!=undefined){U()}}})}};var f=function(){var P=A.find("div.part3_people");var R=A.find("div.part3_balloons");var O=A.find("div.part3_search");var N={left1:"380px",left2:"9px",left3:"-220px"};var Q={top1:"600px",top2:"0px",top3:"-250px"};this.show=function(S){x.find("li").eq(2).addClass("active").siblings().removeClass("active");K.animate({marginTop:"-"+(D*2)+"px"},{queue:false,duration:o,complete:function(){r.html(t[2]);P.css({left:N.left1,opacity:"0"}).fadeIn().animate({left:N.left2,opacity:1},{queue:false,duration:H});R.css({top:Q.top1,opacity:"0"}).fadeIn().animate({top:Q.top2,opacity:1},{queue:false,duration:H,complete:function(){O.fadeIn("slow");if(S!=undefined){S()}}})}})};this.hide=function(S){O.fadeOut("slow");P.animate({left:N.left3,opacity:0},{queue:false,duration:H,complete:function(){$(this).fadeOut().css({left:N.left1})}});R.animate({top:Q.top3,opacity:0},{queue:false,duration:H,complete:function(){$(this).fadeOut().css({top:Q.top1});if(S!=undefined){S()}}})}};var s=function(){var O=e.find("div.part4_clouds");var Q=e.find("div.part4_card");var N={left1:"430px",left2:"-26px",left3:"-326px"};var P={top1:"-400px",top2:"172px",top3:"640px"};this.show=function(R){x.find("li").eq(3).addClass("active").siblings().removeClass("active");K.animate({marginTop:"-"+(D*3)+"px"},{queue:false,duration:o,complete:function(){r.html(t[3]);O.css({left:N.left1,opacity:"0"}).fadeIn().animate({left:N.left2,opacity:1},{queue:false,duration:H});Q.css({top:P.top1,opacity:"0"}).fadeIn().animate({top:P.top2,opacity:1},{queue:false,duration:H,complete:function(){if(R!=undefined){R()}}})}})};this.hide=function(R){O.animate({left:N.left3,opacity:0},{queue:false,duration:H,complete:function(){$(this).fadeOut().css({left:N.left1})}});Q.animate({top:P.top3,opacity:0},{queue:false,duration:H,complete:function(){$(this).fadeOut().css({top:P.top1});if(R!=undefined){R()}}})}};var b=function(){var R=q.find("div.part5_clouds");var P=q.find("div.sun");var O=q.find("div.part5_phone");var S=q.find("div.part5_people");var Q={left1:"460px",left2:"4px",left3:"-300px"};var N={top1:"620px",top2:"46px",top3:"-570px"};this.show=function(T){x.find("li").eq(4).addClass("active").siblings().removeClass("active");K.animate({marginTop:"-"+(D*4)+"px"},{queue:false,duration:o,complete:function(){r.html(t[4]);R.css({left:Q.left1,opacity:"0"}).fadeIn().animate({left:Q.left2,opacity:1},{queue:false,duration:H});O.css({top:N.top1,opacity:"0"}).fadeIn().animate({top:N.top2,opacity:1},{queue:false,duration:H,complete:function(){P.fadeIn("slow");S.fadeIn("slow");if(T!=undefined){T()}}})}})};this.hide=function(T){P.fadeOut("slow");S.fadeOut("slow");R.animate({left:Q.left3,opacity:0},{queue:false,duration:H,complete:function(){$(this).fadeOut().css({left:Q.left1})}});O.animate({top:N.top3,opacity:0},{queue:false,duration:H,complete:function(){$(this).fadeOut().css({top:N.top1});if(T!=undefined){T()}}})}};y=new l();d=new C();n=new f();L=new s();m=new b();var w=function(N){if(!u){u=true;clearInterval(z);c=N;if(N<0){switch(M){case 1:y.hide(function(){d.show(function(){M=2;u=false;B()})});break;case 2:d.hide(function(){n.show(function(){M=3;u=false;B()})});break;case 3:n.hide(function(){L.show(function(){M=4;u=false;B()})});break;case 4:L.hide(function(){m.show(function(){M=5;u=false;B()})});break;default:u=false;B();break}}else{switch(M){case 5:m.hide(function(){L.show(function(){M=4;u=false});B()});break;case 4:L.hide(function(){n.show(function(){M=3;u=false});B()});break;case 3:n.hide(function(){d.show(function(){M=2;u=false});B()});break;case 2:d.hide(function(){y.show(function(){M=1;u=false});B()});break;default:u=false;B();break}}}};var v=function(N){var O=0;if(!N){N=window.event}if(N.wheelDelta){O=N.wheelDelta/120}else{if(N.detail){O=-N.detail/3}}if(O){w(O)}if(N.preventDefault){N.preventDefault()}N.returnValue=false};if(window.addEventListener){window.addEventListener("DOMMouseScroll",v,false)}window.onmousewheel=document.onmousewheel=v;var h=function(){var N=null;switch(M){case 1:N=y;break;case 2:N=d;break;case 3:N=n;break;case 4:N=L;break;case 5:N=m;break}return N};x.find("li").each(function(O,N){$(this).click(function(){if((O+1)==M){return}if(u){return}u=true;var Q=h();var P=function(){};switch(O){case 0:P=function(){M=1;y.show(function(){u=false})};break;case 1:P=function(){M=2;d.show(function(){u=false})};break;case 2:P=function(){M=3;n.show(function(){u=false})};break;case 3:P=function(){M=4;L.show(function(){u=false})};break;case 4:P=function(){M=5;m.show(function(){u=false})};break}K.animate({marginTop:"-"+(D*O)+"px"},{queue:false,duration:800,complete:function(){P();Q.hide()}});return false})});$("body,html").keyup(function(N){if(u){return}var O=window.event?N.keyCode:N.which;if(O==38){w(1)}if(O==40){w(-1)}});p.click(function(){if(u){return}u=true;var N=h();K.animate({marginTop:0},{queue:false,duration:800,complete:function(){u=false;c=-1;M=1;y.show();N.hide()}});return false});var B=function(){return};u=true;y.show(function(){M=1;u=false;B()})});