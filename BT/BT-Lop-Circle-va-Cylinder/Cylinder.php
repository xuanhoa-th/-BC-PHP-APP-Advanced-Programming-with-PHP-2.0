<?php
include "Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color,$height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
        parent::__construct($radius,$color);
    }
    public function CylindricalVolume(){
        return pi()*$this->radius*2*$this->height;
    }
}