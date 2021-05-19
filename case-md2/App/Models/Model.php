<?php
namespace App\Model;


class Model
{
protected \PDO $conn;

public function __construct()
{
$db = new Database();
$this->conn = $db->connect();
}
}