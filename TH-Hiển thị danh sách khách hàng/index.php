<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>
<body>
 <table border="0">
  <caption><h1>Danh sách khách hàng</h1></caption>
  <tr>
    <th>STT</th>
    <th>Tên</th>
    <th>Ngày sinh</th>
    <th>Địa chỉ</th>
    <th>Ảnh</th>
  </tr>
 </table>


 <?php 
 		$customerlist = array(
 			"1" => array("ten" => "Mai van Hoan",
 						 "ngaysinh" => " 12-3-1963",
 						 "diachi" => "kim boi Hoa Binh",
 						 "anh" => "image/1.jpg"),
 			// "2" => array("ten" => "Mai van tai",
 			// 			 "ngaysinh" => " 12-3-1963",
 			// 			 "diachi" => "kim boi Hoa Binh",
 			// 			 "anh" => "image/2.jpg"),
 			// "3" => array("ten" => "Mai van tai",
 			// 			 "ngaysinh" => " 12-3-1963",
 			// 			 "diachi" => "kim boi Hoa Binh",
 			// 			 "anh" => "image/3.jpg"),
 			// "4" => array("ten" => "Mai van tai",
 			// 			 "ngaysinh" => " 12-3-1963",
 			// 			 "diachi" => "kim boi Hoa Binh",
 			// 			 "anh" => "image/4.jpg"),
 			// "5" => array("ten" => "Mai van tai",
 			// 			 "ngaysinh" => " 12-3-1963",
 			// 			 "diachi" => "kim boi Hoa Binh",
 			// 			 "anh" => "image/5.jpg"),

 		);

 		
				 foreach($customerlist as $key => $values){
					      echo "<tr>";
					      echo "<td>".$key."</td>";
					      echo "<td>".$values['ten']."</td>";
					      echo "<td>".$values['ngaysinh']."</td>";
					      echo "<td>".$values['diachi']."</td>";
					      echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
					      echo "</tr>";
                          }		
 					// $key = 1, values = array("ten" => "Mai van Hoan",
 					// 	 "ngaysinh" => " 12-3-1963",
 					// 	 "diachi" => "kim boi Hoa Binh",
 					// 	 "anh" => "image/1.jpg")

  ?>
</body>
</html>