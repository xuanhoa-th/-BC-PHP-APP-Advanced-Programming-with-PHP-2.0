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
				<td>Operatoer:</td>
				<td >
					<!-- <span name="cong">+</span>
					<span name="tru">-</span>
					<span name="nhan">x</span>
					<span name="chia">/</span> -->
					<button type="text" name="cong">+</button>
					<button type="text" name="tru">-</button>
					<button type="text" name="nhan">x</button>
					<button type="text" name="chia">/</button>
				</td>
			</tr>
			<tr>
				<td>Second operand:</td>
				<td><input type="" name="So"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Calculate</button></td>
			</tr>
		</table>
	</form>
	<h2>Result</h2>
	<p></p>
	</div>

	 <?php 
        	if ($_SERVER["REQUEST_METHOD"] == "POST"){
        		$FirstOperand = $_POST["Fo"];
        		$SecondOperand = $_POST["So"];
        		$cong = $_POST["cong"];
        		$tru = $_POST["tru"];
        		$nhan = $_POST["nhan"];
        		$chia = $_POST["chia"];
        		
        		function calculate(){
        			if($SecondOperand !=0){
        				$cong = $FirstOperand + $SecondOperand;
        				
        		     }
        		}
        		// $oneYear = $investment +($investment * $rate/100);
        		// $FutureValue = $oneYear*$years;

        		// echo "<span>Investment Amount:</span>$".$investment."</br>";
        		// echo " <span>Yearly Interest Rate:</span>%".$rate."</br>";
        		// echo " <span>Number of Years:</span>".$years."</br>";
        		// echo " <span>Future Value:</span>$".$FutureValue."</br>";
        	}
         ?>
         
	
</body>
</html>