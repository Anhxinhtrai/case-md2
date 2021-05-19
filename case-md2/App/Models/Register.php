<?php


namespace App\Model;


class Register extends Model
{
    public function checkDup($userName)
    {
        $sql ="SELECT userName FROM users WHERE userName=?";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(1,$userName);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function createUser($userName,$password,$name,$phone)
    {
        $sql="INSERT INTO users VALUE (null,?,?,?,?)";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(1,$userName);
        $stmt->bindParam(2,$password);
        $stmt->bindParam(3,$name);
        $stmt->bindParam(4,$phone);
        return $stmt->execute();
    }
}