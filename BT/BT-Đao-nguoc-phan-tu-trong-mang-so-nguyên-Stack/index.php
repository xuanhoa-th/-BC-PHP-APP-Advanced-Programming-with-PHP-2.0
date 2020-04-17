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
$reverse->pop();
$reverse->pop();
$reverse->pop();
$reverse->pop();
$reverse->pop();
$reverse->pop();
$reverse->pop();
$reverse->push("c");
$reverse->push("o");
$reverse->push("d");
$reverse->push("e");
$reverse->push("g");
$reverse->push("y");
$reverse->push("m");
var_dump($reverse->getStack());



