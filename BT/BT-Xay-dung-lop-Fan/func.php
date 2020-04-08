<?php


class fan
{
CONST SLOW = 1;
CONST MEDIUM = 2;
CONST FAST = 3;
private $peed;
private $on;
private $radius;
private $color;
    public function __construct()
    {
        $this->peed = self::SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }
    public function getpeed()
    {
        return $this->peed;
    }
    public function geton()
    {
        return $this->on;
    }
    public function getradius()
    {
        return $this->radius;
    }
    public function getcolor()
    {
        return $this->color;
    }
    public function setpeedSlow()
    {
        return self::SLOW;
    }
    public function setpeedMedium()
    {
        return self::MEDIUM;
    }
    public function setpeedFast()
    {
        return self::FAST;
    }
    public function setRadiud($radius)
    {
        $this->radius = $radius;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    private function getStatus()
    {
        return $this->on;
    }
    public function setStatus()
    {
        if ($this->on) {
            return $this->on = false;
        } else return $this->on = true;
    }
    public function toString()
    {
        if ($this->on)
        {
            echo "speed :" . $this->getpeed()."<br>";
            echo "color :" . $this->getcolor()."<br>";
            echo "radius :" . $this->getradius()."<br>";
            echo "fan is on";
        } else{
            echo "color : ". $this->getcolor()."<br>";
            echo "radius : ". $this->getradius()."<br>";
            echo "fan is off";
        }
    }
}