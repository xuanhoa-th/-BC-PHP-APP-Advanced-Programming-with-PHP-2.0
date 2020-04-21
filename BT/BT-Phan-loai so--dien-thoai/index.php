
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $array = explode(',',$name);
    $arrayViettel = [  '086', '096', '097', '098', '032', '033', '034', '035', '036', '037', '038', '039'];
    $arrayMobifone = [  '0127', '0129', '0123', '0124', '0125'];
    $arrayVinafone = [  '090','093','070','079','077','076','078','089'];
    function search($array){
        for ($i = 0 ; $i <= count($array);$i++)
        {
            $a = substr($array[$i],0,3);
            if ($a == '086'){
                echo " nha mang viettel";
            }
        }


    }
    search($array);


//    function searchVT($arr){
//        for ($j = 0 ;$j<= count($arr); $j++){
//            return $arr[$j];
//        }
//    }
//    if (search($array) ==searchVT($arrayViettel) ){
//        echo " so dien thoai vietel la".search($array) ;
//    }



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>[Bài tập] Đếm số lần xuất hiện của ký tự trong chuỗi</title>
</head>
<body>
<form action="" method="post">
    Nhập vào số điện thoại: <textarea  type="number" name="name" id=""></textarea>
    <button type="submit">Phân loại</button>
</form>
</body>
</html>


