<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../class/Student.php";
    include "../class/StudentManager.php";

        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $group = $_POST['group'];
        $file = $_FILES['file']['tmp_name'];
        $nameFile = $_FILES['file']['name'];
        $pathStofile = "../data/uploads/". $nameFile;
         move_uploaded_file($file,$pathStofile);


        $student = new Student($name, $email, $phone,$nameFile);
        $studentManager = new StudentManager("../data/data.json");
        $studentManager->add($student);
        header("Location: ../index.php");


}