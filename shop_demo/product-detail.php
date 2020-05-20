<?php 
	include 'header.php';

	if(isset($_GET['id'])){
		$id = $_GET['id'];

		$product = mysqli_query($conn,"SELECT * FROM product WHERE id = $id");

		$pro = mysqli_fetch_assoc($product);
		// foreach ($product as $value) {
		// 	echo '<pre>';
		// 	print_r($value);
		// }	
	}

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
			<div class="media">
				<div class="col-md-4">
					<a class="pull-left" href="#">
					<img class="media-object" src="uploads/<?php echo $pro['image'] ?>" alt="Image" width="100%">
					</a>
				</div>
				<div class="col-md-8">
					<form action="process-cart.php" method="GET">
					
						<div class="media-body">
							<h4 class="media-heading"><?php echo $pro['name'] ?></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							
							<?php if($pro['sale_price']>0) :?>
							<h3>Giá : <del><?php echo $pro['price']; ?></del></h3>

							<h3>Giá KM:<?php echo $pro['sale_price']; ?></h3>
							<?php else: ?>
								<h3>Giá :<?php echo $pro['price']; ?></h3>
							<?php endif ?>
							<input type="number" name="quantity" value="1">
							<input type="hidden" name="id" value="<?php echo $pro['id']; ?>">
							<input type="hidden" name="action" value="add">
							<button type="submit">Mua ngay</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
 <?php 
 include 'footer.php';
  ?>