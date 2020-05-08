<?php


class CategoryManager
{
    protected $categoryDB;

    public function __construct()
    {
        $this->categoryDB = new CategoryDB();
    }

    public function index()
    {
        return $this->categoryDB->getAll();
    }

    public function destroy($id)
    {
        $this->categoryDB->delete($id);

    }

    public function add($library)
    {
        $this->categoryDB->add($library);
    }

    public function findById($id)
    {
        return $this->categoryDB->findById($id);
    }

    public function edit($id, $library)
    {
        $this->categoryDB->edit($id, $library);
    }

    public function indexBook()
    {
        return $this->categoryDB->getAllBook();
    }

    public function destroyBooks($code)
    {
        $this->categoryDB->deleteBook($code);
    }

    public function addBook($book)
    {
        $this->categoryDB->addBook($book);
    }

    public function editBook($code)
    {
        return $this->categoryDB->editBook($code);
    }

    public function editBook2($code, $library)
    {
        return $this->categoryDB->editBook2($code, $library);
    }
    public function allStudent(){
        return $this->categoryDB->allStudent();
    }
    public function login(){
        return $this->categoryDB->login();
    }
}