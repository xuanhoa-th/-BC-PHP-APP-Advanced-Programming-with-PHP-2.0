<?php


class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        // node dang sau
        $this->next = null;
    }
    // doc du lieu node
    function  readNode()
    {
        return $this->data;
    }

}