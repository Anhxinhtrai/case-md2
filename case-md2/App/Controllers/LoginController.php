<?php

namespace App\Controller;
session_start();

use App\Model\Login;

class LoginController
{
    protected $loginModel;

    public function __construct()
    {
        $login = new Login();
        $this->loginModel = $login;
    }

    public function login($request)
    {
        $userName = $request["userName"];
        $password = $request["password"];
        $result = $this->loginModel->checkLogin($userName, $password);
        if ($result) {
            $_SESSION["userLogin"] = $result;
            header("location: ../Books/list.php");
        }
    }
}