<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    $nameArray = [6,8,1,4,7,9,20,99,44];
    function FinMin($arr)
    {
        $min = $arr[0];
        $index = 0;
        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] < $min) {
               $min = $arr[$i];
               $index = $min;
            }
        }
        return $index;
    }

    echo "Số nhỏ nhất trong dãy" . " " . " là: " . "  " . FinMin($nameArray);
?>
</body>
</html>