<?php
?>
<?php
include "../header.php";
?>

    <div class="container">
        <div class="col-md-12">
            <h3>Create Category</h3>
        </div>
        <form action="../action/add.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>
                <input type="text" class="form-control" name="name">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="../index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
<?php
include "../footer.php";
?>