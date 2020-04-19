<?php


class Books implements StackInterface
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 20)
    {
        $this->limit = $limit;
        $this->stack = [];
    }

    function push($item)
    {
        if (!$this->isFull()){
            array_push($this->stack,$item);
        } else {
            echo " da bi day";
        }

    }

    function pop()
    {
        if (!$this->isEmpty()){
            array_pop($this->stack);
        } else {
            echo " ngan xep rong";
        }
    }

    function isEmpty()
    {
      return empty($this->stack);
    }

    function top()
    {
        return end($this->stack);
    }

    function isFull()
    {
        return count($this->stack) == $this->limit;
    }
    public function getStack()
    {
        return $this->stack;
    }
}