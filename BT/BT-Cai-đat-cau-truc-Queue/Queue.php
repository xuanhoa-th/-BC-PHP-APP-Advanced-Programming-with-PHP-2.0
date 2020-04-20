<?php


class Queue implements QueueInterface
{
    protected $limit;
    protected $queue;

    public function __construct($limit = 20)
    {
        $this->limit = $limit;
        $this->queue = [];
    }

    function enqueue($item)
    {
        if (!$this->isFull()) {
            array_push($this->queue, $item);
        } else {
            echo "da bi day";
        }
    }

    function dequeue()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->queue);
        } else {
            echo "bi rong";
        }
    }

    function isEmpty()
    {
        return empty($this->queue);
    }

    function isFull()
    {
        return count($this->queue) == $this->limit;
    }

    /**
     * @return array
     */
    public function getQueue()
    {
        return $this->queue;
    }
}