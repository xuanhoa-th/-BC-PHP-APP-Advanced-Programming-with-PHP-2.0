<?php
include "Node.php";

class LinkList
{
    // node dau tien
    protected $firsNode;
    // node cuoi cung
    protected $lastNode;
    //so luong node
    protected $count;
    public function __construct()
    {
        $this->firsNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }
    //them node vao dau danh sach
//    public function insertFirst($data){
//        $link = new KNode($data); //khởi tạo một node mới
//        $link->next = $this->firsNode; //sẽ gán node kế sau của node mới khởi tạo là node đầu tiên
//        $this->firsNode = $link;//sẽ gán tiếp node đầu của danh sách là node mới
//        if($this->lastNode == NULL)
//            $this->lastNode = $link;
//
//        $this->count++;
//    }
    public function insertFirst($data)
    {
        $link = new KNode($data);
        $link->next = $this->firsNode;
        $this->firstNode = $link;

        if ($this->lastNode == NULL) {
            $this->lastNode = $link;
        }

        $this->count++;
    }

    //them node vao phia sau danh sach
    public function insertLast($data){
        if ($this->firsNode !== null ){
            $link = new KNode($data);
            $this->lastNode->next = $link;
            $link->next = null;
            $this->lastNode = $link;
            $this->count++;
        } $this->insertFirst($data);
    }
    //lay ra so luong node
    public function totalNodes(){
        return $this->count;
    }
    //tao phuong thuc doc danh sach
//    public function redList(){
//        $listData = array();
//        $current = $this->firsNode;
//        while ($current != null){
//            array_push($listData,$current->readNode());
//            $current = $current->next;
//        }
//        return $listData;
//    }
//    // xoa node khoi danh sach, $key la gia tri ban muon xoa
//    public function deleteNode($key){
//        $current = $this->firsNode;
//        $previous = $this->firsNode;
//        while ($current->data != $key){
//            if ($current->next == null)
//                return null;
//            else {
//                $previous = $current;
//                $current = $current->next;
//            }
//        }
//        if ($current == $this->firsNode){
//            if ($this->count == 1){
//                $this->lastNode = $this->firsNode;
//            }
//            $this->firsNode = $this->firsNode->next;
//        } else {
//            if ($this->lastNode == $current){
//                $this->lastNode = $previous;
//            }
//            $previous->next = $current->next;
//        }
//        $this->count--;
//    }
//    // chen data va $key
//    public function insert($data,$key){
//        if ($key == 0){
//            $this->insertFirst($data);
//        } else {
//            $link = new KNode($data);
//            $current = $this->firsNode;
//            $previous = $this->firsNode;
//
//            for ($i = 0; $i < $key ; $i++){
//                $previous = $current;
//                $current = $current->next;
//            }
//            $link->next = $current;
//            $previous->next = $link;
//            $this->count++;
//        }
//    }
//    //tim key
//    public function readNode($nodePos)
//    {
//        if ($nodePos <= $this->count) {
//            $current = $this->firtNode;
//            $pos = 1;
//            while ($pos != $nodePos) {
//                if ($current->next == NULL) {
//                    return null;
//                } else {
//                    $current = $current->next;
//                }
//                $pos++;
//            }
//            return $current->data;
//        } else {
//            return NULL;
//        }
//    }
}