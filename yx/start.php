<?php
include_once 'config.php';

 //随机参与人数
$joinNums = mt_rand(10000,100000);

// var_dump($joinNums);
//获取游戏类型
$type = isset($_GET['type']) ? $_GET['type'] : '';
// var_dump($type);

$gameInfo  = isset($gameList[$type]) ? $gameList[$type] : array();

// var_dump($type,$gameInfo);

//游戏标题
$title = isset($gameInfo['title']) ? $gameInfo['title'] : '';
$desc = isset($gameInfo['desc']) ? $gameInfo['desc'] : '';

$logo = isset($gameInfo['logo']) ? $gameInfo['logo'] : '';
// var_dump($gameInfo);


?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title;?></title>
    <link href="css/common_mobile.css" rel="stylesheet" type="text/css" />
    <script src="http://apps.bdimg.com/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no" />
</head>

<body app-name="test" app-mod="3">
    <div class="wnl-test-name">
        <img src="<?php echo $logo;?>" class="i-toppic" />
        <div class="i-inner">
            <h3><?php echo $title;?></h3>
            <p class="i-decs">
                <?php echo $desc;?> </p>
            <input type="text" class="i-input" placeholder="请输入您的姓名" /><a href="javascript:;" class="i-submit">开始测试</a>
            <p class="i-join">
                有<em><?php echo $joinNums;?></em>人参与
				
            </p>
			   
        </div>
       
        <div class="i-morelist clearfix">
            <h4><span>有更多人在玩</span></h4>
            <ul>
            	<?php
            		foreach ($recomInfo as $key => $value) {
            	?>

					<li>
                    <a stat="NameTestRelatedClick" href="start.php?type=<?php echo $key;?>">
                    	<img src="<?php echo $value['logo'];?>" />
                    	<span><?php echo $value['title'];?></span>
                    </a>
       		  </li>
            	<?php
            		}

            	?>
              
            </ul>
        </div>
    </div>
    <?php
    	if(isset($qrcodePic)  && !empty($qrcodePic)){
    ?>
    	 <img class="code2" src="<?php echo $qrcodePic;?>">
    <?php
    	}
    ?>
   
   
</body>

<script type="text/javascript">
$(".i-submit").on('click', function() {
    var name = $(".i-input").val();
    if (name) {
        window.location.href = "./result.php?name=" + name + "&type=<?php echo $type;?>" + "&t=" + new Date().getTime();
    } else {
        alert('请输入姓名');
    }
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