<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../class/Student.php";
    include "../class/StudentManager.php";

    // $index = $_REQUEST['index'];
    $name = $_REQUEST['name'];
    $date = $_REQUEST['date'];
    $adrees = $_REQUEST['adrees'];
    $location = $_REQUEST['location'];
    $detail = $_REQUEST['detail'];
    var_dump($date);

    $student = new Student($name,$date,$adrees,$location,$detail);
    $studentManager = new StudentManager("../data/data.json");
    $studentManager->add($student);
    header("Location: ../category.php");

}