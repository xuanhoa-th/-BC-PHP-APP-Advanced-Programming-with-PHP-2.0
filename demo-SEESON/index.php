<?php
session_start();
if (!isset($_SESSION['isAuth'])){
    header("location: cre.php");
}