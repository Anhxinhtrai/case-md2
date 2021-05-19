<?php


namespace App\Model;


class Author extends Model
{
    public function getAuthor()
    {
        $sql= "SELECT author_id,authorName FROM authors";
        $stmt=$this->conn->query($sql);
        return $stmt->fetchAll();
    }
}