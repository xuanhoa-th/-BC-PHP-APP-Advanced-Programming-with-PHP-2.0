<?php
include "class/Fan.php";
$fan1 = new Fan();
$fan1->setSpeedFast();
$fan1->setRadius(10);
$fan1->setColor('Yellow');
$fan1->setStatus();
echo "Fan 1: <br/>";
$fan1->toString();
echo "<br>";

$fan2 = new Fan();
$fan2->setSpeedMedium();
$fan2->setRadius(5);
echo "<br/>Fan 2: <br/>";
$fan2->toString();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>