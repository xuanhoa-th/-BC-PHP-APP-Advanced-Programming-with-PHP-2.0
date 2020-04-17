<?php
include "Queue.php";

$queue = new Queue();
$queue->push("a");
var_dump($queue->getStack());
