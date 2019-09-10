<?php
include_once (dirname(__FILE__). '/../AbtractsClass/Animal.php');
class Tiger extends Animal{
    public function makeSound()
    {
        return "Tiger: I will eat all of your generation";
    }
}