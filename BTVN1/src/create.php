<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
		include "../function.php";
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$student = [
			"name" => $name,
			"email" => $email,
			"phone" => $phone
		];

		store($student,"../data.json");
		header("Location: ../index.php");
}

 ?>