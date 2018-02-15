<?php
// Menuクラスの定義
class Menu {
    public $name;

    public function hello() {
        echo '私は'.$this->name.'です';
    }
}

// Menuクラスのインスタンスを各変数に代入
$curry = new Menu();
$pasta = new Menu();
//インスタンスが持つプロパティにアクセスして名前を定義
$curry->name = 'CURRY';
$pasta->name = 'PASTA';

$curry->hello();
echo '<br>';
$pasta->hello();

?>