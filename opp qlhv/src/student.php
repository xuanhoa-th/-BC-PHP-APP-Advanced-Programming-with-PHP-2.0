<?php


class Student
{
    protected $name;
    protected $email;
    protected $phone;

    public function __construct($name,$email,$phone)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }
}