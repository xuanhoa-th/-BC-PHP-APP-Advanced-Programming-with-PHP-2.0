<?php


class Reverse
{
    public $stack;
    public $limit;

    public function __construct($limit = 10)
    {
        $this->limit= $limit;
        $this->stack = [];
    }


    public function isEmpty(){
        return empty($this->stack);
    }
    public function push($item) {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('StackInterface is full!');
        }
    }
    public function pop() {
        $itemPop = array_shift($this->stack);
        return $itemPop;
    }

    public function getStack()
    {
        return $this->stack;
    }

}