<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	$name = $_REQUEST['name'];
	 function checkName($str){
	 	$pattern = '/^\(+\d{2}+\)-\(+\0+[1-9]{9}\)$/';
	 	if(!preg_match($pattern,$str)){
            echo "phone chưa đúng định dạng";

    } else {
            echo " Đăng kí phone thành công ";

    }
	 }
	 checkName($name);
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Validate phone</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <form action="" method="POST" class="navbar-form navbar-left">
    		<h3>Validate phone</h3>
    		<span style="font-size: 18px">phone:</span>
    		<input type="text" class="form-control" id="" name="name">
    		<br>
    		<br>
    	<button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>