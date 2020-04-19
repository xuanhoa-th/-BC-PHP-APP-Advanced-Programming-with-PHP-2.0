<?php


class Stack implements StackInterface
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 100)
    {
        $this->limit = $limit;
        $this->stack = [];
    }

    function push($item)
    {
            array_push($this->stack,$item);
    }
    public function pop()
    {
        if (!($this->isEmpty())) {
            return array_pop($this->stack);
        } else {
            echo " stack rong";
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