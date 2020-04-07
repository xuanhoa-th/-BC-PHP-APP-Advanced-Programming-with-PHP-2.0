<?php 
if ($_SERVER['REQUEST_METHOD'] == "GET") {
	$rows = $_REQUEST['rows'];
	$columns = $_REQUEST['columns'];
};
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$Arritems = $_REQUEST['item'];
	$rows = $_REQUEST['rows'];
	$columns = $_REQUEST['columns'];
	echo '<pre>';
		print_r($Arritems);
	echo '</pre>';

	// function findSumColum($arr){
	// 	$max = $arr[0][0];
	// 	for ($i = 0; $i < count($arr) ; $i++) {
	// 		for ($j = 0; $j < count($arr) ; $j++) {
	// 			echo '<pre>';
	// 				print_r($arr[$j][$i]);
	// 			echo '</pre>';
	// 		}
	// 	}
	// 	// return $max;
	// }
	// echo "Gia tri max la:".findSumColum($Arritems);
	
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
		<button type="submit">Tinh tong cot</button>
 	</form>
 </body>
 </html>