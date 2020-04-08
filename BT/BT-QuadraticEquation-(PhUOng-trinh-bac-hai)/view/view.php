<?php
include "../quadraticEquation.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $quadraticEquation = new QuadraticEquation($a, $b, $c);
    if ($a != 0) {
        if ($quadraticEquation->getDiscriminant() > 0) {
            echo 'Phương trình có 2 nghiệm là ' . 'X1 = '.$quadraticEquation->getRoot1().' '.'and'.' '.'X2 = '.$quadraticEquation->getRoot2(); 
        } else if ($quadraticEquation->getDiscriminant() === 0) {
            echo 'Phương trình có 1 nghiệm là '.$quadraticEquation->getExp();
        } else
            echo 'Phương trình vô nghiệm';
    } else {
        echo "Không tìm thấy";
    }
}
