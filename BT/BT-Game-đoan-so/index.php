
<?php
$numbers  = range(1, 100, 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    function binarySearch($numbers,$name){
        $low = 0;
        $high = count($numbers) - 1;
        while ($low <= $high) {
            $mid = (($low + $high) / 2);
            if ($numbers[$mid] > $name) {
                $high = $mid - 1;
            } else if ($numbers[$mid] < $name) {
                $low = $mid + 1;
            } else {
                return TRUE;
            }
        }
        return FALSE;
    }
    if (binarySearch($numbers, $name) !== FALSE) {
        echo "dung voi so toi ngi ra";
    }
}
$array = array("one", "two", "three", "four", "five", "six");
echo $array[array_Rand($array, 1)];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>[Bài tập] Đếm số lần xuất hiện của ký tự trong chuỗi</title>
</head>
<body>
<form action="" method="post">
    Nhập vào số ngẫu nhiên từ 1 đến 100 :<input type="number" name="name">
    <button type="submit">Chơi</button>
</form>
</body>
</html>

