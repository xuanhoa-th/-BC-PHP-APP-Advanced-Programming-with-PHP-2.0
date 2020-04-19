<?php
include "QueueInterface.php";
include "Queue.php";


$queue = new QueueInterface();
echo "them 3 phan tu vao queue :"."<br>";
$queue->enqueue("phan tu 1");
$queue->enqueue("phan tu 2");
$queue->enqueue("phan tu 3");
var_dump($queue->getQueue());
echo "lay ra 2 phan tu cua queue :"."<br>";
$queue->deQueue();
$queue->deQueue();
echo "kiem tra queue co rong hay khong :"."<br>";
var_dump($queue->isEmpty());
echo "<br>";
echo "them 2 phan tu vao queue :"."<br>";
$queue->enqueue("phan tu 4");
$queue->enqueue("phan tu 5");
var_dump($queue->getQueue());
echo "lay ra 3 phan tu cua queue :"."<br>";
$queue->deQueue();
$queue->deQueue();
$queue->deQueue();
echo "kiem tra queue co rong hay khong :"."<br>";
var_dump($queue->isEmpty());
?>
