<?php


class Dancer
{
    public $name;
    public $gender;

    public function __construct($name,$gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
    function check($name,$gender){
        $dlist1 = new SplDoublyLinkedList();
        $dlist1->name = $name;
        $dlist1->gender = $gender;
        $dlist1->push('Long');
        $dlist1->push('Tung');
        $dlist1->push('Phu');
        $dlist2 = new SplDoublyLinkedList();
        $dlist2->name = $name;
        $dlist2->gender = $gender;
//        if ($dlist1->isEmpty() || $dlist2->isEmpty()){
//            return " bi rong";
//        } else {
//
//        }

        for($dlist1->rewind();$dlist1->valid();$dlist1->next()){

            echo $dlist1->current()."<br/>";
        }
        echo "<br/>";
    }

}

