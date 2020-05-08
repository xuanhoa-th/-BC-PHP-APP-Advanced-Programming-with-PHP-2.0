<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../database/DBConnect.php";
    include "../class/Login.php";
    include "../class/CategoryDB.php";
    include "../class/CategoryManager.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['email'] = $email;

    $user = new Login($email,$password);
    $libraryManager = new CategoryManager();
    $data = $libraryManager->login();

    foreach ($data as $datalogin) {

        if ($email == $datalogin->getEmail() && $password == $datalogin->getPassword()) {
            $_SESSION['isAuth'] = true;
            header('Location: ../category/list.php');
        } else {
            $_SESSION['isAuth'] = false;
            $message = " Tai khoan mat khau khong dung";
            header('Location: ../index.php');
        }
    }




}
