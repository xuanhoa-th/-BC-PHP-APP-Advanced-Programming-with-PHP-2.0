<?php
include_once "Point.php";

class MoveAblePoint extends Point
{
    protected $xSpeed;
    protected $ySpeed;
    public function __construct($x, $y,$xSpeed,$ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function MoveAblePoint(){

    }

    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed()
    {
        return [$this->xSpeed, $this->ySpeed];
    }
    public function toString()
    {
        return parent::toString() . "<br/>" .
            "Speed: " . $this->getXSpeed() ." ". $this->getYSpeed();
    }
    public function move()
    {
        $this->setX($this->getX()+$this->getXSpeed());
        $this->setY($this->getY()+$this->getYSpeed());
        return $this;
    }
}