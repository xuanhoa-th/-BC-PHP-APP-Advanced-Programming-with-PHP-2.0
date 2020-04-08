<?php
include "Rectangle.php";

$width  = 10;
$height = 20;

$rectangle = new Rectangle($width, $height);
$rectangle->height = 30;
$rectangle->width = 20;
echo '<br>';
echo "chieu cao:" .$rectangle->height;
echo '<br>';
echo "chieu dai:".$rectangle->width;
echo '<br>'; 
echo "chu vi la:". $rectangle->getPerimeter();
echo '<br>';
echo "dien tich la:".$rectangle->getArea();
echo '<br>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<canvas></canvas>
</body>
</html>