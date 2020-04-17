<?php
include "Queue.php";
include "QueueInterface.php";

$queue = new Queue();
$queue->enqueue("9");
$queue->enqueue("2");
$queue->enqueue("6");
var_dump($queue->isFull());

?>
