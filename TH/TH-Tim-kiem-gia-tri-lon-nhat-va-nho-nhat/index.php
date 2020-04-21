<?php 
	function finMin($arr){
		$min = [0];
		for ($i = 1; $i < count($arr) ; $i++) {
			if ($arr[$i] < $min) {
				$min = $arr[$i];
			}
		}
		return $min;
	}
	$nums = [];
    for($i = 0; $i < 100; ++$i){
        $nums[$i] = rand(1, 101);
    }
	foreach ($nums as $value) {
		echo $value . " ";
	}
	$minValue = finMin($nums);
	echo "</br>";
	echo "The mininum value is: " . $minValue;
	echo "br";
	echo "br";
	echo "br";
function findMax($arr) {
    $max = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}
$nums = [];
for($i = 0; $i < 100; ++$i) {
    $nums[$i] = rand(1,101);
}
foreach($nums as $num) {
    echo $num . " ";
}

$maxValue = findMax($nums);
echo "<br/>";
echo "The maximum value is: " . $maxValue;

 ?>
