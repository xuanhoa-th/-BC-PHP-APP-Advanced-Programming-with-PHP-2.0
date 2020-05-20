<?php 
	include 'header.php';
	
	
if(isset($_POST['email'])){
		$err=[];
		$email = $_POST['email'];
		$password = $_POST['password'];
		// echo($password); die;

		$test_email = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");

		// var_dump($test_email);
		if(mysqli_num_rows($test_email) == 1){
			$sql = mysqli_fetch_assoc($test_email);
			//var_dump($sql); die();
			$pass = password_verify($password,$sql['password']);
			
			
			if($pass){
				
				$_SESSION['ac'] =  $sql;
				$_SESSION['gh'] = ['1'=>'1'];
				header('location: index.php');
			}
			else{
				$err['password'] = 'password khoản không đúng';
			}
		}
		else{
			$err['email'] = 'email khoản không đúng';
		}
		
		
		
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
				
				
			
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	</div>
 <?php 
 include 'footer.php';
  ?>