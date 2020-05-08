<?php
include "../database/DBConnect.php";
include "../class/Category.php";
include "../class/CategoryDB.php";
include "../class/CategoryManager.php";

$id = $_REQUEST['id'];
$categoryMN = new CategoryManager();
$category = $categoryMN->findById($id);

?>
<?php
include "../header.php";
?>

    <div class="container">
        <div class="col-md-12">
            <h3>Edit Category</h3>
        </div>
        <form action="../action/edit.php?" method="post">
            <div class="form-group">
                <input type="text" hidden class="form-control" name="id" value="<?php echo $category->getId() ?>">
                <label for="exampleInputEmail1">Category Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $category->getName() ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="../category/list.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
<?php
include "../footer.php";
?>