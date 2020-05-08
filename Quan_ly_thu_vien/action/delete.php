<?php
include "../database/DBConnect.php";
include "../class/Category.php";
include "../class/CategoryDB.php";
include "../class/CategoryManager.php";
$id = $_REQUEST['id'];
$liManager = new CategoryManager();
$liManager->destroy($id);
header('Location: ../category/list.php');