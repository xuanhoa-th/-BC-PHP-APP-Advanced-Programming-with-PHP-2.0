<?php
include "Stack.php";
include "Books.php";


$book = new StackInterface(25);
$book->push("a");
$book->push("2");
$book->push("3");

$book->pop();
$book->pop();
echo "vi tri lay ra dau tien la :"." ".$book->top()."<br>";
var_dump($book->getStack());
