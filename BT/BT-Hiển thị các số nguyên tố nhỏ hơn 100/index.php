<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>[Bài tập] Hiển thị các số nguyên tố nhỏ hơn 100</title>
</head>
<body>
	<?php 
			function checkFrime($n){
				if($n>= 2){
					for ($i = 2; $i <= sqrt($n) ; $i++) {
						if ($n%$i ==0) {
							return false;
						}
					}
					return true;
				}else if ($n < 0 ) {
				return false;
			}

			};

			echo "so nguyen to nho hon 100 la:";
			for ($i = 0; $i <100 ; $i++) {
				if (checkFrime($i)) {
					echo($i." ");
				}
			}

	 ?>
</body>
</html>