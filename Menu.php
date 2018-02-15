<?php

class Menu
{
    private $name;
    private $price;
    private $image;

    public function __construct($name, $price, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    public function hello()
    {
        echo '私は' . $this->name . 'です';
    }

    public function getName() {
        return $this->name;
    }

    public function getImage() {
        return $this->image;
    }
}
?>