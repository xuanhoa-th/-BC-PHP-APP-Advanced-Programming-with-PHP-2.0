<?php
include "../database/DBConnect.php";
include "../class/Library.php";
include "../class/Library2.php";
include "../class/LibraryDB.php";
include "../class/LibraryBook.php";
include "../class/LibraryBook2.php";
include "../class/LibraryManager.php";

$libraryManager = new LibraryManager();
$library = $libraryManager->index();

$code  = $_REQUEST['code'];
$libManager = new LibraryManager();
$library2 = $libManager->editBook($code);


?>
<?php
include "../header.php";
?>

<div class="container">
    <div class="col-md-12">
        <h3>Edit Category</h3>
    </div>
    <form action="../action/editBook.php" method="post" enctype="multipart/form-data">
        <?php foreach ($library2 as $values) {?>
            <div class="form-group">
<!--                <label for="exampleInputEmail1">Code</label>-->
                <input hidden type="text" class="form-control" name="code" value="<?php echo $values->getName() ?>">
            </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $values->getName() ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">author</label>
            <input type="text" class="form-control" name="author" value="<?php echo $values->getAuthor() ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">publish</label>
            <input type="text" class="form-control" name="publish" value="<?php echo $values->getPublish() ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">version number</label>
            <input type="text" class="form-control" name="version_number" value="<?php echo $values->getVersionNumber() ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">price</label>
            <input type="text" class="form-control" name="price" value="<?php echo $values->getPrice() ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">image</label>
            <img width="50px" src="<?php echo '../uploads/'.$values->getImage() ?>" alt="">
            <input type="file" class="form-control" name="image" value="<?php echo $values->getImage() ?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">category id</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="category_id">
                <option selected>Choose...</option>
                <?php foreach ($library as $item) {?>
                    <option value="<?php echo $item ->getId() ?>"><?php echo $item ->getName() ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">status</label>
            <input type="radio" class="" name="status" value="1" checked> Hien
            <input type="radio" class="" name="status" value="0"> an
        </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="book.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<?php
include "../footer.php";
?>

