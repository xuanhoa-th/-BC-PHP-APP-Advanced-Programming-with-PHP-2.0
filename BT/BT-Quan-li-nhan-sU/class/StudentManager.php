<?php


class StudentManager
{
    protected $listStudent = [];
    protected $filePath;
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function add($student) {
        $data = [
            "name" => $student->getname(),
            "date" => $student->getdate(),
            "adrees" => $student->getadrees(),
            "location" => $student->getlocation(),
            "detail" => $student->getdetail()
        ];
        $students = $this->getDataJson();
        array_push($students, $data);
        $this->saveDataToFile($students);
    }
    public function getStudents()
    {
        $data = $this->getDataJson();
        foreach ($data as $obj) {
            $student = new Student($obj->name,$obj->date,$obj->adrees,$obj->location,$obj->detail);
            array_push($this->listStudent,$student);
        }
        return $this->listStudent;
    }
    public function getDataJson() {
        $dataJson = file_get_contents($this->filePath);
        return json_decode($dataJson);
    }

    public function saveDataToFile($data) {
        $dataJson = json_encode($data);
        file_put_contents($this->filePath, $dataJson);
    }
    public function getStudentsByIndex($index){
        $data = $this->getDataJson();// du lieu lay ra la 1 mang
        $obj = $data[$index];
        return new Student($obj->name,$obj->date,$obj->adrees,$obj->location,$obj->detail);
    }
    public function updateStudent($index,$student){
        $data = $this->getDataJson();// du lieu lay ra la 1 man
        $arr = [
            "name" => $student->getname(),
            "date" => $student->getdate(),
            "adrees" => $student->getadrees(),
            "location" => $student->getlocation(),
            "detail" => $student->getdetail()
        ];
        $data[$index] = $arr;
        $this->saveDataToFile($data);
    }
    public function deleteStudent($index){
        $data = $this->getDataJson();
        array_splice($data,$index,1);
        $this->saveDataToFile($data);

    }
    // public function Keyword($keyword){
    //     $data = $this->getDataJson();
    //     $arrsearch = [];
    //     foreach ($data as $item){
    //         if ($item['name'] == $keyword){
    //             $student = new Student($item['name'],$item['email'],$item['phone'],);
    //             array_push($arrsearch,$student);
    //         }
    //     }
    //     return $arrsearch;
    // }
}