<?php


class Point
{
    protected $x;
    protected $y;

    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function Point(){

    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }
    public function setXY($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY()
    {
        return [$this->x, $this->y];
    }
    function toString(){
        return "x = ".$this->getX()."y".$this->getY();
    }


}