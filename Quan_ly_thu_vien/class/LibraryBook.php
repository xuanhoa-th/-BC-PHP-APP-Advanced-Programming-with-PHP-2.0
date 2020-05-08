<?php


class LibraryBook
{
    protected $code;
    protected $name;
    protected $author;
    protected $publish;
    protected $version_number;
    protected $price;
    protected $image;
    protected $category_id;
    protected $status;
    public function __construct($code,$name,$author,$publish,$price,$version_number,$image,$category_id,$status)
    {
        $this->code = $code;
        $this->name= $name;
        $this->price = $price;
        $this->author = $author;
        $this->publish = $publish;
        $this->version_number = $version_number;
        $this->category_id = $category_id;
        $this->image = $image;
        $this->status = $status;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPublish()
    {
        return $this->publish;
    }

    public function getVersionNumber()
    {
        return $this->version_number;
    }

    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }


}