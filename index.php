<?php
class Menu {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function hello() {
        echo '私は'.$this->name.'です';
    }
}

$soba = new Menu('そば');
$ysoba = new Menu('やさいそば');
$ssoba = new Menu('皿そば');
$nsoba = new Menu('肉もやしそば');
$menus = array ($soba,$ysoba,$ssoba,$nsoba);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>茶処真壁ちなー</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="menu-wrapper container">
    <h1 class="logo">茶処真壁ちなー</h1>
    <div class="menu-items">
        <?php foreach ($menus as $menu): ?>
            <h3><?php echo $menu->name ?></h3>
        <?php endforeach ?>
    </div>
</div>
</body>
</html>
