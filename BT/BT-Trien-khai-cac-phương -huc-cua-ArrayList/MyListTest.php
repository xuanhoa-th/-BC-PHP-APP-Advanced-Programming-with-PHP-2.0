<?php
include "MyList.php";
$mylist = new MyList();
$mylist->add(6,5);
$mylist->add(3,9);
$mylist->add(2,3);
$mylist->add(0,8);
echo $mylist->size();

