<?php
namespace Services ;

class ProductMannager
{
private $product;
public function __construct()
{
    $this->product = [];
}
public function add($product){
    $this->product[] = $product;
}
    public function getProduct()
    {
        return $this->product;
    }
}