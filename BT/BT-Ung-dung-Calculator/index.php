<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
</head>
<body>
	<style type="text/css">
		span{
			background-color: #ffffff;	
		}
	</style>

<?php 
// echo '<pre>';
// 	print_r($_POST);
// echo '</pre>';
$result = 0;
if (isset($_POST['tinh']) ) {
	$a = (!empty($_POST['Fo']))? $_POST['Fo'] : 0;
	$b = (!empty($_POST['So']))? $_POST['So'] : 0;
	$pt = $_POST['pt'];
	switch ($pt) {
		case '+':
			$result = $a + $b; 
			break;
		case '-':
			$result = $a - $b;
			break;
		case '*':
			$result = $a * $b;
			break;
		case '/':
			// $result = $a / $b;
			if($b !== 0 ){
				$result = $a / $b;
			} else { echo $result = " khong duoc chia cho 0"; }
			break;
	} 
}
 ?>
	<div class="container" style="background-color: aqua;position: absolute;margin-left: 30%; width: 400px; height: 300px">
		<h2>Simple Calculator</h2>
	<form method="post">
		<table>
			<tr>
				<td>First operand:</td>
				<td><input type="" name="Fo"></td>
			</tr>
			<tr>
				<td>Second operand:</td>
				<td><input type="" name="So"></td>
			</tr>
			<tr>
				<td>Operatoer:</td>
				<td >
					<input type="radio" name="pt" value="+" checked>Cộng
					<input type="radio" name="pt" value="-">Trừ
					<input type="radio" name="pt" value="*">Nhân
					<input type="radio" name="pt" value="/">Chia
				</td>
			</tr>
			<tr>
				<td>Result:</td>
				<?php { ?>
				<td><input type="" name="" value=" <?php echo $result  ?> "></td>
				<?php } ?>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="tinh">Submit</button></td>
			</tr>
		</table>
	</form>
	</div>
	
</body>
</html>