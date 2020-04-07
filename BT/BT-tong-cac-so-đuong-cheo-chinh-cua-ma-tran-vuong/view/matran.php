<?php 
if ($_SERVER['REQUEST_METHOD'] == "GET") {
	$rows = $_REQUEST['rows'];
	$columns = $_REQUEST['columns'];
};
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$Arritems = $_REQUEST['item'];
	$rows = $_REQUEST['rows'];
	$columns = $_REQUEST['columns'];
	function findSum($arr){
		for ($i = 0; $i <= count($arr) ; $i++) {
			for ($j = 0; $j <= count($arr); $j++ ){

			       var_dump($arr[$j]);

//			    if ($arr[$i]==$arr[$j]){
//			        $sum = $arr[$i][$j];
//			        array_push($Sumarray,$sum);
//			        var_dump($Sumarray);
//                }
            }
		}
//		return $Sumarray;
	}
	echo "tong la".findSum($Arritems);
	
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
 			<?php for ($i = 0; $i < $rows ; $i++):?>
 				<tr>
				<?php for ($j = 0; $j < $columns ; $j++):?>
				    <td><input type="text" name="item[][]"></td>
 			    <?php endfor; ?>
 			    </tr>
 			<?php endfor; ?>
 		</table>
		<button type="submit">Tinh tong</button>
 	</form>
 </body>
 </html>