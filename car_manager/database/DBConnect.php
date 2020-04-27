<?php


class DBConnect
{
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->username = 'root';
        $this->password = '123456@Abc';

    }
    public function conneect(){
        try {
            echo "ok";
            $conn = new PDO('mysql:host=localhost:8080;dbname=car_manager');
            return $conn;
        } catch (PDOException $e){
            return $e->getMessage();
        }

    }
}