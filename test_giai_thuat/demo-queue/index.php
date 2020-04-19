<?php
include "Queue.php";
include "Bill.php";

$bill = new Queue(15);
$bill->enQueue("sach van hoc");
$bill->enQueue("sach toan");
$bill->enQueue("sach vat ly");
$bill->deQueue();
var_dump($bill->getQueue());
