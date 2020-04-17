<?php
include "ArrayList.php";
$listInteger = new LinkList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
$listInteger->add(4);
$listInteger->add(5);

echo $listInteger->get(2);
//echo $listInteger->toArray();
//tra ve 1 mang chua tat ca cac phan tu trong danh sach
var_dump($listInteger->toArray());
//tra ve so phan tu trong danh sach
echo "<br>";
var_dump($listInteger->size());





?>