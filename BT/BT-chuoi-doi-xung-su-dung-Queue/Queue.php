<?php


class Queue implements QueueInterface
{
    protected $limit;
    protected $queue;
    public function __construct($limit = 100)
    {
        $this->limit = $limit;
        $this->queue = [];
    }

    function enQueue($item)
    {
      if (!$this->isFull()){
          array_push($this->queue, $item);
      }
    }

    function deQueue()
    {
        return array_shift($this->queue); // lay phan tu dau tien cua mang
    }

    function isFull()
    {
        return count($this->queue) == $this->limit;
    }
    public function isEpty()
    {
        return empty($this->queue);
    }
    public function getQueue()
    {
        return $this->queue;
    }

    function isEmpty()
    {
        // TODO: Implement isEmpty() method.
    }
}