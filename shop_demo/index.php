<?php 
include 'header.php';

$category = mysqli_query($conn,"SELECT * FROM category WHERE status = 1");
$product = mysqli_query($conn,"SELECT * FROM product WHERE status = 1");

 ?>
	<div class="container">
		<div class="jumbotron">
			<div class="container">
				<h1>Trang chủ</h1>
				<p>Contents ...</p>
				<p>
					<a class="btn btn-primary btn-lg">Learn more</a>
				</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Danh mục</h3>
					</div>
					<div class="panel-body">
						<ul class="list-group">
							<?php foreach ($category as $value) :?>
							<li class="list-group-item"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Danh sách sản phẩm</h3>
					</div>
					<div class="panel-body">
						<?php foreach ($product as $pro) : ?>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<div class="thumbnail">
								<img src="uploads/<?php echo $pro['image'] ?>" alt="">
								<div class="caption">
									<h3><?php echo $pro['name'] ?></h3>
									
									<p>
										<a href="product-detail.php?id=<?php echo $pro['id'] ?>" class="btn btn-primary">Xem</a>
										<a href="process-cart.php?id=<?php echo $pro['id'] ?>" class="btn btn-default">Mua</a>
									</p>
								</div>
							</div>
						</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
		
	</div>
<?php include 'footer.php' ?>