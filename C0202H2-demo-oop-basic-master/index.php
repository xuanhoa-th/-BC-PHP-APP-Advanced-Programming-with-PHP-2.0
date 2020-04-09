<?php
include "class/Student.php";
include "class/StudentManager.php";

$studentManager = new StudentManager("data/data.json");
$students = $studentManager->getStudents();
var_dump($students);
?>
