<?php


class quadraticEquation
{
    private $a;
    private $b;
    private $c;
    private $delta;

     public function __construct($a,$b,$c)
     {
         $this->a = $a;
         $this->b = $b;
         $this->c = $c;
     }
     public function getA()
     {
      return $this->a;
     }
    public function getB()
    {
        return $this->b;
    }
    public function getC()
    {
        return $this->c;
    }
     // cong thuc tinh
    public function getDiscriminant()
    {
        $delta = ($this->b * $this->b) - 4*$this->a*$this->c;
         return $delta;
    }
    public function getRoot1()
    {
        return  (-$this->b + sqrt($this->delta)) / (2 * $this->a);
    }
    public function getRoot2()
    {
        return (-$this->b - sqrt($this->delta)) / (2 * $this->a);
    }
    public function getExp()
    {
        return (-$this->b) / (2 * $this->a);
    }

}
