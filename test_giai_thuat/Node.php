<?php


class Node
{
    public $data;
    public $link;

    public function __construct($data,$link)
    {
        $this->data = $data;
        $this->link= $link;

    }
    public function redNode(){
        return $this->data;
    }

}