<?php
namespace Model;

class Product
{
    public $id;
    public $name;
    public $price;
    public $content;
    public $made;

    public function __construct($name,$price,$content,$made)
    {
        $this->name = $name;
        $this->price = $price;
        $this->content = $content;
        $this->made = $made;
    }


}