<?php


date_default_timezone_set("Asia/Bangkok");
class StopWatch
{
    private $startTime ;
    private $endTime  ;

    public function getStartTime()
    {
        return $this->startTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }

    public function __construct()
    {
        $this->endTime= date('H:i:s') ;
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
