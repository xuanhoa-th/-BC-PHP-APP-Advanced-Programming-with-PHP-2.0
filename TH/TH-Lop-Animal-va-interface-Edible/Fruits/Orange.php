<?php
include_once (dirname(__FILE__).'/../AbtractClass/Fruits.php');


class Orange extends Fruit
{
    public function howToEat()
    {
       return " orange could be juiced";
    }
}