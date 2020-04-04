<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tìm giá trị nhỏ nhất trong mảng</title>
</head>
<body>
<?php 


	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name = $_POST['name'];
		// var_dump($_POST['name']);

}

 ?>

<form method="post">
	 Nhập vào dãy số nguyên:<input type="number" name="name">
	 <button type="submit">Số nhỏ nhất:</button>
</form>
</body>
</html>