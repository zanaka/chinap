<!-- BMIを算出するprogram -->

<?php
$height = 150;
$weight = 55;

$bmi = ($weight / ($height * $height)) * 10000;
echo "BMIは{$bmi}です" ;

?>
