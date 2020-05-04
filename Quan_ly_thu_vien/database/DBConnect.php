<?php


class DBConnect
{
    protected $username;
    protected $password ;

    public function __construct()
    {
        $this->username  = 'root';
        $this->password = '123456@Abc';
    }

    public function connect(){
        try {
            return new PDO('mysql:host=localhost;dbname=librarymanager', $this->username, $this->password);
        } catch (PDOException $e){
            return $e->getMessage();
        }
    }

}