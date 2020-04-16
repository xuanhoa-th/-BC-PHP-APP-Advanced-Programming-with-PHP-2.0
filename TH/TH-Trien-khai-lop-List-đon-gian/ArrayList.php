<?php


class ArrayList
{
    public $arrayList;
    public function ArrayList($arr = ""){
        if (is_array($arr) == true)
            $this->arrayList = $arr;
        else $this->arrayList = array();
    }
    public function add($obj){
        array_push($this->arrayList, $obj);
    }

    // xoa tat ca phan tu
    public function clear(){
        $this->arrayList = array();
    }

    // tra ve phan tu tai vi tri da dinh
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];

        } else {
            die("ERROR in ArrayList.get");
        }
    }

    //kiem tra neu danh sach nay khong co phan tu nao
    public function isEmpty()
    {
        if (count($this->arrayList) == 0) {
            return true;
        }
        return false;
    }
    // loai bo phan tu o vi tri da dinh trong danh sach
    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();

            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);

            $this->arrayList = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }
    //tra ve so phan tu trong danh sach
    public function size()
    {
        return count($this->arrayList);
    }
    // xap xep theo bang chu kai
    public function sort()
    {
        sort($this->arrayList);
    }
    // tra ve 1 mang chua tat ca cac phan tu trong danh sach theo thu tu
    public function toArray()
    {
        return $this->arrayList;
    }

    // tra ve true neu gia tri tham so la nguyen
    public function isInteger($toCheck){
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}