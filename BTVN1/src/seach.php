<?php 
include "../function.php";
$key = $_REQUEST['key'];
echo $key;
getStudentBySeach($name,"../data.json");
header("Location: seachView.php");

 ?>