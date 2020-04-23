<?php

// function isFirstLetterUpperCase($str){
//     $pattern = '/^[A-Z]/';
//     if (preg_match($pattern,$str)){
//         echo "Ký tự đầu tiên của chuỗi là chữ hoa";
//     } else {
//         echo "Ký tự đầu tiên của chuỗi khong là chữ hoa";
//     }
// }
// isFirstLetterUpperCase('Codegym');
//isFirstLetterUpperCase('cdegym');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_REQUEST['email'];
    //var_dump($email);
    function checkEmail($str){
    $pattern = '/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/';
    if(!preg_match($pattern,$str)){
            echo "dia chi email phu hop";
    } else {
            echo "dia chi khong phu hop";
    }
    }
    checkEmail($email);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>kiem tra email</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
 <form class="navbar-form navbar-left" method="post" >
           <h3><b>Validate email</b></h3>
           <br>
           <span style="font-size: 16px">Địa chỉ Email:</span>
           <input type="text" class="form-control" name="email" >
            <br>
            <br>
           <button type="submit" class="btn btn-success">Submit</button>
        </form>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
