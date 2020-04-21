<?php
$array = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
$count = count($array);
$str = 0;
for ($i = 0; $i < $count; $i++){
    for ($j = $i+1; $j< $count;$j++){
        if ($array[$j] < $array[$i]){
            $str = $array[$j];
            $array[$j]= $array[$i];
            $array[$i] = $str;
        }

    }
}
for ($i = 0 ; $i < $count; $i++){
    echo $array[$i]. " ";
}