<?php 
	function tongtien($cart){
		$sum = 0;
		foreach ($cart as $value) {
			$sum = $sum + $value['quantity'] * $value['price'];
		}
		return $sum;
	};

	function total_cart($cart){
		$to = 0;
		foreach ($cart as $value) {
			$to = $to + $value['quantity'];
		}
		return $to;

	}

 ?>