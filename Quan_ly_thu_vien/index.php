<?php
include "database/DBConnect.php";
include "class/Library.php";
include "class/LibraryDB.php";
include "class/LibraryManager.php";

$libraryManager = new LibraryManager();
$library = $libraryManager->index();

?>

<?php 
include "header.php";
?>

<div class="container">
  <div class="row">
   <div class="col-md-4">
    <a href="view/create.php" class="btn btn-success">Add new category</a>
  </div>

  <div class="col-md-8">
    <h4>Category List</h4>
    <!-- ------------------- -->
    <form class="form-inline my-2 my-lg-0" style="float: right; padding: 0em 17em 0em 0em;" method="post" action="view/serachCategory.php">
      <input class="form-control mr-sm-2" type="text" name="search" >
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
        <?php foreach ($library as $item) {?>
      <tr>
        <td> <?php echo $item->getId() ?> </td>
        <td> <?php echo $item->getName() ?></td>
        <td><a href="view/editCategory.php?id=<?php echo $item->getId()?>" class="btn btn-success">Update</a></td>
        <td><a onclick="return confirm('Ban chac chan xoa') " href="action/delete.php?id=<?php echo $item->getId()?>" class="btn btn-danger">Delete</a></td>
      </tr>
        <?php } ?>
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
include "footer.php";
?>
