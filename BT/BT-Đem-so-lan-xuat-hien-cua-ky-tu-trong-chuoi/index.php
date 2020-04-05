<?php
$arr = [1, 2, 6, 3, 4, 5, 7, 8, 9, 10, 11, 12, 15, 19, 32, 42, 40, 20, 2, 4, 5, 11, 5, 15, 1, 3, 8, 6, 2, 9];
$cout = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    for ($i = 0; $i < count($arr); $i++) {
        if ($name == $arr[$i]) {
            $cout++;
        }
    }
    echo "Số" . " " . $name . " " . "lặp lại" . " " . $cout . ' ' . "lần";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>[Bài tập] Đếm số lần xuất hiện của ký tự trong chuỗi</title>
</head>
<body>
<form action="" method="post">
    Nhập vào giá trị n:<input type="number" name="name">
    <button type="submit">Tim kiem</button>
</form>
</body>
</html>