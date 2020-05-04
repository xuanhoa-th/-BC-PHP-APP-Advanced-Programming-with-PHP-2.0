<?php


class LibraryStudent
{
        protected $code;
        protected $name;
        protected $birthday;
        protected $address;
        protected $email;
        protected $phone;
        protected $image;

        public function __construct($code,$name,$birthday,$address,$email,$phone,$image)
        {
            $this->code = $code;
            $this->name = $name;
            $this->birthday = $birthday;
            $this->address = $address;
            $this->email = $email;
            $this->phone = $phone;
            $this->image = $image;
        }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
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
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
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

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }
}