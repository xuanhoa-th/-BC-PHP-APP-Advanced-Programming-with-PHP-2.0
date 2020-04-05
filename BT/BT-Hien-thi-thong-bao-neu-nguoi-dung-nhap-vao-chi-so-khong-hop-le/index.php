<?php
$str = [14, 36, 56, 30, 11, 69, 43, 81, 11, 92, 27, 61, 26, 82, 12, 92, 68, 86, 91, 61, 12, 13, 9, 22, 44, 17, 52, 29, 18, 19, 51, 3, 70, 22, 34, 49, 28, 35, 8, 83, 46, 40, 12, 66, 11, 57, 20, 0, 3, 93, 60, 35, 99, 77, 36, 40, 6, 51, 73, 32, 90, 20, 81, 66, 78, 82, 7, 51, 72, 24, 29, 22, 57, 14, 94, 43, 65, 76, 48, 83, 88, 11, 78, 78, 73, 40, 80, 50, 83, 26, 28, 56, 22, 15, 73, 94, 93, 38, 95, 40];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    if ($name > 0 && $name < 100) {
        foreach ($str as $key => $value) {
            if ($key == $name) {
                echo "Key=" . $key . ", Value=" . $value;
            }
        }
    } else {
        echo 'Chỉ số vượt quá giới hạn của mảng';
    }
//     	class Seach
//     	{
//     	    public function check($str,$name)
//     	    {
//     	    	if ($name < 0 && $name >= 100) {
//     	        	throw new Exception("Chỉ số vượt quá giới hạn của mảng");
//     	        }

//     	    }

//     	    public function se($str,$name)
//     	    {
//     	    	foreach ($str as $key => $value) {
//     	        if ($key == $name) {
//     	        	return $key,$value;
//     	        }
//     	      }

//     	    }
//     	};
// check($str,$name);
// $seach = new Seach();
// try {
// 	echo $seach -> se($str,$name);
// } catch (Exception $e) {
// 	$e->getMessage();
// }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>[Bài tập] Hiển thị thông báo nếu người dùng nhập vào chỉ số không hợp lệ</title>
</head>
<body>
<form action="" method="post">
    Nhập vào vị trí cần tìm:<input type="number" name="name">
    <button type="submit">Tìm</button>
</form>
</body>
</html>