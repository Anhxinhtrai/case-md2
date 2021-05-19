
<?php
if (empty($_SESSION["userLogin"])){
    header("location: Resource/Views/Pages/login.php");
}