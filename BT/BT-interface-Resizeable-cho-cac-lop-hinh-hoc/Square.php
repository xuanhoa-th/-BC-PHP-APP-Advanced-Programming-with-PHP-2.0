<?php
/**
 * Created by PhpStorm.
 * UsersLg: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
include_once ('Rectangle.php');

class Square extends Rectangle implements Resizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
    public function calculateArea(){
        return $this->width * $this->width;
    }
    function resize($percent)
    {
        $currentWidth = $this->width;
        $this->width = $percent* $currentWidth + $currentWidth;
    }
}