<?php


class Stack
{
    public $stack;
    public $limit ;
    public function __construct($limit = 20)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function isEmpty(){
        return empty($this->stack);
    }
    public function isFull(){
        return $this->limit = count($this->stack);
    }
    public function push($item) {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('StackInterface is full!');
        }
    }
    public function pop(){
        if (!$this->isEmpty()){
            array_shift($this->stack);
        } else {
            throw new RunTimeException('StackInterface is full!');
        }
    }
    // hien thi phan tu stack
    public function getStack(){
        return $this->stack;
    }
    public function top(){
        return current($this->stack);
    }

}