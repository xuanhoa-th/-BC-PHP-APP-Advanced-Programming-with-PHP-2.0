<?php



if ($_SERVER['REQUEST_METHOD'] == "POST"){
    include "../database/DBConnect.php";
    include "../class/Car.php";
    include "../class/CarDB.php";
    include "../class/CarManager.php";
    $id =  $_REQUEST['id'];
 $name = $_REQUEST['name'];
 $type = $_REQUEST['type'];
 $price = $_REQUEST['price'];

 $car = new Car($id,$name,$type,$price);
 $carManager = new CarManager();
 $carManager->add($car);
}