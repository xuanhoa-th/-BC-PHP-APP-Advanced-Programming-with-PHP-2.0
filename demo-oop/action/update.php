<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    include "../class/Student.php";
    include "../class/StudentManager.php";
    $index = $_REQUEST['index'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];

    $studentManager = new StudentManager("../data/data.json");
    $student = $studentManager ->getStudentsByIndex($index);
    $student->setName($name);
    $student->getEmail($email);
    $student->getPhone($phone);

    $studentManager-> updateStudent($index,$student);
    header("Location: ../index.php");
}