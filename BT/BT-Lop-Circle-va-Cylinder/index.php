<?php
include "Hinhtron.php";
include "Hinhtru.php";

$circle = new Hinhtron(12,'blue');
echo " Circle Area : ".$circle->acreage()."<br>";
$cylinder = new Hinhtru(12,"blue",10);
echo 'Cylinder : '. $cylinder->cylindricalVolume();

?>
