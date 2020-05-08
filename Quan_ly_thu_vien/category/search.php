<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $key = $_REQUEST['search'];
    $conn = mysqli_connect('localhost', 'root', '', 'librarymanager');
    mysqli_set_charset($conn, 'utf8');
    $res = mysqli_query($conn, "SELECT * FROM categories WHERE name = LIKE '%$key%'");
    $kq = mysqli_fetch_all($res);
}

?>

<?php
include "../header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="create.php" class="btn btn-success">Add new category</a>
        </div>

        <div class="col-md-8">
            <h4>Category List</h4>
            <!-- ------------------- -->
            <form class="form-inline my-2 my-lg-0" style="float: right; padding: 0em 17em 0em 0em;" method="post"
                  action="">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" value="<?php echo $key ?>">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <!-- ------------------- -->
            <table class="table table-responsive table-inverse">
                <thead>
                <tr>
                    <th>Code</th>
                    <th>Category Name</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <?php if (isset($kq['name'])): ?>
                        <td> <?php echo $kq['id'] ?> </td>
                        <td> <?php echo $kq['name'] ?></td>
                        <td><a href="" class="btn btn-success">Update</a></td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>
                    <?php else: ?>
                        <td><p style="color: #DE6262">* No data</p></td>
                    <?php endif; ?>

                </tr>

                </tbody>
            </table>
        </div>
    </div>


</div>
<nav aria-label="Page navigation example ">
    <ul class="pagination" style="float: right; padding: 0em 30em 0em 0em;">
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
