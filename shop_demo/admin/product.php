<?php include 'header.php' ?>
<?php 
	
	// if(isset($_POST['name'])){
	// 	$name = $_POST['name'];

	// 	$qr = mysqli_query($conn,"INSERT INTO category(name) VALUES ('$name')");
	// 	// var_dump($qr);
	// }

	$product = mysqli_query($conn,"SELECT product.*,category.name as cat_name FROM product JOIN category ON product.cat_id = category.id;");

 ?>
<div class="jumbotron">
	<div class="container">
		<h1>Quản lý sản phẩm</h1>
		<p>Contents ...</p>
		<p>
			<a class="btn btn-primary btn-lg">Learn more</a>
		</p>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					
				</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><a href="add-product.php" title="">Thêm mới</a></li>
			
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
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>STT</th>
									<th>Tên </th>
									<th>ảnh </th>
									<th>Danh mục </th>
									<th>giá</th>
									<th>giá km</th>
									<th>Trạng thai</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($product as $value) :?>
								<tr>
									<td>1</td>
									<td><?php echo $value['name'] ?></td>
									<td><img src="../uploads/<?php echo $value['image'] ?>" alt="" width='50px'></td>
									<td><?php echo $value['cat_name'] ?></td>
									<td><?php echo $value['price'] ?></td>
									<td><?php echo $value['sale_price'] ?></td>
									<?php if($value['status'] == 1) :?>
									<td>kích hoạt</td>
									<?php else :?>
										<td>ko kích hoạt</td>
									<?php endif ?>
									<td>
										<a href="delete-cate.php?id=<?php echo $value['id'] ?>" title="" class="btn btn-danger">Xóa</a>
										<a href="edit-pro.php?id=<?php echo $value['id'] ?>" title="" class="btn btn-success">Sửa</a>
									</td>
								</tr>
							<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php include 'footer.php' ?>