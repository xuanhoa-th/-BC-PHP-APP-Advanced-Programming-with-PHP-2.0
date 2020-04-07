<?php 
$array = [1,6,7,9,2,4,7,8,5,8,5,65,8,22,65,87,96,12,45];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $X = $_POST["name"];
    $key = array_search($X, $array);
    for ($i = $key; $i <= count($array); $i++) {
          if ($X == $array[$i]) {
              $array[$i] =  $array[$i]+1 ;
              echo '<pre>';
              print_r($array);
              echo '</pre>';
          }
    }
    
    
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>[Bài tập] Xoá phần tử khỏi mảng</title>
</head>
<body>
	<form action="" method="post">
    Nhập vào giá trị can xoa:<input type="number" name="name">
    <button type="submit">Xoa</button>
</form>
</body>
</html>