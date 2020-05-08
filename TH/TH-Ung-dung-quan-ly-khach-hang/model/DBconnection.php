<?php
namespace Model;
use PDO;

class DBconnection
{
   protected $dsn;
   protected $user;
   protected $password;

   public function __construct($dsn,$user,$password)
   {
       $this->dsn = $dsn;
       $this->password = $password;
       $this->user =$user;
   }
   public function connect(){
       return new PDO($this->dsn,$this->user,$this->password);
   }

}