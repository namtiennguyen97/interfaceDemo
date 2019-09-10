<?php
include (dirname(__FILE__).'/../AbstractClass/Fruits.php');
//include_once (dirname(__FILE__).'/../interfaceClass/Edible.php');
class Apple extends Fruits{
    public function howToEat()
    {
        return "Apple: could be cut in piece! it will be Fresh!";
    }
}