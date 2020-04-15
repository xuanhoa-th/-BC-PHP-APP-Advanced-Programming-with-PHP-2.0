<?php


abstract class Printer
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract function makePrinter($message);

}