<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    include "../class/Student.php";
    include "../class/StudentManager.php";
    $index = $_REQUEST['index'];
    $name = $_REQUEST['name'];
    $date = $_REQUEST['date'];
    $adrees = $_REQUEST['adrees'];
    $location = $_REQUEST['location'];
    $detail = $_REQUEST['detail'];

    $studentManager = new StudentManager("../data/data.json");
    $student = $studentManager ->getStudentsByIndex($index);
    $student->setname($name);
    $student->setdate($date);
    $student->setadrees($adrees);
    $student->setlocation($location);
    $student->setdetail($detail);

    $studentManager-> updateStudent($index,$student);
    header("Location: ../index.php");
}