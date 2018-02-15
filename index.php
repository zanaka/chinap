<?php
// Menuクラスの定義
class Menu {
    public $name;
}

// Menuクラスのインスタンスを各変数に代入
$curry = new Menu();
$pasta = new Menu();
//インスタンスが持つプロパティにアクセスして名前を定義
$curry->name = 'CURRY';
$pasta->name = 'PASTA';

echo $curry->name;
echo '<br>';
echo $pasta->name;

?>