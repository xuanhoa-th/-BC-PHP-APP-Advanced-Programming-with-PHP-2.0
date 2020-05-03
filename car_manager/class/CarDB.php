<?php


class CarDB
{
    protected $conn;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->conneect();
    }
    // lay tat ca du lieu tu db
    public function getAll(){
        //chuan  bi cau lenh truy van
        $sql = "SELECT * FROM product;";
        //truy van
        $stmt = $this->conn->query($sql);
//        su ly ket qua
        $result = $stmt->fetchAll();
        $cars = [];
        foreach ($result as $item){
            $car = new Car($item['id'],$item['name'],$item['type'],$item['price']);
            array_push($cars, $car);
        }
        return $cars;
    }
    public function delete($id){
        //b1; chuan bi cau lech sql
        $sql = "DELETE FROM car_manager WHERE id = :id ";
        $stmt = $this->conn->prepare($sql);
        //b2: gan gia tri vao
        $stmt->bindParam(":id", $id);
        //b3: thuc thi
        $stmt->execute();
    }
    public function add($car){
        $sql = "INSERT INTO product(id,name,type,price) VALUES (:id,:name,:type ,:price)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $car->getId());
        $stmt->bindParam(":name", $car->getName());
        $stmt->bindParam(":type", $car->getType());
        $stmt->bindParam(":price", $car->getPrice());
        $stmt->execute();
    }
}