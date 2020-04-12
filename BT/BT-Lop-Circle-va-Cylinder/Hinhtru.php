<?php
include_once "Hinhtron.php";


class Hinhtru extends Hinhtron
{
    public $height;

    public function __construct($radius, $color,$height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function cylindricalVolume(){
        return pi()*$this->height*$this->radius*2;
    }

}