<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	$name = $_REQUEST['name'];
	 function checkName($str){
	 	$pattern = '/^([A|C|P]){1}([^\!@#$%^&*()]+)([0-9]){3}([G|H|I|K|L|M]+)$/';
	 	if(!preg_match($pattern,$str)){
            echo "Tên lớp chưa đúng định dạng";

    } else {
            echo " Đăng kí lớp học thành công ";

    }
	 }
	 checkName($name);
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Validate tên của lớp học</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <form action="" method="POST" class="navbar-form navbar-left">
    		<h3>[Bài tập] Validate tên của lớp học</h3>
    		<span style="font-size: 18px">Tên lớp học</span>
    		<input type="text" class="form-control" id="" name="name">
    		<br>
    		<br>
    	<button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>