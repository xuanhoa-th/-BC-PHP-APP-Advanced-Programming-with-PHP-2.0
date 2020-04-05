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

		$arr3 = array_merge($arr1,$arr3);//gop mang

		foreach ($arr2 as $value) {
			$arr4 =	array_push($array3,$value);
				echo '<pre>';
					print_r($arr4)	;		
				echo '<pre>';			
		}
		// for ($i = 0; $i <= count($arr2) ; $i++) {
		// 	array_push($array3,$arr2[$i]);
		// 	echo '<pre>';
		// 			print_r($array3)	;		
		// 		echo '<pre>';	
		// }
		

	 ?>
</body>
</html>