<?php
include_once "Classes/DanceFloor.php";

$danceFloor = new DanceFloor();

$danceFloor->addDancer('Peter', 'male');
$danceFloor->addDancer('Tom', 'male');
$danceFloor->addDancer('Bill', 'male');
$danceFloor->addDancer('Tony', 'male');
$danceFloor->addDancer("HaHa","female");
$danceFloor->addDancer("Anna","female");
$danceFloor->addDancer("Emily","female");
$danceFloor->addDancer("Rose","female");
$danceFloor->addDancer("Lily","female");
$danceFloor->addDancer("Lavira","female");
$danceFloor->addDancer("Annala","female");

$danceFloor->divideIntoGroups();

echo $danceFloor->pair();

?>
