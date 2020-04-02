<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>[Bài tập] Ứng dụng chuyển đổi tiền tệ</title>
</head>
<body>
	<h2>Ứng dụng chuyển đổi tiền tệ</h2> 
	<?php 
        	if ($_SERVER["REQUEST_METHOD"] == "POST"){
        		$name = $_POST["name"];
        		if($name != 0){
        			$qd = 0 ;
        			$qd = $name * 23000;
        		} else {
        		 echo '<b>Khong duoc de rong USD</b>';
        		}
        	}
    ?>
	<form method="post">
		<?php { ?>
		<span>Nhập số tiền USD</span><input type="number" name="name" value="0" placeholder="<?php echo $name ?>">
		<?php } ?>
		<button type="submit">Quy đổi</button>
	</form>
	<?php { ?>
		<span>Giá trị VND</span><input type="number" name="" value="<?php echo $qd ?>">
	<?php } ?>

		
</body>
</html>