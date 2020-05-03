<?php


class LibraryManager
{
    protected $libraryDB;

    public function __construct()
    {
        $this->libraryDB = new LibraryDB();
    }

    public function index()
    {
        return $this->libraryDB->getAll();
    }

    public function destroy($id)
    {
        $this->libraryDB->delete($id);

    }

    public function add($library)
    {
        $this->libraryDB->add($library);
    }

    public function edit($id)
    {
        return $this->libraryDB->edit($id);
    }

    public function edit2($id, $library)
    {
        $this->libraryDB->edit2($id, $library);
    }

    public function indexBook()
    {
        return $this->libraryDB->getAllBook();
    }

    public function destroyBooks($code)
    {
        $this->libraryDB->deleteBook($code);
    }

    public function addBook($book)
    {
//        var_dump($book);
//        die();
        $this->libraryDB->addBook($book);
    }

    public function editBook($code)
    {
        return $this->libraryDB->editBook($code);
    }

    public function editBook2($code, $library)
    {
        return $this->libraryDB->editBook2($code, $library);
    }
}