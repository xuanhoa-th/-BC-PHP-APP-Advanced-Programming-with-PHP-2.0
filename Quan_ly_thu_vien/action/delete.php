<?php
include "../database/DBConnect.php";
include "../class/Library.php";
include "../class/LibraryDB.php";
include "../class/LibraryManager.php";
$id = $_REQUEST['id'];
$liManager = new LibraryManager();
$liManager->destroy($id);
header('Location: ../index.php');