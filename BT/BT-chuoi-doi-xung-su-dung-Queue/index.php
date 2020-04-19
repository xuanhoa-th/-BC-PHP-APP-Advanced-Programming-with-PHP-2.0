<?php
include "QueueInterface.php";
include "StackInterface.php";
include "Stack.php";
include "Queue.php";
$string = "codegym ere mygedoc";
function symmetricalString($string)
{
    $stack = new Stack();
    $queue = new Queue();

    for ($i = 0; $i < strlen($string); $i++) {
        $stack->push(substr($string, $i, 1));
        $queue->enQueue(substr($string, $i, 1));
    }
    while (!$stack->isEmpty()) {
        if ($stack->pop() !== $queue->deQueue()) {
            return " chuoi khong doi xung";
        }
    }
    return " chuoi doi xung ";
}
echo symmetricalString($string);