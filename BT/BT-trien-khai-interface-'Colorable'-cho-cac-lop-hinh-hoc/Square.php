<?php
/**
 * Created by PhpStorm.
 * UsersLg: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
include_once ('Rectangle.php');

class Square extends Rectangle implements Resizeable,Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }
    function howToColor()
    {
        // TODO: Implement howToColor() method.
        echo " Color all four sides";

    }

    function resize($percent)
    {
        // TODO: Implement resize() method.
    }
}