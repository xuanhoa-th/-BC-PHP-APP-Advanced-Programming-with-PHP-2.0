<?php


date_default_timezone_set("Asia/Ho_Chi_Minh");
class StopWatch
{
    private $startTime ;
    private $endTime  ;

    public function __construct()
    {
        $this->endTime= date('H:i:s') ;
    }
    public function getStartTime()
    {
        return $this->startTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function startTime()
    {
        $this->startTime = date('H:i:s');
    }

    public function stopTime()
    {
        $this->endTime = date('H:i:s');
    }

    public function getElapsedTime()
    {
        return strtotime($this->endTime) - strtotime($this->startTime);
    }
}
