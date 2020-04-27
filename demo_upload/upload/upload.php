<?php
 
// Sử dụng vòng lặp for để lưu từng file trong mảng
foreach($_FILES['img_file']['name'] as $name => $value)
{
    $name_img = stripslashes($_FILES['img_file']['name'][$name]);
    $source_img = $_FILES['img_file']['tmp_name'][$name];
    $path_img = "upload/" . $name_img;
   $a= move_uploaded_file($source_img, $path_img);
    var_dump( $source_img);
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fgh</title>
</head>
<body>
	fghfhgfhfgh
</body>
</html>