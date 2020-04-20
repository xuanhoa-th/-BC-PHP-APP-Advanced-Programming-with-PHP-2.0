<?php
include "Patient.php";

$patient = new Patient();
$patient->enqueue('le van a',5);
$patient->enqueue('le van b',1);
$patient->enqueue('ha van tien',2);

//var_dump($patient->get());
echo "nguoi duoc uu tien la :"." "."<b>". $patient->dequeue()['name']."</b>"." =>"." vi tri so :".$patient->dequeue()['code'];
