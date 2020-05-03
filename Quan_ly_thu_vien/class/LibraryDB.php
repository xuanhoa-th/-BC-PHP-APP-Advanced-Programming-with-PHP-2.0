<?php


class LibraryDB
{
    protected $conn;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();

    }

    public function getAll()
    {
        $sql = " SELECT * FROM categories";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $lbArray = [];
        foreach ($result as $item) {
            $lib = new Library($item['id'], $item['name']);
            array_push($lbArray, $lib);
        }
        return $lbArray;
    }

    function delete($id)
    {
        $sql = "DELETE FROM categories WHERE id= :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function add($library)
    {
        $sql = " INSERT INTO categories(name) VALUES (:name)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":name", $library->getName());
        $stmt->execute();
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM categories WHERE id= $id ";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $Array = [];
        foreach ($result as $item) {
            $lib = new Library($item['id'], $item['name']);
            array_push($Array, $lib);
        }
        return $Array;
    }

    function edit2($id, $library)
    {
        $sql = "UPDATE categories SET name = :name WHERE id = $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":name", $library->getName());
        $stmt->execute();
    }

    public function getAllBook()
    {
        $sql = " SELECT * FROM books";

        $stmt = $this->conn->query($sql);

        $result = $stmt->fetchAll();
        $arrayBook = [];
        foreach ($result as $item) {
            $lib = new LibraryBook($item['code'], $item['name'], $item['author'], $item['publish'], $item['version_number'], $item['price'], $item['image'], $item['category_id'], $item['status']);
            array_push($arrayBook, $lib);
        }
        return $arrayBook;
    }

    public function deleteBook($code)
    {
        $sql = "DELETE FROM books WHERE code= :code";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":code", $code);
        $stmt->execute();
    }

    public function addBook($book)
    {
        $sql = " INSERT INTO books(name,author,publish,version_number,price,image,category_id,status) VALUES (:name,:author,:publish,:version_number,:price,:fileName,:category_id,:status)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":name", $book->getName());
        $stmt->bindParam(":author", $book->getAuthor());
        $stmt->bindParam(":publish", $book->getPublish());
        $stmt->bindParam(":version_number", $book->getVersionNumber());
        $stmt->bindParam(":price", $book->getPrice());
        $stmt->bindParam(":fileName", $book->getImage());
        $stmt->bindParam(":category_id", $book->getCategoryId());
        $stmt->bindParam(":status", $book->getStatus());
        $stmt->execute();

    }

    public function editBook($code)
    {
        $sql = "SELECT * FROM books WHERE code = $code ";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $ArrayEditBook = [];
        foreach ($result as $item) {
            $lib = new LibraryBook($item['code'], $item['name'], $item['author'], $item['publish'], $item['version_number'], $item['price'], $item['image'], $item['category_id'], $item['status']);
            array_push($ArrayEditBook, $lib);
        }
        return $ArrayEditBook;
    }

    function editBook2($code, $library)
    {
        $sql = "UPDATE books SET name = :name,author = :author,publish = :publish,version_number = :version_number,price = :price, image = :fileName,category_id = :category_id,status = :status   WHERE code = $code";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":name", $library->getName());
        $stmt->bindParam(":author", $library->getAuthor());
        $stmt->bindParam(":publish", $library->getPublish());
        $stmt->bindParam(":version_number", $library->getVersionNumber());
        $stmt->bindParam(":price", $library->getPrice());
        $stmt->bindParam(":fileName", $library->getImage());
        $stmt->bindParam(":category_id", $library->getCategoryId());
        $stmt->bindParam(":status", $library->getStatus());
        $stmt->execute();
    }

}