<?php
/**
 * Created by PhpStorm.
 * UsersLg: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once ('Resizeable.php');
include_once ('Circle.php');
include_once ('Colorable.php');
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$shape[0] = new Circle("circle",3);
$shape[1] = new Circle("circle1",4);
$shape[2] = new Rectangle("retangle2",5,6);
$shape[3] = new Rectangle("circle3",6,7);
$shape[4] = new Square("square",7);
//var_dump($shape);
foreach ($shape as $value){
    if (get_class($value) == "Square"){
        echo $value-> howToColor(). "<br>";
    } else {
        echo "dien tich"." ".$value->name." "." = ". $value->calculateArea(). "<br>";
    }

}

//$circle = new Circle('Circle 01', 3);
//echo 'Circle area: ' . $circle->calculateArea() . '<br />';
//echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

