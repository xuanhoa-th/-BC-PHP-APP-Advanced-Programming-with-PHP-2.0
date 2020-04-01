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
	<div class="container" style="background-color: aqua;position: absolute;margin-left: 30%; width: 300px; height: 300px">
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
					<!-- <span name="cong">+</span>
					<span name="tru">-</span>
					<span name="nhan">x</span>
					<span name="chia">/</span> -->
					<!-- <button  name="cong">+</button>
					<button  name="tru">-</button>
					<button  name="nhan">x</button>
					<button  name="chia">/</button> -->
				</td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">+</button></td>
			</tr>
		</table>
	</form>
         

         <?php 
        	if ($_SERVER["REQUEST_METHOD"] == "POST"){
        		$FirstOperand = $_POST["Fo"];
        		$SecondOperand = $_POST["So"];
        		// $cong = $_POST["cong"];
        		// $tru = $_POST["tru"];
        		// $nhan = $_POST["nhan"];
        		// $chia = $_POST["chia"];
        		if($SecondOperand != 0){
        			$cong = 0;
        		    $cong =  $FirstOperand + $SecondOperand;
        		} else {
        			echo 'khong duoc bang o';
        		}
        		
        		// echo '<pre>';
        		// 	print_r($_POST);
        		// echo '</pre>';
        		
        		
 
        	}
         ?>
    <?php {  ?>
	<h2>Result</h2>
	<p><?php echo $cong ?></p> 
	<!-- <p><?php echo $tru ?></p> 
	<p><?php echo $nhan ?></p> 
	<p><?php echo $chia ?></p>  -->
	<?php } ?>
	</div>
	
</body>
</html>