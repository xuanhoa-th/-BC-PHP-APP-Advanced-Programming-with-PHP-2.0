<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hiển thị các loại hình</title>
</head>
<body>
	<table>
		<?php for($d = 0; $d< 3; $d++) { ?>
		<tr>
			<?php for($i = 0; $i< 7 ; $i++) { ?>
			<td style="color: blue">*</td>
		<?php } ?>
		</tr>
		<?php } ?>
		<tr></tr>
<!-- ------------------------------ -->
		<?php for( $a=1; $a<=5; $a++) { ?>
		<tr>
			<?php for ($j = 1; $j < $a; $j++) { ?>
			<td style="color: red">*</td>
		<?php } ?>
		</tr>
	    <?php } ?>
<!-- --------------------------------- -->
	<?php for( $b=5; $b>=1; $b--) { ?>
		<tr>
			<?php for ($c = 1; $c < $b; $c++) { ?>
			<td style="color: aqua">*</td>
		<?php } ?>
		</tr>
	<?php } ?>
<!-- ----------------------------- -->
<?php for( $a=1; $a<=5; $a++) { ?>
		<tr>
			<?php for ($j = 1; $j < $a; $j++) { ?>
			<td style="color: red">*</td>
		    <?php } ?>
		    <?php for ($j = -1; $j < -$a; $j++) { ?>
			<td style="color: red">*</td>
		    <?php } ?>
		</tr>
	    <?php } ?>
	</table>
</body>
</html>