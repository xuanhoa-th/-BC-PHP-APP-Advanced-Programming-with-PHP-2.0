<?php
include "Stack.php";

$stack = new Stack();
$stack->push("1");
$stack->push("3");
$stack->push("5");
$stack->push("7");
$stack->push("9");

//var_dump($stack->getStack());
echo $stack->pop();
