<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "../database/DBConnect.php";
    include "../class/Library2.php";
    include "../class/LibraryDB.php";
    include "../class/LibraryBook2.php";
    include "../class/LibraryManager.php";
    $code = $_REQUEST['code'];
    $name = $_REQUEST['name'];
    $price =$_REQUEST['price'];
    $author =$_REQUEST['author'];
    $publish =$_REQUEST['publish'];
    $version_number =$_REQUEST['version_number'];
    $category_id =$_REQUEST['category_id'];
    $status =$_REQUEST['status'];


    $file = $_FILES['image'];
    $fileName = $file['name'];
    move_uploaded_file($file['tmp_name'], '../uploads/'.$fileName);


    $library = new LibraryBook2($name,$author,$publish,$version_number,$price,$fileName,$category_id,$status);
    $libraryManager = new LibraryManager();
    $libraryManager-> editBook2($code,$library);
//    var_dump($library);
//    die();
    header('Location: ../view/book.php');
}