<?php

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

<div class="container">
    <div class="h3">Them moi san pham</div>
    <div class="col-md-3"></div>
    <div class="col-md-9">
        <form method="post" action="../action/add.php">
            <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input type="text" class="form-control"  name="id">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">name</label>
                <input type="text" class="form-control"  name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Type</label>
                <input type="text" class="form-control" name="type" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="text" class="form-control" name="price">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="../index.php" class="btn btn-warning">quay lai</a>
        </form>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>
