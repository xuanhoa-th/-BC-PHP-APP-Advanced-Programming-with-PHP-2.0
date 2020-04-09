<?php
include "class/Student.php";
include "class/StudentManager.php";

$studentManager = new StudentManager("data/data.json");
$students = $studentManager->getStudents();
//var_dump($students);
echo "<pre>";
print_r($students);
echo "</pre>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quan ly sinh vien</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="mai1">
    <h1>Danh sách sinh viên</h1>
    <hr>
</div>
<div class="col-md-7">
    <form class="navbar-form navbar-left" role="search" method="post" action="src/seach.php">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" value="">
        </div>
        <a href="src/edit.php?index=<?php echo $index ?>"><button class="btn btn-success">Tìm kiếm</button></a>
    </form>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>STT</th>
            <th>Họ và tên</th>
            <th>Địa chỉ Email</th>
            <th>Số điện thoại</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
<!--        --><?php //if(isset($students)): ?>
<!--            --><?php //foreach ($students as $index => $student):?>
                <tr>
                    <td> <?php echo $students +1 ?> </td>
                    <td> <?php echo $students -> name ?> </td>
                    <td> <?php echo $students -> email ?> </td>
                    <td> <?php echo $students -> phone ?> </td>
                    <td><a href="src/edit.php?index=<?php echo $index ?>"><button class="btn btn-success">Sửa</button></a></td>
                    <td><a onclick = "return confirm('ban chac muon xoa') " href="src/delete.php?index=<?php echo $index ?>"><button class="btn btn-danger">Xóa</button></a></td>
                </tr>
<!--            --><?php //endforeach ?>
<!--        --><?php //else: ?>
<!--            <tr>-->
<!--                <td>No data</td>-->
<!--            </tr>-->
<!--        --><?php //endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
