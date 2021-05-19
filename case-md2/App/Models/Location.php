<?php


namespace App\Model;


class Location extends Model
{
    public function getLocation()
    {
        $sql= "SELECT location_id FROM locations";
        $stmt=$this->conn->query($sql);
        return $stmt->fetchAll();
    }
}