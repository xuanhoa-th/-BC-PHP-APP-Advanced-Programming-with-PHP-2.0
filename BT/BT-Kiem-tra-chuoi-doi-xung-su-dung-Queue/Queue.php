<?php


class Queue
{
    public $queue;
    public $stack;

    public function __construct()
    {
        $this->stack =new StackInterface();
        $this->queue = new QueueInterface();
    }

    public function push($item){
        $this->stack->push($item);
    }
    public function getStack(){
        return $this->stack;
    }

}