<?php


class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct()
    {
        $this->speed = self::SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }

    private function getSpeed()
    {
        return $this->speed;
    }

    private function getRadius()
    {
        return $this->radius;
    }

    private function getColor()
    {
        return $this->color;
    }

    public function setSpeedFast()
    {
        return self::FAST;
    }

    public function setSpeedMedium()
    {
        return self::MEDIUM;
    }

    public function setSpeedSlow()
    {
        return self::SLOW;
    }

    public function setRadius($radius)
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
        if ($this->on) {
            echo "Speed: " . $this->getSpeed();
            echo "<br>";
            echo "Color: " . $this->getColor();
            echo "<br>";
            echo "Radius: " . $this->getRadius();
            echo "<br>";
            echo "Fan is on.";
        } else {
            echo "Color: " . $this->getColor();
            echo "<br>";
            echo "Radius: " . $this->getRadius();
            echo "<br>";
            echo "Fan is off.";
        }
    }
}