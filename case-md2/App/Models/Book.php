<?php


namespace App\Model;


class Book extends Model
{
    public function updateBook($book_id, $request)
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
        $sql = "UPDATE books SET year=$year,
                 bookName='$bookName',
                 amount=$amount,
                 category_id=$category_id,
                 language_id=$language_id,
                 author_id=$author_id,
                 location_id=$location_id,
                 storage_id=$storage_id,
                 publisher_id=$publisher_id WHERE book_id=$book_id";
        $stmt = $this->conn->query($sql);
        return $stmt->execute();
    }

    public function deteleBook($book_id)
    {
        $sql = "DELETE FROM books WHERE book_id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $book_id);
        return $stmt->execute();
    }

    public function addBook($year,
                            $bookName,
                            $amount,
                            $category_id,
                            $language_id,
                            $author_id,
                            $location_id,
                            $storage_id,
                            $publisher_id)
    {
        $sql = "INSERT INTO books VALUE (null,$year,'$bookName','$amount',$category_id,$language_id,$author_id,$location_id,$storage_id,$publisher_id)";
        $stmt = $this->conn->query($sql);
        return $stmt->execute();
    }

    public function getBookById($book_id)
    {
        $sql = "SELECT books.book_id,books.amount,books.bookName,categories.categoriesName,authors.authorName,books.year,publishers.publisherName,languages.languageName,storage.storageName
FROM books
JOIN categories ON books.category_id=categories.category_id
JOIN authors ON books.author_id=authors.author_id
JOIN publishers ON books.publisher_id=publishers.publisher_id
JOIN languages ON books.language_id=languages.language_id
JOIN storage ON books.storage_id=storage.storage_id WHERE books.book_id=$book_id";
        $stmt = $this->conn->query($sql);
        return $stmt->fetch();
    }

    public function getAllBook()
    {
        $sql = "SELECT books.book_id,books.bookName,categories.categoriesName,authors.authorName,books.year,publishers.publisherName,languages.languageName,storage.storageName
FROM books
JOIN categories ON books.category_id=categories.category_id
JOIN authors ON books.author_id=authors.author_id
JOIN publishers ON books.publisher_id=publishers.publisher_id
JOIN languages ON books.language_id=languages.language_id
JOIN storage ON books.storage_id=storage.storage_id";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}