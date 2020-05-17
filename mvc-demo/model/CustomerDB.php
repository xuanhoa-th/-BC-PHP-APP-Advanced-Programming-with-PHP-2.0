<?php


namespace Model;


class CustomerDB
{
    public $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }

    public function create($customer){
        $sql = 'INSERT INTO customer(name,email,address,image) VALUES (?,?,?,?)';
//        var_dump($customer->image);
//        die();
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $customer->name);
        $stmt->bindParam(2, $customer->email);
        $stmt->bindParam(3, $customer->address);
        $stmt->bindParam(4, $customer->image);
        return $stmt->execute();
    }

    public function getall(){
        $sql = "SELECT * FROM customer";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $customers = [];
        foreach ($result as $row){
            $customer = new Customer($row['name'],$row['email'],$row['address'],$row['image']);
            $customer->id = $row['id'];
            $customers[] = $customer;

        }
        return $customers;
    }

    public function get($id){
        $sql = "SELECT * FROM customer WHERE id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $row = $stmt->fetch();
        $customer = new Customer($row['name'], $row['email'], $row['address'],$row['image']);
        $customer->id = $row['id'];
        return $customer;
    }
    public function delete($id){
        $sql = "DELETE FROM customer WHERE id = ?";
        $statement = $this->connect->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

}