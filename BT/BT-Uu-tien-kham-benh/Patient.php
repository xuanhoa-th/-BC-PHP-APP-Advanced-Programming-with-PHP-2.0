<?php


class Patient
{
    public $patient;
    public $limit;
    public $name;
    public $code;

    public function __construct( $limit = 100)
    {
        $this->patient = [];
        $this->limit = $limit;
    }
    public function isEmpty() {
        return empty($this->patient);
    }
    function enqueue($name,$code)
    {
        if (!$this->isFull()) {
            array_push($this->patient,$name,$code);
        } else {
            echo "QueueInterface full";
        }
    }

    public function get(){
        return $this->patient;
    }
    function isFull()
    {
        return count($this->patient) == $this->limit;
    }

}