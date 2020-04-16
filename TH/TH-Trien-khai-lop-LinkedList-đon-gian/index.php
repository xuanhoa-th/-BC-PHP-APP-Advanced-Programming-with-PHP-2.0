<?php
include "LinkList.php";

$linklist = new LinkList();
$linklist = insertFirst(11);
$linklist = insertFirst(23);
$linklist = insertLast(19);
$linklist = insertLast(36);
$linklist->deleteNode(43);
$totalNodes = $linklist->totalNodes();
$linkData = $linklist->redList();

echo $totalNodes;
echo  implode('-',$linkData);

