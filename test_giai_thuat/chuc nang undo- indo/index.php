<?php
include "StackInterface.php";
include "Stack.php";
include "Word.php";

$word = new Word();
$word->Write("a");
$word->Write("ab");
$word->Write("abc");
//var_dump($word->getStoreOne());
//var_dump($word->getStoreTow());
var_dump($word->getResultEnd());
var_dump($word->controlZ());
var_dump($word->controlY());

