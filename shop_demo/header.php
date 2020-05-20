<?php 
	include 'admin/connect.php';
	include 'function.php';
	session_start();
	// echo "<pre>";
	// var_dump($_SESSION);
	isset($_SESSION['cart'])?$carts = $_SESSION['cart']:$carts = [];
	
	if(isset($_SESSION['ac'])){
		$ac = $_SESSION['ac'];
	}
	else{
		$ac = '';
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TRANG CHU</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style>
		.thumbnail img{
			height: 150px !important;
			width: 100%;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">Trang chu</a>
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="product.php">San pham</a>
				</li>
				<li>
					<a href="#">tin tuc</a>
				</li>
				<li>
					<a href="login.php">đăng nhập</a>
				</li>
				<li>
					<a href="dk.php">đăng ký</a>
				</li>
				<?php if($carts != '') :?>
				<li>
					<a href="show-cart.php">giỏ hàng (<?php echo total_cart($carts) ?>)</a>
				</li>
				<?php else: ?>
					<li>
					<a href="show-cart.php">giỏ hàng</a>
				</li>
				<?php endif ?>
			</ul>
			<?php if(isset($ac['name'])) :?>
			<ul class="nav navbar-nav navbar-right">
				
				<li class="dropdown">

					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $ac['name'] ?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php">Logout</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
			</ul>
		<?php endif ?>
		</div>
	</nav>
