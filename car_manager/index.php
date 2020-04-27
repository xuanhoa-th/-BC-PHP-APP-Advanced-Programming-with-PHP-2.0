<?php
include "database/DBConnect.php";

$db = new DBConnect();
$db->conneect();
var_dump($db->conneect());
