<?php
include "Patient.php";

$patient = new Patient();
$patient->enqueue('le van a',5);
$patient->enqueue('le van b',1);

var_dump($patient->get());
echo "<pre>";
    print_r($patient->get());
echo "</pre>";
