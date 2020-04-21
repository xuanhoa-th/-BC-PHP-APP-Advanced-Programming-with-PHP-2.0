
<?php
$array = [1, 2, 6, 3, 4, 5, 7, 8, 9, 10, 11, 12, 15, 19, 32, 42, 40, 20, 2, 4, 5, 11, 5, 15, 1, 3, 8, 6, 2, 9,0,6,7,9,152,2,8,6,3,4,2,8,7,9,12,6,50,7,6,7,33,39,96,91,100];
$count = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    function Search($arr,$value){
    $count = 0;
    for ($i = 0 ;$i< count($arr); $i++){
        if ($value == $arr[$i]){
            $count++;
        }
}
    return $count;
}
echo " Số lần xuất hiện của".' '.$name."là "."=>". Search($array,$name)."lần" ;
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
