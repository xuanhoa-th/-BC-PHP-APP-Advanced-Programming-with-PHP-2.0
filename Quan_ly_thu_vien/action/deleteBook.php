<?php
include "../database/DBConnect.php";
include "../class/LibraryBook.php";
include "../class/LibraryDB.php";
include "../class/LibraryManager.php";
$code = $_REQUEST['code'];
$liManager = new LibraryManager();
$liManager->destroyBooks($code);
header('Location: ../view/book.php');

