<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function isFind($n)
{ // check n co phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }
    return true;
}

if (isset($_POST['checkPrime'])) {
    $count = 1;
    $findPrime = (int)$_POST['findPrime'];
    $total = 2;
    while ($count <= $findPrime) {
        if (isFind($total)) {
            echo $total . " ";
            $count++;
        }
        $total++;
    }
}
?>

<form method="post">
Nhập số lượng số nguyên tố cần tìm: <input type="text" name="findPrime" placeholder="0" value="<?php echo $findPrime ?>">
<input type="submit" value="Find" name="checkPrime">
</form>

</body>
</html>