<?php
include "../database/DBConnect.php";
include "../class/LibraryBook.php";
include "../class/LibraryDB.php";
include "../class/LibraryBook2.php";
include "../class/LibraryManager.php";

$testDB = new LibraryManager();
$library = $testDB->indexBook();
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
                <td> <?php echo $item->getName() ?></td>
                <td> <?php echo $item->getAuthor() ?></td>
                <td> <?php echo $item->getPrice() ?></td>
                <td> <?php echo $item->getVersionNumber() ?></td>
                <td> <?php echo $item->getPublish() ?></td>
                <td><img width="50px" src="<?php echo '../uploads/'.$item->getImage() ?>" alt=""></td>
                <td><a href="editBook.php?code=<?php echo $item->getCode() ?>" class="btn btn-success">Update</a></td>
                <td><a onclick="return confirm('Ban chac chan xoa') " href="../action/deleteBook.php?code=<?php echo $item->getCode()?>" class="btn btn-danger">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <a href="createBook.php" class="btn btn-success">Add new Student</a>

</div>


<?php
include "../footer.php";
?>
