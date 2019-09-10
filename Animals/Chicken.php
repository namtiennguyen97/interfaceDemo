<?php
include_once (dirname(__FILE__).'/../AbtractsClass/Animal.php');
include_once (dirname(__FILE__).'/../interfaceClass/Edible.php');
class Chicken extends Animal implements Edible {
    public function makeSound()
    {
        return "Chicken: Do you want to eat some KFC?";
    }
    public function howToEat()
    {
        return " Chicken: Jump to Pochinki spot! I will shoot of you!";
    }
}
