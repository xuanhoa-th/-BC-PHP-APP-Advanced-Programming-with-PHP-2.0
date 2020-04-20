<?php
$dlist=new SplDoublyLinkedList();
$dlist->push('hiramariam');
$dlist->push('maaz');
$dlist->push('zafar');
$dlist->unshift(1);
$dlist->unshift(2);
$dlist->unshift(3);
for($dlist->rewind();$dlist->valid();$dlist->next()){

    echo $dlist->current()."<br/>";
}
echo "<br/>";