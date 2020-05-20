<?php include 'header.php' ?>
<?php 
	if(isset($_GET['id'])){
		$id = $_GET['id'];

		$cate = mysqli_query($conn,"SELECT * FROM category WHERE id = $id");
		$cat = mysqli_fetch_assoc($cate);
		// var_dump($cat['name']);
	}
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$status = $_POST['status'];

		$qr = mysqli_query($conn,"UPDATE category SET name = '$name', status = '$status' WHERE id =$id");
		 if($qr){
		header('location: category.php');
		}
		else{
			echo('loi roi');
		}
	}

	$category = mysqli_query($conn,"SELECT * FROM category");

 ?>
<div class="jumbotron">
	<div class="container">
		<h1>Cập nhật danh mục</h1>
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
					<h3 class="panel-title">Sửa</h3>
				</div>
				<div class="panel-body">
					<form action="" method="POST" class="form-inline" role="form">
					
						<div class="form-group">
							<label class="sr-only" for="">label</label>
							<input type="text" class="form-control" id="" placeholder="Tên danh mục" name="name" value="<?php echo $cat['name']?>">
						</div>
						<label>Trang thai</label>
						<input type="radio" name="status" value="0">ẩn
						<input type="radio" name="status" value="1">hiện
						<br>
						<button type="submit" class="btn btn-primary">Cập nhật</button>
					</form>
				</div>
			</div>
		</div>	
		<div class="col-md-9">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Danh sách danh mục</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>STT</th>
									<th>Tên danh mục</th>
									<th>Trạng thai</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($category as $value) :?>
								<tr>
									<td>1</td>
									<td><?php echo $value['name'] ?></td>
									<?php if($value['status'] == 1) :?>
									<td>kích hoạt</td>
									<?php else :?>
										<td>ko kích hoạt</td>
									<?php endif ?>
									<td>
										<a href="delete-cate.php?id=<?php echo $value['id'] ?>" title="" class="btn btn-danger">Xóa</a>
										<a href="edit-cate.php?id=<?php echo $value['id'] ?>" title="" class="btn btn-success">Sửa</a>
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