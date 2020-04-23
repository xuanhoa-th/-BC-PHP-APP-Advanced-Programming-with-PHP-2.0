<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	$name = $_REQUEST['name'];
	 function checkName($str){
	 	$pattern = '/^[_a-z0-9]{6,}$/';
	 	if(!preg_match($pattern,$str)){
            echo "account chưa đúng định dạng";

    } else {
            echo " Đăng kí account thành công ";

    }
	 }
	 checkName($name);
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Validate account</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <form action="" method="POST" class="navbar-form navbar-left">
    		<h3>Validate account</h3>
    		<span style="font-size: 18px">Account:</span>
    		<input type="text" class="form-control" id="" name="name">
    		<br>
    		<br>
    	<button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>