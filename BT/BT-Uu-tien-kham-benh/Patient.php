<?php


class Patient
{
    public $patient;
    public $limit;

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
            array_push($this->patient,['name' => $name,'code' =>$code]);
        } else {
            echo "QueueInterface full";
        }
        return $this->patient;
    }
   function dequeue(){
        $array = $this->patient;
        usort($array,function($a, $b) {
            if ($a['code'] > $b['code']) {
                return true;
            }
            return false;
        });
        return $array[0];
   }

    public function get(){
        return $this->patient;
    }
    function isFull()
    {
        return count($this->patient) == $this->limit;
    }
}