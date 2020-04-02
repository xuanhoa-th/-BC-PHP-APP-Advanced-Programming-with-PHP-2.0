<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lọc danh sách khách hàng</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post">
  Từ: <input id = "from" type="text" name="from" placeholder="yyyyy/mm/dd" value="<?php echo isset($from_date)?$from_date:''; ?>" />
  Đến: <input id = "to" type="text" name="to" placeholder="yyyy/mm/dd" value="<?php echo isset($from_date)?$from_date:''; ?>" />
  <input type = "submit" id = "submit" value = "Lọc"/>
</form>

<?php
$customer_list = array(
    "0" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội", "profile" => "image/1.jpg"),
    "1" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang", "profile" => "image/2.jpg"),
    "2" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định", "profile" => "image/3.jpg"),
    "3" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây", "profile" => "image/4.jpg"),
    "4" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Hà Nội", "profile" => "image/5.jpg")
);

function searchByDate($customer,$from_date,$to_date){
		if (empty($from_date) && empty($to_dade)) {
			return $customer;
		}
		$filtered_customer = [];
		foreach ($customer as $customer) {
			if (!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date)))
				continue;
			if(!empty($to_dade) && (strtotime($customer['day_of_birth']) > strtotime($to_dade)))
				continue;
			$filtered_customer[] = $customer;
			
		}
		return $filtered_customer;
}

$from_date = null;
$to_date = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$from_date = $_POST["from"];
	$to_date = $_POST["to"];
}
$filtered_customer = searchByDate($customer_list,$from_date,$to_dade);
?>
<table>
	<caption><h2>Danh sach khach hang</h2></caption>
	<tr>
		<th>STT</th>
		<th>ten</th>
		<th>ngay sinh</th>
		<th>dia chi</th>
		<th>anh</th>
	</tr>
	<?php if(count($filtered_customer) ===0) :?>
		<tr>
			<th colspan="5" class="message"> Khong tim thay khach hang</th>
		</tr>
	<?php endif; ?>

	<?php foreach ($filtered_customer as $index =>$customer){?>
		<tr>
			<td><?php echo $index ++ ?></td>
			<td><?php echo $customer['name']; ?></td>
			<td><?php echo $customer['day_of_birth']; ?></td>
			<td><?php echo $customer['address']; ?></td>
			<td><div class="profile"><img src="<?php echo $customer['profile'];?>"/></div> </td>
		</tr>

	<?php } ?>

</table>
</body>
</html>