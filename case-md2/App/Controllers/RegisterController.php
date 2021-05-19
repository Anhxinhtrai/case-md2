<?php


namespace App\Controller;

use App\Model\Register;

class RegisterController
{
    protected $registerModel;

    public function __construct()
    {
        $register = new Register();
        $this->registerModel=$register;
    }

    public function register($user)
    {
        $userName = $user["userName"];
        $password = $user["password"];
        $name = $user["name"];
        $phone = $user["phone"];
        $result = $this->registerModel->checkDup($userName);
        if (!$result){
            $this->registerModel->createUser($userName,$password,$name,$phone);
            header("location: login.php");
        }else{
            echo "tài khoản đã có người đăng kí";
            die();
        }
    }
}