<?php

include_once "../class/DataInterface.php";
include_once "../class/Database.php";
include_once "../class/Student.php";
include_once "../class/StudentManager.php";

$index = (int)$_GET['index'];

$studentManager  =  new \Controller\StudentManager("../data.json");
$studentManager->delete($index);

header("Location: ../category.php");