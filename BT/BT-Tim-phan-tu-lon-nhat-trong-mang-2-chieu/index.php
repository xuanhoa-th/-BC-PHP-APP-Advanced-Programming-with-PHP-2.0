<?php 
$maxI = 0;
$maxj = 0;
$max = 0;
function maxxx(){
	for ($i = 0; $i < 5 ; $i++) {
	if($i > $maxI){
		$maxI = $i;
	}
	for ($j = 0; $j < 5; $j++) {
		if ($j> $maxj) {
			$maxj = $j
			$max = [$maxj][$maxI];
		}
	}
}
return $max
}

echo $max;

 ?>