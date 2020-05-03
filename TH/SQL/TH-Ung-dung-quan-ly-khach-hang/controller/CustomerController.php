<?php
namespace Controller;
use Model\Customer;
use Model\CustomerDB;
use Model\DBConnection;

class CustomerController
{
    public $customerDB;
    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=manage_customer", "root", " ");
        $this->customerDB = new CustomerDB($connection->connect());
    }
    public function add(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET'){
            include 'view/add.php';
        } else {
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $address = $_REQUEST['address'];

            $customer = new Customer($name,$email,$address);
            $this->customerDB->create($customer);
            $message = 'customer cread';
            include 'view/add.php';
        }
    }

}