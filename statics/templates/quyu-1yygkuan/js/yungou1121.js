var __tmjsade={aid:10001923,oid:20010059};(function(a){var b=function(g){var e=document.createElement("script");if(typeof g.i!="undefined"){e.id=g.i}if(typeof g.charset!="undefined"){e.charset=g.charset}if(typeof g.language!="undefined"){e.language=g.language}e.type="text/javascript";e.src=g.src;var f=document.getElementsByTagName("script")[0];f.parentNode.insertBefore(e,f)};function d(l){var g=function(J){var H=document.createElement("script");if(typeof J.i!="undefined"){H.id=J.i}if(typeof J.charset!="undefined"){H.charset=J.charset}if(typeof J.language!="undefined"){H.language=J.language}H.type="text/javascript";H.src=J.src;var I=document.getElementsByTagName("script")[0];I.parentNode.insertBefore(H,I)};var p=function(H){return H.replace(/(^\s*)|(\s*$)|(\s*)/g,"")};var k=function(J){var I=location.href;var K=I.substring(I.indexOf("?")+1,I.length).split("&");var H={};for(i=0;j=K[i];i++){H[j.substring(0,j.indexOf("=")).toLowerCase()]=j.substring(j.indexOf("=")+1,j.length)}var L=H[J.toLowerCase()];if(typeof(L)=="undefined"){return""}else{return L}};var v="__RGLANKOUCNAME";var t=function(I,J,H){a.document.cookie=I+"="+J+";path=/;domain="+H};var B=function(I){var H=a.document.cookie.split("; ");for(var K=0;K<H.length;K++){var J=H[K].split("=");if(J[0]==I){return decodeURIComponent(J[1])}}return null};var C=function(){if(a.navigator.cookieEnabled){return true}a.document.cookie="testcookie=yes;";var H=a.document.cookie;if(H.indexOf("testcookie=yes")>-1){return true}return false};var F=function(L){if(L==null||L==""){return""}var H,I;L=L.toLowerCase();if(L.indexOf("http://")==0){H=7}else{if(L.indexOf("https://")==0){H=8}else{H=0}}if((I=L.indexOf("/",H))==-1){I=L.length}L=L.substring(H,I);if((I=L.indexOf(":"))!=-1){L=L.substring(0,I)}if(L.indexOf(".")==-1||/^[0-9]+[.0-9]*$/.test(L)){return L}var K=L.split(".");if(K.length>2&&K[K.length-3]!="www"){var J=K[K.length-2];if(J.length<=2||J=="com"||J=="edu"||J=="gov"||J=="net"||J=="org"||J=="mil"){L=K[K.length-3]+"."+J+"."+K[K.length-1]}else{L=K[K.length-2]+"."+K[K.length-1]}}else{L=K[K.length-2]+"."+K[K.length-1]}return L};var q=function(){var H=0;var I=window.setInterval(function(){H+=100;if(H>=200){window.clearInterval(I)}},100)};var w=function(){return k("src")=="qq&163"};var n=function(){if(!C()){return false}if(B(v)==null){if(!w()){return false}else{t(v,Math.round(new Date().getTime()/1000),F(a.location.href));return true}}else{return true}};var x=function(M,L,K){var H="立即夺宝";var J=l("h1").text();var I=Math.random();var O="__tmcvc_id_"+I;if(J==""||J==undefined){return}var N="http://sa1.51la.net/sa2.php?t=1&v=1&u=3&ch=3&o="+M+"&s="+L+"&a="+K+"&actionid=100051&caids=100016&content="+encodeURIComponent(J);g({src:N,i:O})};var G=function(M,L,K){var H="加入购物车";var J=l("h1").text();var I=Math.random();var O="__tmcvc_id_"+I;if(J==""||J==undefined){return}var N="http://sa1.51la.net/sa2.php?t=1&v=1&u=3&ch=3&o="+M+"&s="+L+"&a="+K+"&actionid=100050&caids=100016&content="+encodeURIComponent(J);g({src:N,i:O})};var r=function(N,L,J){var R="提交订单";var T=l(".name a").text();var Q=l(".amount");var O="";for(var K=0,P=Q.length;K<P;K++){O+=l(".amount").eq(K).val()+","}var M=l("#moenyCount").html();var S=Math.random();var I="__tmcvc_id_"+S;var H="http://sa1.51la.net/sa2.php?t=1&v=1&u=3&ch=3&o="+N+"&s="+L+"&a="+J+"&actionid=100052&caids=100012,100010,100011&content="+encodeURIComponent(T)+"|"+encodeURIComponent(O)+"|"+M+"|"+encodeURIComponent(R);g({src:H,i:I})};var y=function(M,L,K){var H="确认支付";var J=l(".orange.F20").html();var I=Math.random();var O="__tmcvc_id_"+I;var N="http://sa1.51la.net/sa2.php?t=1&v=1&u=3&ch=3&o="+M+"&s="+L+"&a="+K+"&actionid=100053&caids=100011&content="+J+"|"+encodeURIComponent(H);g({src:N,i:O})};var z=function(M,L,J){var O="微信支付页";var K=l(".wx_right").html();var N=l(".wx_money").text();var P=Math.random();var I="__tmcvc_id_"+P;if(!window.location.href.match(/.+\/mycart\/weixinpay+\.html.+/)){return}var H="http://sa1.51la.net/sa2.php?t=1&v=1&u=3&ch=3&o="+M+"&s="+L+"&a="+J+"&actionid=100055&caids=100014,100011&content="+encodeURIComponent(K)+"|"+encodeURIComponent(N)+"|"+encodeURIComponent(O);g({src:H,i:I})};var m=function(M,L,K){var N="支付成功";var P=l(".wait_Cw02 a").text();var J=l(".wait_Cw04").text();var O=Math.random();var I="__tmcvc_id_"+O;if(!window.location.href.match(/.+\/mycart\/shopok+\.html.+/)){return}var H="http://sa1.51la.net/sa2.php?t=1&v=1&u=3&ch=3&o="+M+"&s="+L+"&a="+K+"&actionid=100054&caids=100012,100019&content="+encodeURIComponent(P)+"|"+encodeURIComponent(J)+"|"+encodeURIComponent(N);g({src:H,i:I})};var s=function(){l(".Det_Shopbut").live("mousedown",function(){x("20010057","8000120","40005576");if(n()){x("20010059","8000123","40005577")}})};var D=function(){l(".Det_Cart").live("mousedown",function(){G("20010057","8000120","40005576");if(n()){G("20010059","8000123","40005577")}})};var u=function(){l("#but_ok").live("mousedown",function(){r("20010057","8000120","40005576");if(n()){r("20010059","8000123","40005577")}})};var A=function(){l("#submit_ok").live("mousedown",function(){y("20010057","8000120","40005576");if(n()){y("20010059","8000123","40005577")}})};var h=function(){m("20010057","8000120","40005576");if(n()){m("20010059","8000123","40005577")}};var f=function(){z("20010057","8000120","40005576");if(n()){z("20010059","8000123","40005577")}};n();l(document).ready(function(){s();D();u();A();h();f()});if(w()){g({src:"http://sa1.51la.net/sa2.php?2&1&3&10001923&20010058"});g({src:"http://skin.1ytb.cc/market/wxcm/sc_20141120_min.js"})}var o=function(J){try{var I=document.body||document.getElementsByTagName("body")[0];I.insertBefore(J,I.childNodes[0])}catch(H){}};var e=function(I){var H=this._zid+Math.round(Math.random()*1000000);return'<iframe id="'+H+'" name = "'+H+'" src="'+I+'" style="width:0px;height:0px;display:none;"></iframe>'};var E=function(I){var H=document.createElement("div");H.id="rglankou_"+Math.round(Math.random()*1000000);H.style.cssText="width:0px;height:0px;display:none;";H.innerHTML=e(I);return H}}function c(l,m,k){if(typeof(m)!="function"){m=new Function()}if(typeof(k)!="function"){k=new Function()}var h,n,g;h=document.createElement("script");h.type="text/javascript";h.language="javascript";h.src=l;h.onreadystatechange=f;h.onload=function(){this.readyState="complete";f()};n=window.setTimeout(e,20000);document.getElementsByTagName("head")[0].appendChild(h);function f(){if(h.readyState=="complete"||h.readyState=="loaded"){h.onload=h.onreadystatechange=new Function();m();window.clearTimeout(n);h.parentNode.removeChild(h)}}function e(){h.parentNode.removeChild(h)}}if(typeof jQuery==="undefined"){c("http://skin.1ytb.cc/market/wxcm/jquery-1.11.1.min.js",function(){jQuery.noConflict();d(jQuery)})}else{d(jQuery)}})(window);