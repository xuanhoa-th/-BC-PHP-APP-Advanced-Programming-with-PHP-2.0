<?php 
include "function.php";
$students = getAllUser("data.json");
 // var_dump($students);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>json</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container-fluid">
	<div class="mai1">
		<h1>Danh sách sinh viên</h1>
		<hr>
	</div>
	<div class="col-md-5">
		<form class="navbar-form navbar-left" role="search" method="post" action="src/create.php">
	       <h3><b>Thêm mới Sinh Viên</b></h3>
	       <br>
	       <span style="font-size: 16px">Họ và tên SV:</span>
	       <input type="text" class="form-control" name="name" >
	       <br>
	       <br>
	       <span style="font-size: 16px">Địa chỉ Email:</span>
	       <input type="text" class="form-control" name="email" >
	       <br>
	       <br>
	       <span style="font-size: 16px">Số điện thoại:</span>
	       <input type="text" class="form-control" name="phone" >
	       <br>
	       <br>
	       <button type="submit" class="btn btn-success">Thêm Sinh Viên</button>
	       
	    </form>
	</div>
	<div class="col-md-7">
				<form class="navbar-form navbar-left" role="search" method="post">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-success">Tìm kiếm</button>
				</form>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>STT</th>
				<th>Họ và tên</th>
				<th>Địa chỉ Email</th>
				<th>Số điện thoại</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php if(isset($students)): ?>
				<?php foreach ($students as $index => $student):?>
			<tr>
				<td> <?php echo $index +1 ?> </td>
				<td> <?php echo $student -> name ?> </td>
				<td> <?php echo $student -> email ?> </td>
				<td> <?php echo $student -> phone ?> </td>
				<td><a href="src/edit.php?index=<?php echo $index ?>"><button class="btn btn-success">Sửa</button></a></td>
				<td><a onclick = "return confirm('ban chac muon xoa') " href="src/delete.php?index=<?php echo $index ?>"><button class="btn btn-danger">Xóa</button></a></td>
			</tr>
			    <?php endforeach ?>
			    <?php else: ?>
			    	<tr>
			    		<td>No data</td>
			    	</tr>
		   <?php endif; ?>
		</tbody>
	</table>
	</div>
	
	
</div>
</body>
</html>