<?php

namespace App\Model;
class Login extends Model
{
    public function checkLogin($userName,$password)
    {
        $sql = "SELECT id,name,userName,password FROM users WHERE userName=? AND password=?";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(1,$userName);
        $stmt->bindParam(2,$password);
        $stmt->execute();
        return $stmt->fetch();
    }
}