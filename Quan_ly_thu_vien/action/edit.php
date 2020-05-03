<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include "../database/DBConnect.php";
    include "../class/Library.php";
    include "../class/Library2.php";
    include "../class/LibraryDB.php";
    include "../class/LibraryManager.php";
    $name = $_REQUEST['name'];
    $id = $_REQUEST['id'];
//    var_dump($id);
//    die();



    $library = new Library2($name);
    $libraryManager = new LibraryManager();
    $libraryManager->edit2($id,$library);
    header('Location: ../index.php');
}
