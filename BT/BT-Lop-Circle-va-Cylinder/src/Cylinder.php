<?php
include "Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color,$height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }
    public function CylindricalVolume(){
        return pi()*$this->radius*2*$this->height;
    }
}