<?php
include_once 'config.php';

//获取用户的名字
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
// var_dump($name);

$type = isset($_GET['type']) ? $_GET['type'] : '';
// var_dump($type);

$resultList  = isset($gameList[$type]['resultList']) ? $gameList[$type]['resultList'] : array();

//结果页标题
$resTitle = isset($gameList[$type]['resultTitle']) ? $gameList[$type]['resultTitle'] : '';
// var_dump($resTitle);

$resDesc = isset($gameList[$type]['resultDesc']) ? $gameList[$type]['resultDesc'] : '';
// var_dump($resDesc);

$count = count($resultList);

$str = crc32($name);
$str = sprintf("%u", $str);  
$strKey = $str % $count;
 // var_dump($count,$str,$strKey);

// $resultInfo = $resultList[ array_rand($resultList) ];
$resultInfo = $resultList[$strKey];
$resultTitle = $resultInfo['title'];
//测试结果补充
$resultTMore = isset($resultInfo['more']) ? $resultInfo['more'] : '';

//测试结果图片
$resultPic = $resultInfo['pic'];

// var_dump($str,$count,$strKey,$resultPic);

// var_dump($resTitle,$name,$resultTitle);
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo sprintf($resTitle,$name,$resultTitle);?></title>
    <link href="css/common_mobile.css" rel="stylesheet" type="text/css" />
    <script src="http://apps.bdimg.com/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <style>
    #mcover {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        display: none;
        z-index: 20000;
    }
    
    #mcover img {
        position: fixed;
        right: 0;
        top: 0;
        width: 100%;
        height: auto;
        z-index: 20001;
    }
    </style>
</head>

<body app-name="test" app-mod="3">
    <div class="wnl-test-name">
        <div class="i-inner">
            <img src="<?php echo $resultPic;?>" class="i-car" />
            <p class="i-result-desc">
            	<span><?php echo sprintf($resDesc,$name);?></span>
            	<span><?php echo $resultTitle;?></span>
            	<span><?php echo $resultTMore;?></span>
            </p>
            <ul class="i-result-btn clearfix">
             <!--    <li><a href="./index.php?type=<?php echo $type;?>" class="i-reset" stat="NameTestResultRe">重新测试</a></li> -->
                <li><a href="http://www.zheyitianshi.com/" class="i-reset" stat="NameTestResultRe">更多好玩点这里</a></li>

                <li><a id="do" class="i-share" stat="NameTestShare">分享出去</a></li>
            </ul>
        </div>
    </div>

    <div id="mcover" onclick="$(this).hide()"><img src="./images/guide.png"></div>
</body>

<script type="text/javascript">
$(function() {
    $("#do").click(function() {
        $('#mcover').show();
        return false;
    });
});

</script>
	<?php
		if(isset($openad) && $openad){
	?>
	
		<script>
			document.write("<script type='text/javascript' src='js/bottomad.js?" + Math.floor(Math.random() * 10000000) + "' charset='UTF-8'><\/script>");
		</script>
	<?php
		}
	?>

    <script>
        document.write("<script type='text/javascript' src='js/tongji.js?" + Math.floor(Math.random() * 10000000) + "' charset='UTF-8'><\/script>");
    </script>
</html>