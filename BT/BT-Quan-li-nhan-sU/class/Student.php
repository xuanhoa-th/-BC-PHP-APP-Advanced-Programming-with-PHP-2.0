<?php


class Student
{
    protected $name;
    protected $date;
    protected $adrees;
    protected $location;
    protected $detail;

    public function __construct($name,$date,$adrees,$location,$detail)
    {
        $this->name = $name;
        $this->date = $date;
        $this->adrees = $adrees;
        $this->location = $location;
        $this->detail = $detail;
    }
    public function getdate()
    {
        return $this->date;
    }
    public function getname()
    {
        return $this->name;
    }
    public function getadrees()
    {
        return $this->adrees;
    }
    public function getlocation()
    {
        return $this->location;
    }
    public function getdetail()
    {
        return $this->detail;
    }
    // public function getInfo()
    // {
    //     return $this->name . "-" . $this->phone;
    // }
    public function setdate()
    {
        return $this->date;
    }
    public function setname()
    {
        return $this->name;
    }
    public function setadrees()
    {
        return $this->adrees;
    }
    public function setlocation()
    {
        return $this->location;
    }
    public function setdetail()
    {
        return $this->detail;
    }
    
}