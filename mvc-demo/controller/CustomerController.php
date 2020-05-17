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
        $connection = new DBConnection("mysql:host=localhost;dbname=custmvc", "root", "");
        $this->customerDB = new CustomerDB($connection->connect());
    }

    public function add(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET'){
            include 'view/add.php';
        } else {
            $name= $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $address = $_REQUEST['address'];

            $file = $_FILES['image'];
            $fileName = $file['name'];
            move_uploaded_file($file['tmp_name'], 'uploads/'.$fileName);

            $customer = new Customer($name,$email,$address,$fileName);
            $this->customerDB->create($customer);
            $message = 'Customer cr';
            include 'view/add.php';
        }
    }
    public function index(){
        $customers = $this->customerDB->getAll();
        include 'view/list.php';
    }
    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer = $this->customerDB->get($id);
            include 'view/delete.php';
        } else {
            $id = $_POST['id'];
            $this->customerDB->delete($id);
            header('Location: index.php');
        }
    }

}