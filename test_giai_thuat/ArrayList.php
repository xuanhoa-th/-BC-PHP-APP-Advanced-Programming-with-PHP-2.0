<?php 
/**
 * summary
 */
class ArrayList
{
	public $arrayList = [];
	// public function ArrayList($arr = "")
	// {
	// 	if (is_array($arr) == true) 
	// 	$this-> arrayList = $arr;
	// 	else {
	// 			$this->arrayList = array();
	// 		}	
		
	// }
    
    public function add($obj) {
    	array_push($this->arrayList, $obj);
    }
    // tra ve vi tri thu index trong danh sach
    public function get($index){
    	if($this->isInteger($index) && $index < $this->size()){
    		return $this->arrayList[$index];
    	} else {
    		die("khong thay");
    	}

    }

     public function isInteger($toCheck){
        return preg_match("/^[0-9]+$/", $toCheck);
    }
    //lay ve so phan tu
    public function size(){
    	return count($this->arrayList);
    }
    // xoa 1 phan tu
    public function delete($index){
    		if($this->isInteger($index)){
    			$newarray = [];
    			for ($i = 0; $i < $this->size() ; $i++)
    				if($index != $i){
    					$newarray[] = $this->get($i);
    				} 
    				$this->arrayList = $newarray;
    		} else {
    			die("khong tim thay vi tri can xoa");
    		}
    }
}


 ?>