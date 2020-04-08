<?php
include "StopWatch.php";
function selectionSortAscending($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }
    return $arr;
}

$array = [];
for ($i = 0; $i < 10000; $i++) {
    $array[] = $i * rand(1, 100000);
}

$watch = new StopWatch();
$watch->startTime();
echo "Thoi gian bat dau: " . $watch->getStartTime() . "<br>";

selectionSortAscending($array);

$watch->stopTime();
echo "Thoi gian ket thuc: " . $watch->getEndTime() . "<br>";
echo "Thoi gian thuc thi: " . $watch->getElapsedTime();