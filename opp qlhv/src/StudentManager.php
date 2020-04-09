<?php


class StudentManager
{
    protected $listStudent = [];
    protected $filePath;
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }
    public function add($student){
        $students = $this->getDataJson();
        array_push($students,$student);
        $this->saveDatatoFile($students);
    }
    public function getStudents()
    {
       return $this->listStudent;
    }
    public function getDataJson(){
        $dataJson = file_get_contents($this->filePath);
        return json_decode($dataJson);
    }
    public function saveDatatoFile($data)
    {
        $datajson = json_encode($data);
        file_put_contents($this->filePath,$datajson);
    }
}