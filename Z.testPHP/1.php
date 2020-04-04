<?php 
	class Calulator
	{
		public function sum($x, $y)
		{
			if ($x == 0 && $y == 0) {
				throw new Exception("so nhap vao khong hop le");
			}
			return $y + $x;
		}
		public function sub($x,$y){
			if ($x == 0 && $y == 0) {
				throw new Exception('so nhap vao khong hop le');
			}
			return $x-$y;
		}
		public function divison($x,$y){
			if ($y == 0 && $x == 0) {
				throw new Exception('so nhap vao khong hop le');
			}
			return $x/$y;
		}
        public function multiply($x,$y){
            if ($y == 0 && $x == 0) {
                throw new Exception('so nhap vao khong hop le');
            }
            return $x*$y;
        }

	}

 ?>