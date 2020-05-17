<?php

namespace Model;
class ProductDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function create($product){
        $sql = "INSERT INTO product(name,price,content,made) VALUES (?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->name);
        $statement->bindParam(2, $product->price);
        $statement->bindParam(3, $product->content);
        $statement->bindParam(4, $product->made);
        return $statement->execute();
    }

}