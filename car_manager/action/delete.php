<?php
include "../database/DBConnect.php";
include "../class/CarDB.php";
include "../class/CarManager.php";
$id = $_REQUEST['id'];
$carManager = new CarManager();
$carManager->destroy($id);
header('Location: ../category.php');
//var_dump($id);
