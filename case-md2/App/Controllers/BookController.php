<?php


namespace App\Controller;

use App\Model\Book;
use App\Model\Author;
use App\Model\Category;
use App\Model\Language;
use App\Model\Location;
use App\Model\Model;
use App\Model\Publisher;
use App\Model\Storage;

class BookController
{
    protected $bookModel;

    public function __construct()
    {
        $book = new Book();
        $this->bookModel = $book;
    }

    public function deleteBook($book_id)
    {
        return $this->bookModel->deteleBook($book_id);
    }

    public function editBook($id,$request)
    {
        try {
            $this->bookModel->updateBook($id,$request);
            header("location: list.php");
        } catch (\PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    public function addBook($request)
    {
        $year = $request["year"];
        $bookName = $request["bookName"];
        $amount = $request["amount"];
        $category_id = $request["category_id"];
        $language_id = $request["language_id"];
        $author_id = $request["author_id"];
        $location_id = $request["location_id"];
        $storage_id = $request["storage_id"];
        $publisher_id = $request["publisher_id"];

        try {
            $this->bookModel->addBook($year,
                $bookName,
                $amount,
                $category_id,
                $language_id,
                $author_id,
                $location_id,
                $storage_id,
                $publisher_id);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function getBookById($book_id)
    {
        return $this->bookModel->getBookById($book_id);
    }
    public function getAllBook()
    {
        return $this->bookModel->getAllBook();
    }

    public function getAuthor()
    {
        $author = new Author();
        return $author->getAuthor();
    }

    public function getCategory()
    {
        $category = new Category();
        return $category->getCategory();
    }

    public function getLanguage()
    {
        $language = new Language();
        return $language->getLanguage();
    }

    public function getLocation()
    {
        $location = new Location();
        return $location->getLocation();

    }

    public function getPublisher()
    {
        $publisher = new Publisher();
        return $publisher->getPublisher();
    }

    public function getStorage()
    {
        $storage = new Storage();
        return $storage->getStorage();

    }

}