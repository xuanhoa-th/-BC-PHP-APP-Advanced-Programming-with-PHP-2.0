<?php 
	class Calulator
	{
		public function sum($numberOne, $numberTwo)
		{
			if ($numberOne/2 + $numberTwo/2 >= PHP_INT_MAX / 2) {
				throw new Exception("so nhap vao qua lon");
			}
			return $numberTwo + $numberOne;
		}
		public function sub($numberOne,$numberTwo){
			if ($numberOne/2 - $numberTwo/2 < PHP_INT_MAX/2) {
				throw new Exception('so nhap vao qua nho');
			}
			return $numberOne-$numberTwo;
		}
		public function divison($numberOne,$numberTwo){
			if ($numberTwo == 0) {
				throw new Exception('so chia phai khac khong');
			}
			return $numberOne/$numberTwo;
		}

	}

 ?>