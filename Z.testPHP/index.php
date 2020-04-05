<?php 

$input = range(0,10);
array_splice($input, 1, ["22"]);
 
echo "<pre>";
    print_r($input);
echo "</pre>";

 ?>