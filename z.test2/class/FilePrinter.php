<?php


class FilePrinter extends Printer
{
    public $filePath;
    public function __construct($name,$filePath)
    {
        parent::__construct($name);
        $this->filePath = $filePath;
    }

    public function makePrinter($message)
    {
        //mo file
        $file = fopen($this->filePath,"W+");
        //ghi noi dung vao file
        fwrite($file,$message);
        //dong file
        fclose($file);
    }

}