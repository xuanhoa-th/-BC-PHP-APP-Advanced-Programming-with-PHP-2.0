<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include "../database/DBConnect.php";
    include "../class/Library2.php";
    include "../class/LibraryDB.php";
    include "../class/LibraryManager.php";
    $name = $_REQUEST['name'];



    $library = new Library2($name);
    $libraryManager = new LibraryManager();
    $libraryManager->add($library);

    header('Location: ../index.php');
}
