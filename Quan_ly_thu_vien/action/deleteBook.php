<?php
include "../database/DBConnect.php";
include "../class/LibraryBook.php";
include "../class/CategoryDB.php";
include "../class/CategoryManager.php";
$code = $_REQUEST['code'];
$liManager = new CategoryManager();
$liManager->destroyBooks($code);
header('Location: ../view/book.php');

