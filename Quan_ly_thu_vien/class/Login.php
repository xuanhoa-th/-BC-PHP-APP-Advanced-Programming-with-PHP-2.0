<?php


class Login
{
    protected $email;
    protected $password;
    public function __construct($email,$password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
}