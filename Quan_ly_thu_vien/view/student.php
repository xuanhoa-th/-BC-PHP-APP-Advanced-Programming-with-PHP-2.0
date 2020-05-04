<?php
include "../database/DBConnect.php";

include "../class/LibraryDB.php";

include "../class/LibraryStudent.php";
include "../class/LibraryManager.php";

$test = new LibraryManager();
$library = $test->allStudent();

?>
<?php
include "../header.php";
?>

<div class="container">
    <div class="col-md-12">
        <h3>Student List</h3>
    </div>

    <table class="table table-responsive table-inverse">
        <thead>
        <tr>
            <th>Code</th>
            <th>Tên Sinh Viên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Số Điện thoại</th>
            <th>Ảnh</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($library as $item) {?>
            <tr>
                <td> <?php echo $item->getCode() ?> </td>
                <td> <?php echo  $item->getName() ?></td>
                <td> <?php echo 3 ?></td>
                <td> <?php echo 4 ?></td>
                <td> <?php echo 5 ?></td>
                <td> <?php echo 6 ?></td>
                <td></td>
                <td><a href="" class="btn btn-success">Update</a></td>
                <td><a onclick="return confirm('Ban chac chan xoa') " href="" class="btn btn-danger">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <a href="createBook.php" class="btn btn-success">Add new Student</a>

</div>


<?php
include "../footer.php";
?>
