<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    include "../src/student.php";
    include "../src/StudentManager.php";
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];

    $student = new Student($name,$email,$phone);
    $studentManager = new StudentManager("../data/data.json");
    $studentManager->add($student);

}