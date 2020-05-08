<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=librarymanager','root','');
}catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}