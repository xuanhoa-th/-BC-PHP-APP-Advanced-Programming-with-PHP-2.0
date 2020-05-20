<?php 
include 'header.php';
session_destroy();
// unset($_SESSION['ac']);
header('location: index.php');
?>