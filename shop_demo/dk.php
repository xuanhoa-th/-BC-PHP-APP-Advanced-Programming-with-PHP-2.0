<?php 
	include 'header.php';
	
	if(isset($_POST['name'])){
		$err=[];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm_pass = $_POST['confirm_pass'];
		
		if($name==''){
			$err['name'] = "Ten khong duoc de rong";
		};
		if($email==''){
			$err['email'] = "Ten khong duoc de rong";
		};
		if($password==''){
			$err['password'] = "Ten khong duoc de rong";
		};
		if($confirm_pass==''){
			$err['confirm_pass'] = "Ten khong duoc de rong";
		};
		if($password != $confirm_pass){
			$err['confirm'] = "mat khong khop";
		}

		// $pass = md5($password);
		$pass2 = password_hash($password, PASSWORD_DEFAULT);
		

		mysqli_query($conn,"INSERT INTO users(name,email,password) VALUES ('$name','$email','$pass2')");
	}


 ?>
	<div class="container">
		<div class="jumbotron">
			<div class="container">
				<h1>Đăng ký</h1>
				<p>Contents ...</p>
				<p>
					<a class="btn btn-primary btn-lg">Learn more</a>
				</p>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<form action="" method="POST" class="form" role="form">
			
				<div class="form-group">
					<label class="sr-only" for="">label</label>
					<input type="text" class="form-control" id="" placeholder="Họ và tên" name="name" >
					<?php if(isset($err['name'])) :?>
					<span class="help-block bg-danger"><?php echo $err['name'] ?></span>
					<?php endif ?>
				</div>

				<div class="form-group">
					<label class="sr-only" for="">label</label>
					<input type="email" class="form-control" id="" placeholder="nhập email" name="email" >
					<?php if(isset($err['email'])) :?>
					<span class="help-block bg-danger"><?php echo $err['email'] ?></span>
					<?php endif ?>
				</div>
				<div class="form-group">
					<label class="sr-only" for="">label</label>
					<input type="password" class="form-control" id="" placeholder="Nhập bát" name="password">
					<?php if(isset($err['password'])) :?>
					<span class="help-block bg-danger"><?php echo $err['password'] ?></span>
					<?php endif ?>
				</div>
				<div class="form-group">
					<label class="sr-only" for="">label</label>
					<input type="password" class="form-control" id="" placeholder="Xác nhận mật khẩu" name="confirm_pass">
					<?php if(isset($err['confirm_pass'])) :?>
					<span class="help-block bg-danger"><?php echo $err['confirm_pass'] ?></span>
					<?php endif ?>
					<?php if(isset($err['confirm'])) :?>
					<span class="help-block bg-danger"><?php echo $err['confirm'] ?></span>
					<?php endif ?>
				</div>
				
			
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	</div>
 <?php 
 include 'footer.php';
  ?>