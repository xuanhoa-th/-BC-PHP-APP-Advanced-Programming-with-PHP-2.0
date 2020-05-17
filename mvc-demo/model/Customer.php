<?php


namespace Model;


class Customer
{
    public $id;
    public $name;
    public $email;
    public $address;
    public $image;

    public function __construct($name,$email,$address,$image)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->image = $image;
    }

}