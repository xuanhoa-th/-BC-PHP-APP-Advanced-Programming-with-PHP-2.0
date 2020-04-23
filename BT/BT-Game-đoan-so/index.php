<?php
session_start();
$arr = range(1, 100);
function getMid($arr)
{
    if (count($arr) == 1) {
        return $_SESSION['arr'][0];
    } else {
        $left = 0;
        $right = count($arr) - 1;
        $_SESSION['mid'] = floor(($left + $right) / 2);
        return $arr[$_SESSION['mid']];
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = $_POST["answer"];
    if ($answer == "lower") {
        // thay đổi mảng khi chọn thấp hơn
        $arr = array_slice($_SESSION['arr'], 0, $_SESSION['mid']);
    } else if ($answer == "higher") {
        //thay đổi mảng khi chọn cao hơn
        $arr = array_slice($_SESSION['arr'], $_SESSION['mid']);
    } else {
        echo "correct";
        // xoá hết session
        session_destroy();
    }

}
$_SESSION['arr'] = $arr;


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doan so</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <label>Guess Number</label>
    <h2><?php echo getMid($_SESSION['arr']) ?></h2>
    <form method="post">
        <button type="submit" class="btn btn-danger" name="answer" value="lower">Too Low</button>
        <button type="submit" class="btn btn-success" name="answer" value="correct">Correct</button>
        <button type="submit" class="btn btn-primary" name="answer" value="higher">Too High</button>
    </form>

</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
