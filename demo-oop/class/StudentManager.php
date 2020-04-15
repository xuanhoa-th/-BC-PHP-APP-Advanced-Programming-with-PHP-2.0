<?php


class StudentManager
{
    protected $listStudent = [];
    protected $filePath;
    public $array = [];

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function add($student)
    {
        $item = [
            "name" => $student->getName(),
            "email" => $student->getEmail(),
            "phone" => $student->getPhone(),
            "image" => $student->getImage()
        ];
        $data = $this->getDataJson();
        array_push($data, $item);
        $this->saveDataToFile($data);
    }

    public function getStudents()
    {
        $data = $this->getDataJson();

        foreach ($data as $obj) {
            $student = new Student($obj->name, $obj->email, $obj->phone, $obj->image);
            array_push($this->listStudent, $student);
        }
        return $this->listStudent;
    }

    public function getDataJson()
    {
        $dataJson = file_get_contents($this->filePath);
        return json_decode($dataJson);
    }

    public function saveDataToFile($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->filePath, $dataJson);
    }

    public function getStudentsByIndex($index)
    {
        $data = $this->getDataJson();
        $obj = $data[$index];
        return new Student($obj->name, $obj->email, $obj->phone, $obj->image);
    }

    public function updateStudent($index, $student)
    {
        $data = $this->getDataJson();
        $arr = [
            "name" => $student->getName(),
            "email" => $student->getEmail(),
            "phone" => $student->getPhone()
        ];
        $data[$index] = $arr;
        $this->saveDataToFile($data);
    }

    public function deleteStudent($index, $student)
    {
        $data = $this->getDataJson();
        array_splice($data, $index, 1);
        $this->saveDataToFile($data);

    }

    public function getKeyword($keyword)
    {
        $data = $this->getDataJson();
        foreach ($data as $obj) {
            if ($obj->name == $keyword) {
                $student = new Student($obj->name, $obj->email, $obj->phone);
                array_push($this->array, $student);
            }
        }
        return $this->array;
    }
}