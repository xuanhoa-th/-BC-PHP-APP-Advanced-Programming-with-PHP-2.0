<?php
include "ArrayList.php";
$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
$listInteger->add(4);
$listInteger->add(5);

echo $listInteger->get(2);
echo $listInteger->sort();




?>