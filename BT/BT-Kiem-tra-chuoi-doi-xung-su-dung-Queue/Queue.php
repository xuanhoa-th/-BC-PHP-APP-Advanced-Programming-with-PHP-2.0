<?php


class Queue
{
    public $queue;
    public $stack;

    public function __construct()
    {
        $this->stack =new Stack();
        $this->queue = new Queue();
    }

    public function push($item){
        $this->stack->push($item);
    }
    public function getStack(){
        return $this->stack;
    }

}