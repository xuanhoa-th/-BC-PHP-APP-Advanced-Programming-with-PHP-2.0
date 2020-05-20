<?php
include 'admin/connect.php';
session_start();

	// $item1 =  [
	// 	'name'=>'san pham 1',
	// 	'name'=>'san pham 1',
	// 	'name'=>'san pham 1'
	// ];
// $item2 =  [
	// 	'name'=>'san pham 1',
	// 	'name'=>'san pham 1',
	// 	'name'=>'san pham 1'
	// ];
	// $_SESSION['cart']=[
	// 	$item1,
	// 	$item2
	// ];
// session_destroy();

// bước 1 lấy thông sản phẩm được mua thông khóa chính id
(isset($_GET['id']))? $id = $_GET['id'] :  $id=0;
(isset($_GET['quantity']))? $quantity= $_GET['quantity'] :  $quantity=1;
(isset($_GET['action']))? $action= $_GET['action'] :  $action='add';

 // echo $action; die();
// bước 2 thực hiện lấy thông tin từ db theo id

	$pro = mysqli_query($conn,"SELECT * FROM product WHERE id = $id");
	$product = mysqli_fetch_assoc($pro);
	

	$item = [
		'id' => $product['id'],
		'name'=> $product['name'],
		'image'=> $product['image'],
		'price'=> $product['sale_price']>0 ? $product['sale_price'] : $product['price'],
		'quantity'=> $quantity
	];
// buoc 3 thực hiện lưu vào session

// action theem moi
	if($action == 'add'){
		if($_SESSION['cart'][$id]){
			$_SESSION['cart'][$id]['quantity'] +=$quantity;
		}
		else{
			$_SESSION['cart'][$id] = $item;
		}
	}
	
	
// action update
if($action == 'update'){
	$_SESSION['cart'][$id]['quantity'] = $quantity;
}
// action delete
if($action == 'delete'){
	unset($_SESSION['cart'][$id]);
}
// action xóa hêt

if($action =='deleteall'){
	session_destroy();
}
// session_destroy(); die();
	// echo"<pre>";
	// print_r($_SESSION['cart']); die();
// chuyển trang về view cart
	header('location: show-cart.php');
 ?>