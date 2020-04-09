<?php
include "Models/Product.php";
include "Services/ProductMannager.php";

use Services\ProductMannager;
use Models\Product;
$productMannager = new ProductMannager();
$productMannager->add(new Product("laptop"));
$productMannager->add(new Product("mobile"));

$products= $productMannager->getProduct();
foreach ($products as $pro){
    echo $pro->getName()."<br>";
}


?>