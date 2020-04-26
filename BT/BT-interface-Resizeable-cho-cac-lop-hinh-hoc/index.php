<?php
/**
 * Created by PhpStorm.
 * UsersLg: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once 'Resizeable.php';
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$circle = new Circle('Circle 01', 3);
$currentArea = $circle->calculateArea();
echo 'Circle area: ' . $currentArea . '<br />';
$percent = rand(1,100)/100;
$circle->resize($percent);
$newArea =  $circle->calculateArea();
echo 'Circle new area: ' . $newArea  . '<br />';
echo "tang len"."  ". $newArea/$currentArea;
echo "<hr>";

$rectangle = new Rectangle("rectangle", 10 , 6);
//$currentArea = $circle->calculateArea();
$rectangleArea = $rectangle->calculateArea();
echo 'rectangle area: ' . $rectangleArea . '<br />';
$percent = rand(1,100)/100;
$rectangle->resize($percent);
$newArea = $rectangle->calculateArea();
echo 'rectangle new area: ' . $newArea  . '<br />';
echo "tang len"."  ". $newArea/$rectangleArea;

echo "<hr>";

$square = new Square("hinh vuong",6);
$squareArea = $square->calculateArea();
echo 'square area: ' . $squareArea . '<br />';
$percent = rand(1,100)/100;
$square->resize($percent);
$newArea = $square->calculateArea();
echo 'square new area: ' . $newArea  . '<br />';
echo "tang len"."  ". $newArea/$squareArea;

