<?php
include "Reverse.php";

$reverse = new Reverse();
$reverse->push("c");
$reverse->push("o");
$reverse->push("d");
$reverse->push("e");
$reverse->push("g");
$reverse->push("y");
$reverse->push("m");
$arr = [];
for ($i = 0; $i<7;$i++){
    array_push($arr,$reverse->pop());
}
echo "<pre>";
print_r($arr);
echo "</pre>";



