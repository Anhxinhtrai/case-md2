<?php


namespace App\Model;


class Language extends Model
{
    public function getLanguage()
    {
        $sql= "SELECT language_id,languageName FROM languages";
        $stmt=$this->conn->query($sql);
        return $stmt->fetchAll();
    }
}