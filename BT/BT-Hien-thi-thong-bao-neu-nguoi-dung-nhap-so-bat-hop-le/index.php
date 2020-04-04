<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "1.php";

    define("ADDITION", "+");
    define("DEDUTION", "-");
    define("DIVISION", "/");
    define("MULTYPLY", "*");

    $x = $_REQUEST['x'];
    $y = $_REQUEST['y'];
    $operation = $_REQUEST['operation'];

    $calculator = new Calulator();

    switch ($operation) {
        case ADDITION:
            try {
                echo $calculator->sum($x, $y);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            break;
        case DEDUTION:
            try {
                echo $calculator->sub($x, $y);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            break;
        case DIVISION:
            try {
                echo $calculator->divison($x, $y);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            break;
        case MULTYPLY:
            try {
                echo $calculator->multiply($x, $y);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            break;
        default:
            echo 'by zero';
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
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <title>Document</title>
</head>
<body>
<div class="container">
    <h3>Calulator</h3>
    <form action="" method="post">
        So thu 1:
        <input type="text" name="x">
        <br>
        Phép tính:
        <select id="" name="operation">
            <option>Lựa chọn</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
        <br>
        So thu 2:
        <input type="text" name="y">
        <button type="submit">Ket qua</button>
    </form>
</div>

</body>
</html>