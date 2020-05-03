<?php
include "database/DBConnect.php";
include "class/Car.php";
include "class/CarDB.php";
include "class/CarManager.php";

//$db = new DBConnect();
//$db->conneect();
//$cardDB = new CarDB();
//$cardDB->getAll();
$carManage = new CarManager();
$cars = $carManage->index();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

	<nav class="nav">
		<a class="nav-link active" href="#">Active</a>
		<a class="nav-link" href="#">Link</a>
		<a class="nav-link" href="#">Another link</a>
		<a class="nav-link disabled" href="#">Disabled</a>
	</nav>
	<div class="container">
        <a href="view/Create.php" class="btn btn-success">Create</a>
		<table class="table table-hover table-inverse">
		<thead>
			<tr>
				<th>STT</th>
				<th>name</th>
				<th>type</th>
				<th>price</th>
                <th></th>
			</tr>
		</thead>
		<tbody>
        <?php foreach ($cars as $value) { ?>
			<tr>
                <td> <?php echo $value->getId()?> </td>
				<td> <?php echo $value->getName(); ?> </td>
				<td> <?php echo $value->getType(); ?> </td>
				<td> <?php echo $value->getPrice(); ?> </td>
                <td><a onclick="return confirm('ban chac chan muon xoa')" href="action/delete.php?id=<?php echo $value->getId()?>" class="btn btn-danger">Xoa</a></td>
			</tr>
		<?php 	} ?>
		</tbody>
	</table>

	</div>




<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>
