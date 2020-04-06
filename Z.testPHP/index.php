<?php
$firsList = ['john','jeny','jack'];
$seconlist = ['adam','saba','sose','tom'];
//foreach ($firsList as $key => $value){
//    echo $key."=>". $value;
//    echo "<br>";
////    echo "<pre>";
////        print_r($value);
////    echo "</pre>";
//}
//foreach ($seconlist as $value){
//    echo $value;
//    echo "<br>";
//}
function check1($firsList)
{
    foreach ($firsList as $key => $val) {
    }
    return $val;
}
function check2($seconlist)
{
    foreach ($seconlist as $key => $value) {
    }
    return $value;
}
if (check1($firsList)==check2($seconlist)){
    echo $value;
}
?>