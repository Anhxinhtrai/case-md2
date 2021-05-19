<?php
require_once "../../../vendor/autoload.php";
use App\Controller\BookController;
$bookController = new BookController();
session_start();
$userLogin = $_SESSION['userLogin'];
if($userLogin["userName"]!="admin"){
    header("location: ../../Views/Books/list.php");
}
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $book_id = $_GET["delete-book"];
    $bookController->deleteBook($book_id);
    header("location: ../../Views/Books/list.php");
}