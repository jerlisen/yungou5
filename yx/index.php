<?php
include_once 'config.php';
// var_dump($gameList);

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>趣味测试</title>
    <link href="css/common_mobile.css" rel="stylesheet" type="text/css" />
    <script src="http://apps.bdimg.com/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no" />
</head>

<body app-name="test" app-mod="3">
    <div class="wnl-test-name">
        <a href="./start.php?type=shieryue"><img src="images/topbanner.jpeg" class="i-toppic" />
        <div class="i-morelist clearfix">
            <h4><span>大家都在玩</span></h4>
            <ul>
            	<?php 
            		foreach ($gameList as $key => $value) {
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

</body>



</html>