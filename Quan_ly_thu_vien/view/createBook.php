<?php

include "../database/DBConnect.php";
include "../class/Library.php";
include "../class/Library2.php";
include "../class/LibraryDB.php";
include "../class/LibraryBook.php";
include "../class/LibraryManager.php";

$libraryManager = new LibraryManager();
$library = $libraryManager->index();

?>
<?php
include "../header.php";
?>

    <div class="container">
        <div class="col-md-12">
            <h3>Create Book</h3>
        </div>
        <form action="../action/addBook.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">author</label>
                <input type="text" class="form-control" name="author">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">publish</label>
                <input type="date" class="form-control" name="publish">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">version number</label>
                <input type="text" class="form-control" name="version_number">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">image</label>
                <input type="file" class="form-control" name="image">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">category id</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="category_id">
<!--                    <option selected>Choose...</option>-->
                    <?php foreach ($library as $item) {?>
                    <option value="<?php echo $item ->getId() ?>"><?php echo $item ->getName() ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">status</label>
                <input type="radio" class="" name="status" value="1" checked> Còn sách
                <input type="radio" class="" name="status" value="0"> Hết sách
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="../index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
<?php
include "../footer.php";
?>