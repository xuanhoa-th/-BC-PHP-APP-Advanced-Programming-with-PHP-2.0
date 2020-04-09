<?php 
include "../function.php";
$index = $_REQUEST['index'];
echo $index;
$student = getStudentByIndex($index,"../data.json");
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
	<div class="col-md-10">
		<form class="navbar-form navbar-left" role="search" method="post" action="updata.php">
	       <h3><b>Sữa Sinh Viên</b></h3> 
	       <br>
	       <span style="font-size: 16px">Họ và tên SV:</span>
	       <input type="text" class="form-control" name="name" value="<?php echo $student -> name ?>" >
	       <br>
	       <br>
	       <span style="font-size: 16px">Địa chỉ Email:</span>
	       <input type="text" class="form-control" name="email"  value="<?php echo $student -> email ?>" >
	       <br>
	       <br>
	       <span style="font-size: 16px">Số điện thoại:</span>
	       <input type="text" class="form-control" name="phone"  value="<?php echo $student -> phone ?>" >
	       <br>
	       <br>
	       <button type="submit" class="btn btn-success">Update</button>
	    </form>
	</div>
	
	
</div>
</body>
</html>