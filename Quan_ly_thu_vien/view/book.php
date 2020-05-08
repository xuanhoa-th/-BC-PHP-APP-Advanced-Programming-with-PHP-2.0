<?php
include "../database/DBConnect.php";
include "../class/LibraryBook.php";
include "../class/Category.php";
include "../class/CategoryDB.php";
include "../class/CategoryManager.php";

$testDB = new CategoryManager();
$library = $testDB->indexBook();
?>
<?php
include "../header.php";
?>
<div class="container">
    <div class="col-md-12">
        <h3>Book List</h3>
    </div>
    <a href="createBook.php" class="btn btn-success">Add new book</a>
    <table class="table table-responsive table-inverse">
        <thead>
        <tr>
            <th>Code</th>
            <th>Tên Sách</th>
            <th>Tác giả</th>
            <th>Phiên bản</th>
            <th>Giá</th>
            <th>Ngày công bố</th>
            <th>Ảnh</th>
            <th>Danh mục</th>
            <th>Trạng thái</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($library as $item) { ?>
            <tr>
                <td> <?php echo $item->getCode() ?> </td>
                <td> <?php echo $item->getName() ?></td>
                <td> <?php echo $item->getAuthor() ?></td>
                <td> <?php echo $item->getPrice() ?></td>
                <td> <?php echo $item->getVersionNumber() ?></td>
                <td> <?php echo $item->getPublish() ?></td>
                <td><img width="50px" src="<?php echo '../uploads/' . $item->getImage() ?>" alt=""></td>
                <td> <?php echo $item->getCategoryId() ?></td>
                <?php $check = ($item->getStatus() == 1) ? 'Còn sách' : 'Hết sách' ?>
                <td> <?php echo $check ?></td>
                <td><a href="editBook.php?code=<?php echo $item->getCode() ?>" class="btn btn-success">Update</a></td>
                <td><a onclick="return confirm('Ban chac chan xoa') "
                       href="../action/deleteBook.php?code=<?php echo $item->getCode() ?>"
                       class="btn btn-danger">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>
<nav aria-label="Page navigation example ">
    <ul class="pagination" style="float: right; padding: 0em 15em 0em 0em;">
        <li class="page-item" style="">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>

<?php
include "../footer.php";
?>
