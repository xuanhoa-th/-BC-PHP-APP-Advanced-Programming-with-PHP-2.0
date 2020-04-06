<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gộp mảng</title>
</head>
<body>
	<?php 
		$arr1 = [ 1,8,9,23,7,6,3];
		$arr2 = [ 6,12,98,102,7,4];
		$arr3 = [];

		$arr3 = array_merge($arr1,$arr2);//gop mang
		echo '<pre>';
					print_r($arr3)	;		
		echo '<pre>';
	 ?>
</body>
</html>