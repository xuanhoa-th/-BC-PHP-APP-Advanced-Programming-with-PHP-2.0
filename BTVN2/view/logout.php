<?php 
session_start();

if ($_SESSION['isAuth']) {
    unset($_SESSION['isAuth']);
    header('Location: ../category.php');
}


 ?>