<?php

$sHtml = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>正在调用app</title>
<script language="javascript" src="http://www.bangbbs.com/API/YundabaoSDK.js"></script>
<script language="javascript">
function goapp(){
	var YDB = new YDBOBJ();
	//alert('{$app_data->subject} 账号充值' + '' + '{$app_data->total_fee}' + '----{$app_data->out_trade_no}')
	YDB.SetAlipayInfo('{$app_data->subject} 账号充值', '', '{$app_data->total_fee}', '{$app_data->out_trade_no}');
}
setTimeout(function(){
	document.getElementById('wait').style.display='';
},2000);
</script>
</head>

<body onload="document.getElementById('golink').click();">
<div style="font-size:14px; line-height:22px; display:none;" id="wait">
正在打开支付宝支付窗口，请稍等....
<br />如长时间无变化，请点击下面的连接<br />
<a href="javascript:goapp();" id="golink">打开支付宝进行支付</a></div>
</body>
</html>
EOT;
?>