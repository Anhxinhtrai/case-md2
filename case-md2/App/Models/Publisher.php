<?php


namespace App\Model;


class Publisher extends Model
{
    public function getPublisher()
    {
        $sql = "SELECT publisher_id,publisherName FROM publishers";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }
}