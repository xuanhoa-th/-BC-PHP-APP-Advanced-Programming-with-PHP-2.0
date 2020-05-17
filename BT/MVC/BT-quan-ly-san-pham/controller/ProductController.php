<?php
namespace Controller;
use Model\ProductDB;
use Model\Product;

class ProductController
{
    public $ProductDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=product", "root", "");
        $this->ProductDB = new ProductDB($connection->connect());
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            $customer = new Product($name, $email, $address);
            $this->customerDB->create($customer);
            $message = 'Customer created';
            include 'view/add.php';
        }
    }
}