<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	include "1.php";

	define("ADDITION", "+");
	define("DEDUTION", "-");
	define("DIVISION", "/");

	$numberOne = $_REQUEST['numberOne'];
    $numberTwo = $_REQUEST['numberTwo'];
    $operation = $_REQUEST['operation'];

	$calculator = new Calulator();

	switch ($operation) {
		case ADDITION:
			try {
				echo $calculator -> sum($numberOne,$numberTwo);
			} catch (Exception $e) {
				echo $e -> getMessage();
			}
			break;
		 case DEDUTION:
                try {
                    echo $calculator->sub($numberOne, $numberTwo);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
                break;
          case DIVISION:
                try {
                    echo $calculator->divison($numberOne, $numberTwo);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
                break;
		default:
			echo 'chua nhap gi';
			break;
	}
}

 ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    So thu 1:
    <input type="text" name="numberOne">
    <select id="" name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
    </select>
    So thu 2:
    <input type="text" name="numberTwo">
    <button type="submit">Ket qua</button>
</form>

</body>
</html>