<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
		include "../function.php";
		$name = $_POST['name'];
		$nameEmail = $_POST['nameEmail'];
		$namePhone = $_POST['namePhone'];
		$student = [
			"name" => $name,
			"nameEmail" => $nameEmail,
			"namePhone" => $namePhone
		];

		store($student,"../data.json");
}

 ?>