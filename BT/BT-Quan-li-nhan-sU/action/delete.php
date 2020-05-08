<?php

    include "../class/Student.php";
    include "../class/StudentManager.php";

$index = $_REQUEST['index'];
echo $index;
//deleteStudent($index,"../data.json");


    $studentManager = new StudentManager("../data/data.json");
    $studentManager->deleteStudent($index);
    header("Location: ../category.php");
