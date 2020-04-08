<?php
include "func.php";
$Fan1 = new fan();
echo "Fan 1:";
echo "<br>";
$Fan1->setpeedSlow();
$Fan1->setRadiud(10);
$Fan1->setColor('yellow');
$Fan1->setStatus();
$Fan1->toString();
echo "<hr>";
echo  "Fan 2 :";
echo '<br>';
$Fan2 = new fan();
$Fan2->toString();
$Fan2->setpeedMedium();
$Fan2->setRadiud(5);
$Fan2->setColor('blue');

 