<?php 
	include 'header.php';
	
	// echo '<pre>';
	// print_r($_SESSION);
	// if($ac == ''){
	// 	// echo "<script>
	// 	// 	  	alert('đăng tiếp tục mua');
	// 	// 	  </script>";
	// 	// header('location: login.php');

	// }
	$cus_id = $ac['id'];
	$total = tongtien($carts);

	if(isset($_POST['check_out'])){
		$sql = mysqli_query($conn,"INSERT INTO orders(cus_id,status,total) VALUES ('$cus_id',0,'$total')");
		// var_dump($sql); die();
		$id_order = mysqli_insert_id($conn);
		
		foreach ($carts as $value) {
			$id_pro = $value['id'];
			$quantity = $value['quantity'];
			$sql2 = mysqli_query($conn,"INSERT INTO order_detail(id_order,id_product,quantity) VALUES ('$id_order','$id_pro','$quantity')");
		}
		unset($_SESSION['cart']);
		header('location: sussec.php');
	}
	

 ?>
	<div class="container">
		<div class="jumbotron">
			<div class="container">
				<h1>thanh toán</h1>
				<p>Contents ...</p>
				<p>
					<a class="btn btn-primary btn-lg">Learn more</a>
				</p>
			</div>
		</div>
	</div>
	
	<div class="container">
		<?php if($ac == '') :?>
			<div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Vui long đăng nhập để mua hàng</strong> <a href="login.php" title="" class="btn btn-success">Đăng nhập</a>
				</div>
		<?php else: ?>
		<div class="row">
			<div class="col-md-6">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>MA SP</th>
								<th>Tên sản phẩm<h>
								<th>Ảnh<h>
								<th>Giá<h>
								<th>số lượng</th>
								<th>Thành tiền<h>
								
							</tr>
						</thead>
						<tbody>
						
							<?php foreach ($carts as $value) :?>
							<tr>
								<td><?php echo $value['id'] ?></td>
								<td><?php echo $value['name'] ?></td>
								<td><img src="uploads/<?php echo $value['image'] ?>" alt="" width = "50px"></td>
								<td><?php echo number_format($value['price']) ; ?></td>
								<td><?php echo $value['quantity'] ; ?></td>
								<td><?php echo $value['price'] * $value['quantity'] ; ?></td>
								
							</tr>
						<?php endforeach ?>
						<tr>
							<td>Tổng tiền</td>
							<td><?php echo tongtien($carts) ?></td>
							
						</tr>
						</tbody>
					</table>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Thông tin đặt hàng</h3>
					</div>
					<form action="" method="POST" class="form" role="form">
				
					<div class="form-group">
						<label class="sr-only" for="">label</label>
						<input type="text" class="form-control" id="" placeholder="Người đặt hàng" name="name" value="<?= $ac['name']?>">
					</div>
					<div class="form-group">
						<label class="sr-only" for="">label</label>
						<input type="text" class="form-control" id="" placeholder="Địa chỉ nhận" name="address"  value="<?= $ac['address']?>">
					</div>
					<div class="form-group">
						<label class="sr-only" for="">label</label>
						<input type="text" class="form-control" id="" placeholder="SDT" name="phone" value="<?= $ac['phone']?>">
					</div>
				
					
				
					<button type="submit" class="btn btn-primary" name="check_out">Thanh toán</button>
				</form>
				</div>
			</div>
			
		</div>
	<?php endif ?>
	</div>
 <?php 
 include 'footer.php';

  ?>
  