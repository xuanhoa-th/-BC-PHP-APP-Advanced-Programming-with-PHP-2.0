<?php 
	include 'header.php';
	
	
	

 ?>
	<div class="container">
		<div class="jumbotron">
			<div class="container">
				<h1>Chi tiết sản phẩm</h1>
				<p>Contents ...</p>
				<p>
					<a class="btn btn-primary btn-lg">Learn more</a>
				</p>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<?php 
				// var_dump($carts);
				if($carts == []):
			 ?>
				<div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Giỏ hàng rỗng</strong> <a href="index.php" title="" class="btn btn-success">Tiếp tực mua hàng</a>
				</div>
			<?php else :?>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>MA SP</th>
							<th>Tên sản phẩm<h>
							<th>Ảnh<h>
							<th>Giá<h>
							<th>Số lượng<h>
							<th>Thành tiền<h>
							<th><h>
						</tr>
					</thead>
					<tbody>
					
						<?php foreach ($carts as $value) :?>
						<tr>
							<td><?php echo $value['id'] ?></td>
							<td><?php echo $value['name'] ?></td>
							<td><img src="uploads/<?php echo $value['image'] ?>" alt="" width = "50px"></td>
							<td><?php echo number_format($value['price']) ; ?></td>
							<td>
								<form action="process-cart.php" method="GET">
									<input type="number" name="quantity" value="<?php echo $value['quantity'] ?>">
									<input type="hidden" name="id" value="<?php echo $value['id'] ?>">
									<input type="hidden" name="action" value="update">
									<button type="submit">Cập nhật</button>
								</form>
							</td>
							<td><?php echo $value['price'] * $value['quantity'] ; ?></td>
							<td>
								<a href="process-cart.php?id=<?php echo $value['id'] ?>&action=delete" title="" class="btn btn-danger">Xóa</a>
							</td>
						</tr>
					<?php endforeach ?>
					<tr>
						<td>Tổng tiền</td>
						<td><?php echo tongtien($carts) ?></td>
						<td> <a href="process-cart.php?action=deleteall" title="">Xóa hêt</a></td>
					</tr>
					</tbody>
				</table>
				<a href="checkout.php" title="" class="btn btn-success">Đặt hàng</a>
			</div>
			<?php endif ?>
		</div>
	</div>
 <?php 
 include 'footer.php';
  ?>