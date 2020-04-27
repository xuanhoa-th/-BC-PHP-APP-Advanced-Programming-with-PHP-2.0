<?php


class Car
{
    protected $id;
    protected $name;
    protected $type;
    protected $price;
    public function __construct($id,$name,$type,$price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
    }

}