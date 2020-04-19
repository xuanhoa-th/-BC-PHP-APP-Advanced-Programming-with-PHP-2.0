<?php


class Word
{
    protected $storeOne;
    protected $storeTow;

    public function __construct()
    {
        $this->storeTow = new StackInterface();
        $this->storeOne = new StackInterface();
    }
    function Write($message){
        $this->storeOne->push($message);
    }
    function controlZ(){
      $itemPop = $this->storeOne->pop(); //lay ra store 1
       $this->storeTow->push($itemPop); // chuyen sang store 2

    }
    function controlY(){
        $item = $this->storeTow->pop();
        $this->storeOne->push($item);
    }

    public function getStoreOne()
    {
        return $this->storeOne;
    }
    public function getStoreTow()
    {
        return $this->storeTow;
    }
    public function getResultEnd(){
        return $this->storeOne->top();
    }

}