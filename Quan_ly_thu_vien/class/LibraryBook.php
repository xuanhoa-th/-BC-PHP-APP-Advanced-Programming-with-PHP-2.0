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
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * @return mixed
     */
    public function getVersionNumber()
    {
        return $this->version_number;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }


}