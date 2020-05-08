<?php 
include "../function.php";
$index = $_REQUEST['index'];
echo $index;
deleteStudent($index,"../data.json");
header("Location: ../category.php");

 ?>