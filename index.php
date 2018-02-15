<?php require_once('data.php') ?>

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
            <div class="menu-item">
                <img src="<?php echo $menu->image ?>">
                <h3 class="menu-item-name"><?php echo $menu->name ?></h3>
                <p class="price">¥<?php echo $menu->price ?></p>
            </div>
        <?php endforeach ?>
    </div>
</div>
</body>
</html>
