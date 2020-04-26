<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $error = [];
    if (empty($_REQUEST['email'])){
        $error['email'] = "Email không được để rỗng";
    } else {
        $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
        if(!preg_match($pattern,$_REQUEST['email'])){
            $error['email'] = "Email không đúng định dạng";
        } else {
            $email = $_REQUEST['email'];
        }
    }
    if (empty($_REQUEST['password'])){
        $error['password'] = "Password không được để rỗng";
    } else {
        $pattern = '/^([A-Z]){1}([0-9]){1}([|@|!|^|-|%|$]){1}([^\s]){8,}$/';
        if(!preg_match($pattern,$_REQUEST['password'])){
            $error['password'] = "Password không đúng định dạng";
        } else {
            $password = $_REQUEST['password'];
        }

    }
    if (empty($_REQUEST['phone'])){
        $error['phone'] = "phone không được để rỗng";
    } else {
//        $pattern = '/^([096|097|098|086|032|033|034|035|036|037|038|039|089|090|093|070|079|077|076|078|081|082|083|084|085]){1}([1-9]{7})$/';
        $pattern = '/^([0-9]{10,})$/';

        if(!preg_match($pattern,$_REQUEST['phone'])){
            $error['phone'] = "phone không đúng định dạng";
        } else {
            $phone = $_REQUEST['phone'];

        }

    }

}
//action="../action/storeLogin.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Create a new account</h2>
<form class="login-form"  method="post" action="../action/storeLogin.php">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Email</label>
    <input type="text" class="form-control" placeholder="" name="email">
      <?php if (isset($error['email'])) {?>
          <p style="color: darkred"> <?php echo $error['email'] ?> </p>
      <?php }?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="" name="password">
      <?php if (isset($error['password'])) {?>
          <p style="color:darkred"> <?php echo $error['password'] ?> </p>
      <?php }?>
  </div>
    <div class="form-group">
        <label for="exampleInputPassword1" class="text-uppercase">phone</label>
        <input type="text" class="form-control" placeholder="" name="phone">
        <?php if (isset($error['phone'])) {?>
            <p style="color:darkred"> <?php echo $error['phone'] ?> </p>
        <?php }?>
    </div>
    <div class="form-check">
    <button type="submit" class="btn btn-login float-right">Submit</button>
  </div>
</form>

  </div>
    </div>
  </div>
            </div>
		</div>
	</div>
</div>
</section>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>