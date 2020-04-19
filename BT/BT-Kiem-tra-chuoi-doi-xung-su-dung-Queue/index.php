<?php
include "Queue.php";

$queue = new QueueInterface();
$queue->push("a");
var_dump($queue->getStack());
