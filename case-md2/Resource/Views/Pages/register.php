
<?php
require_once "../../../vendor/autoload.php";

use App\Controller\RegisterController;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $loginController = new RegisterController();
    $loginController->register($_REQUEST);

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Login</title>
    <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/css/datepicker3.css" rel="stylesheet">
    <link href="../../../public/css/styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="../../../public/js/html5shiv.min.js"></script>
    <script src="../../../public/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Register</div>
            <div class="panel-body">
                <form role="form" method="post">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="User Name" name="userName" type="text" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Your Name" name="name" type="text" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Phone" name="phone" type="number" autofocus="">
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button></fieldset>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->


<script src="../../../public/js/jquery-1.11.1.min.js"></script>
<script src="../../../public/js/bootstrap.min.js"></script>
</body>
</html>
