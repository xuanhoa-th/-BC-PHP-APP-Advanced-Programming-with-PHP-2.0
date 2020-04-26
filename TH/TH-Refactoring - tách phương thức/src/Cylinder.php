<?php

/**
 * Created by PhpStorm.
 * UsersLg: phanluan
 * Date: 26/10/2018
 * Time: 22:50
 */
class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = pi() * $radius * $radius;
        $perimeter = 2 * pi() * $radius;
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }
    public function getPerimeter($radius){
        $baseArea = pi() * $radius*2;
        return $baseArea;
    }
    public function getBaseArea($radius){
        $perimeter = 2 * pi() * $radius;
        return $perimeter;
}
}