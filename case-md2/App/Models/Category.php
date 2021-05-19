<?php


namespace App\Model;


class Category extends Model
{
    public function getCategory()
    {
        $sql= "SELECT category_id,categoriesName FROM categories";
        $stmt=$this->conn->query($sql);
        return $stmt->fetchAll();
    }
}