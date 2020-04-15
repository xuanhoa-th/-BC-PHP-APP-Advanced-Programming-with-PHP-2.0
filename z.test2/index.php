<?php
include "class/Printer.php";
include "class/FilePrinter.php";

$filePrinter = new FilePrinter("FilePrinter","data.txt");
$filePrinter->makePrinter("xin chao");