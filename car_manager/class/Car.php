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

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}