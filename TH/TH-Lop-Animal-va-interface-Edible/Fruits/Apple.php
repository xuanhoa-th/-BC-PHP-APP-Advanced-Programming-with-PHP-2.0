<?php
include_once (dirname(__FILE__).'/../AbtractClass/Fruits.php');

class Apple extends Fruit
{
        public function howToEat()
        {
            return "Aple could be slide";
        }
}