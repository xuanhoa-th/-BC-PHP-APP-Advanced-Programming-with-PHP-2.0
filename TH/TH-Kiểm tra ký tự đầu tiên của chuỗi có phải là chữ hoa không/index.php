<?php

function isFirstLetterUpperCase($str){
    $pattern = '/^[A-Z]/';
    if (preg_match($pattern,$str)){
        echo "Ký tự đầu tiên của chuỗi là chữ hoa";
    } else {
        echo "Ký tự đầu tiên của chuỗi khong là chữ hoa";
    }
}
isFirstLetterUpperCase('Codegym');
//isFirstLetterUpperCase('cdegym');

