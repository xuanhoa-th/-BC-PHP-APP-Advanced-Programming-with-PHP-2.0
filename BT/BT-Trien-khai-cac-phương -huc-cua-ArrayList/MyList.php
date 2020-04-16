<?php


class MyList
{
    public $size = 0;
    public $default_capacity = 10;
    public $object_element = [];

    public function __construct()
    {

    }
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->object_element[$index];

        } else {
            die("ERROR in ArrayList.get");
        }
    }
    public function add($index,$element){
        array_push($this->object_element,$index,$element);
    }
    public function size(){
        return count($this->object_element);
    }
    public function isInteger($toCheck) {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
    public function remover($index){
            if ($this->isInteger($index)){
                $newObjectElement = array();
                for ($i = 0 ; $i < $this->size(); $i++)
                    if ($index != $i ) $newObjectElement[] = $this->get($i);
            $this->object_element = $newObjectElement;
            } else {
                die(" khong co phan tu de xoa");
            }
    }
    public function clear(){
        $this->object_element = array();
    }
    public function clones(){
        $ObjectElementClone = [];
        for ($i = 0 ; $i < $this->size(); $i++)
            array_push($ObjectElementClone,$i);
    }


}