<?php include 'header.php' ?>
<?php 
	
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$cat_id = $_POST['cat_id'];
		$price = $_POST['price'];
		$sale_price = $_POST['sale_price'];
		$status = $_POST['status'];

		if(isset($_FILES['image'])){
			$file = $_FILES['image'];
			$file_name = $file['name'];
			move_uploaded_file($file['tmp_name'], '../uploads/'.$file_name);
		}
		else{
			$file_name ='';
		}

		$qr = mysqli_query($conn,"INSERT INTO product(name,cat_id,price,sale_price,status,image) VALUES ('$name','$cat_id','$price','$sale_price','$status','$file_name')");
		if($qr){
			header('location: product.php');
		}
		else{
			echo('hihi0');
		}
	}

	$category = mysqli_query($conn,"SELECT * FROM category");

 ?>
<div class="jumbotron">
	<div class="container">
		<h1>Quản lý danh mục</h1>
		<p>Contents ...</p>
		<p>
			<a class="btn btn-primary btn-lg">Learn more</a>
		</p>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Thêm mới</h3>
				</div>
				<div class="panel-body">
					<form action="" method="POST" role="form" enctype="multipart/form-data">
					
						<div class="form-group">
							<label class="sr-only" for="">label</label>
							<input type="text" class="form-control" id="" placeholder="Tên sản phẩm" name="name">
						</div>
						
						<div class="form-group">
						<label>Danh mục</label>
						<select name="cat_id" id="input" class="form-control" required="required">
							<?php foreach ($category as $value): ?>
							<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
							<?php endforeach ?>
							
						</select>
						
						</div>
						<div class="form-group">
							<label class="sr-only" for="">label</label>
							<input type="text" class="form-control" id="" placeholder="Nhập giá" name="price">
						</div>
						<div class="form-group">
							<label class="sr-only" for="">label</label>
							<input type="text" class="form-control" id="" placeholder="Nhập giá km" name="sale_price">
						</div>
						<label>Chọn ảnh</label>
						<input type="file" name="image" value="">
						<label>Trạng thái</label>
						<input type="radio" class="" id="" name="status"> ẩn
						<input type="radio" class="" id="" name="status"> hiện
						<br>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>	
	
	</div>

</div>
<?php include 'footer.php' ?>