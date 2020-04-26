<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include "../class/LoginUser.php";
    include "../class/LoginUserManager.php";
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $phone = $_REQUEST['phone'];

    $loginUser = new LoginUser($email,$password, $phone);
    $loginUserManager = new LoginUserManager("../data/LoginData.json");
    $loginUserManager->add($loginUser);
    header('Location: ../index.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
