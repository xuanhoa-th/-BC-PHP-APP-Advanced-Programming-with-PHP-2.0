<?php


class DBConnect
{
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->username = 'root';
        $this->password = '';

    }
    public function conneect(){
        try {
            $conn = new PDO('mysql:host=localhost;dbname=car_manager', $this->username, $this->password);
            return $conn;
        } catch (PDOException $e){
            return $e->getMessage();
        }

    }
}