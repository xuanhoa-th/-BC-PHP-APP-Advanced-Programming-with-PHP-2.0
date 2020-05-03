<?php


class LibraryBook2
{

    protected $name;
    protected $author;
    protected $publish;
    protected $version_number;
    protected $price;
    protected $image;
    protected $category_id;
    protected $status;

    public function __construct($name,$author,$publish,$version_number,$price,$image,$category_id,$status)
    {

        $this->name = $name;
        $this->price = $price;
        $this->author = $author;
        $this->publish = $publish;
        $this->version_number = $version_number;
        $this->category_id = $category_id;
        $this->image = $image;
        $this->status = $status;
    }

    public function getName()
    {
        return $this->name;
    }

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