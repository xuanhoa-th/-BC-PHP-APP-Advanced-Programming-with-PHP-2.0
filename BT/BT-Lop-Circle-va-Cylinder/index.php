<?php
include "Circle.php";
include "Cylinder.php";

$circle = new Circle(3,"blue");
echo " Circle Area : ".$circle->calculateAreaToday()."<br>";
$cylinder = new Cylinder(5,"red",10);
echo 'Cylinder area: ' . $cylinder->CylindricalVolume() . '<br />';

?>
