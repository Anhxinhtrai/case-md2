<?php


namespace App\Model;


class Storage extends Model
{
    public function getStorage()
    {
        $sql = "SELECT storage_id,storageName FROM storage";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }
}