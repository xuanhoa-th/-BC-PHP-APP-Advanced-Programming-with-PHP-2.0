     <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
</head>
<body>
	<?php 

	// Kiểm tra định dạng email
	function is_email($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	};
	function is_number($str) {
    return (strlen($str) == 10) ? TRUE : FALSE;
	};
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			//LAY DU LIEU
			$data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
			$data['nameEmail'] = isset($_POST['nameEmail']) ? $_POST['nameEmail'] : '';
			$data['namePhone'] = isset($_POST['namePhone']) ? $_POST['namePhone'] : '';
			//kiem tra du lieu
			if(empty($data['name'])){
				$error['name'] = '*Ban chua nhap ten';
			}
			if(empty($data['nameEmail'])){
				$error['nameEmail'] = '*Ban chua nhap email';
			} elseif (!is_email($data['nameEmail'])) {
				$error['nameEmail'] = '*nhap sai email';
			}
			if(empty($data['namePhone'])){
				$error['namePhone'] = '*Ban chua nhap so dien thoai';
			} elseif (!is_number($data['namePhone'])) {
				$error['namePhone'] = ' *so dien thoai gom 10 ki tu';
			}
			//luu du lieu
			// if(!$error) {
			// 	echo ' du lieu da duoc luu';

			// 	//................
			// }
			// else {
			// 	echo ' du lieu bi loi, khong luu';
			// }
		}

	 ?>

	<h2>Registration Form</h2>
	<form method="POST" >
		<fieldset style="width: 30%;height: auto;">
			<legend>Details</legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value="<?php echo isset($data['name'])? $data['name'] : '';  ?>">
						 <span style="color: red"><?php echo isset($error['name'])? $error['name'] : '' ?></span>
					</td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="nameEmail" value="<?php echo isset($data['nameEmail'])? $data['nameEmail'] : ' ';  ?>">
						<span style="color: red"><?php echo isset($error['nameEmail'])? $error['nameEmail'] : '' ?></span>
					</td> 
				</tr>
				<tr>
					<td>Phone:</td>
					<td><input type="number" name="namePhone" value="<?php echo isset($data['namePhone'])? $data['namePhone'] : ' ';  ?>">
						<span style="color: red"><?php echo isset($error['namePhone'])? $error['namePhone']: '' ?></span>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit" name="contact_action">Register</button>
						<!-- <button type="reset" name="contact_action">Reset</button> -->
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>