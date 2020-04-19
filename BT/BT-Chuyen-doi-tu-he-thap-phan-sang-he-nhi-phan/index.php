<?php
include "StackInterface.php";
include "Stack.php";

$number = 111;
function decimalToBinary($number)
{
    $stack = new StackInterface();
    do {
        $stack->push($number % 2);
        $number = floor($number / 2);
    } while ($number > 0);
    while (!$stack->isEmpty()) {
        echo $stack->pop();
    }
}

echo "Dãy nhị phân" . " " . $number . " " . "là:" . "<br>";
echo decimalToBinary($number);
