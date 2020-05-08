<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include "../database/DBConnect.php";
    include "../class/Category.php";
    include "../class/CategoryDB.php";
    include "../class/CategoryManager.php";
    $name = $_REQUEST['name'];
    $id = $_REQUEST['id'];
    $library = new Category($name);
    $libraryManager = new CategoryManager();
    $libraryManager->edit($id,$library);
    header('Location: ../category/list.php');
}
