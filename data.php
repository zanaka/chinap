<?php
require_once('menu.php');

$soba = new Menu('そば',600,'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
$ysoba = new Menu('やさいそば',500,'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
$ssoba = new Menu('皿そば',900,'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
$nsoba = new Menu('肉もやしそば',1200,'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

$soba->setOrderCount(2);

$menus = array ($soba,$ysoba,$ssoba,$nsoba);
?>
