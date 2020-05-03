<?php
include "../database/DBConnect.php";
include "../class/Library.php";
include "../class/LibraryDB.php";
include "../class/LibraryManager.php";

$id  = $_REQUEST['id'];
$libManager = new LibraryManager();
$libarary = $libManager->edit($id);

//$lbDB = new LibraryDB();
//$lbDB->getEdit();


?>
<?php
include "../header.php";
?>

<div class="container">
    <div class="col-md-12">
        <h3>Edit Category</h3>
    </div>
    <form action="../action/edit.php" method="post">
        <div class="form-group">
            <?php foreach ($libarary as $values) {?>
            <label for="exampleInputEmail1">Category Name</label>
            <input hidden type="text" class="form-control" name="id" value="<?php echo $values->getId() ?>">
            <input type="text" class="form-control" name="name" value="<?php echo $values->getName() ?>">
            <?php } ?>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="../index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<?php
include "../footer.php";
?>
