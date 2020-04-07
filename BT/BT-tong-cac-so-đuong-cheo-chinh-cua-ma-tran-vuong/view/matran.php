<?php 
if ($_SERVER['REQUEST_METHOD'] == "GET") {
	$size = $_REQUEST['size'];
};
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$size = $_REQUEST['size'];
    $arr = [];

    for ($n = 0; $n < $size; $n++){
        $arr[$n] = [];
        for ($m = 0 ; $m < $size ; $m++){
            $arr[$n][$m] = $_REQUEST['item-'. $n .'-'. $m];
        }
    }

	function sum($arr){
        $sum = 0;
		for ($i = 0; $i < count($arr) ; $i++) {
			for ($j = 0; $j < count($arr[$i]); $j++ ){
			    if ($i == $j){
			        $sum += $arr[$i][$j];
                }
            }
		}
		return $sum;
	}
	echo "tong la".sum($arr);

}



 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>max</title>
 </head>
 <body>
 	<form method="POST">
 		<table>
 			<?php for ($i = 0; $i < $size ; $i++):?>
 				<tr>
				<?php for ($j = 0; $j < $size ; $j++):?>
				    <td><input type="text" name="item-<?php echo $i.'-'.$j  ?>"></td>
 			    <?php endfor; ?>
 			    </tr>
 			<?php endfor; ?>
 		</table>
		<button type="submit">Tinh tong</button>
 	</form>
 </body>
 </html>