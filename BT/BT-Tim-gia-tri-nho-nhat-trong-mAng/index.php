<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tìm giá trị nhỏ nhất trong mảng</title>
</head>
<body>
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $nameArray = (explode(",", $name));
    function FinMin($arr)
    {
        $min = $arr[0];
        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] < $min) {
                $min = $arr[$i];
            }
        }
        return $min;
    }

    echo "Số nhỏ nhất trong dãy" . $name . " " . " là: " . "  " . FinMin($nameArray);
}

?>

<form method="post">
    Nhập vào dãy số nguyên:<input type="text" name="name" placeholder="a,b,c...">
    <button type="submit">Số nhỏ nhất:</button>
</form>
</body>
</html>