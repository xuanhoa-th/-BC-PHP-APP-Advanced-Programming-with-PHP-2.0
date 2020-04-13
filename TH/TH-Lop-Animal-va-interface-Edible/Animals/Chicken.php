<?php
include_once (dirname(__FILE__).'/../AbtractClass/Animal.php');
include_once (dirname(__FILE__).'/../InterfaceClass/Edible.php');

class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return "chicken: coc coc";
    }
    public function howToEat()
    {
       return "could be Frided";
    }
}