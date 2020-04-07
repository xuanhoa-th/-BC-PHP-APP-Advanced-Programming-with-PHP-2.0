<?php 
if ($_SERVER['REQUEST_METHOD'] == "GET") {
	$rows = $_REQUEST['rows'];
	$columns = $_REQUEST['columns'];
};
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$Arritems = $_REQUEST['item'];
	$rows = $_REQUEST['rows'];
	$columns = $_REQUEST['columns'];
	// var_dump($Arritems);

	function findMax($arr){
		$max= $arr[0];
		for ($i = 1; $i < count($arr) ; $i++) {
			if ($max < $arr[$i]) {
				$max = $arr[$i];
			}
		}
		return $max;
	}
	echo "Gia tri max la:".findMax($Arritems);
	
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
				    <td><input type="text" name="item[]"></td>
 			    <?php endfor; ?>
 			    </tr>
 			<?php endfor; ?>
 		</table>
		<button type="submit">Tim max</button>
 	</form>
 </body>
 </html>