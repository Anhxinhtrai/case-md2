<?php
require_once "../../../vendor/autoload.php";
session_start();
$userLogin = $_SESSION['userLogin'];
if($userLogin["userName"]!="admin"){
    header("location: ../../Views/Books/list.php");
}
if($_GET["logout"]=="true"){
    session_destroy();
    header("location: ../Pages/login.php");
}
use App\Controller\BookController;
session_start();
$userLogin = $_SESSION['userLogin'];
$bookController = new BookController();
$authors = $bookController->getAuthor();
$categories = $bookController->getCategory();
$languages = $bookController->getLanguage();
$locations = $bookController->getLocation();
$publishers = $bookController->getPublisher();
$storages = $bookController->getStorage();
 if($_SERVER["REQUEST_METHOD"]=="POST"){
     $bookController->addBook($_REQUEST);
 }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Dashboard</title>
    <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../../public/css/datepicker3.css" rel="stylesheet">
    <link href="../../../public/css/styles.css" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="../../../public/js/html5shiv.min.js"></script>
    <script src="../../../public/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                </a>
                                <div class="message-body"><small class="pull-right">3 mins ago</small>
                                    <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                    <br/><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                </a>
                                <div class="message-body"><small class="pull-right">1 hour ago</small>
                                    <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                    <br/><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="all-button"><a href="#">
                                    <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                                </a></div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-bell"></em><span class="label label-info">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li><a href="#">
                                <div><em class="fa fa-envelope"></em> 1 New Message
                                    <span class="pull-right text-muted small">3 mins ago</span></div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div><em class="fa fa-heart"></em> 12 New Likes
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div><em class="fa fa-user"></em> 5 New Followers
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $userLogin["name"] ?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li><a href="list.php"><em class="fa fa-dashboard">&nbsp;</em> Book List</a></li>
        <li><a href="../Cards/list.php"><em class="fa fa-calendar">&nbsp;</em>Lịch Sử Mượn</a></li>
        <?php if ($userLogin["userName"]=="admin"){?> <li class="active"><a href="add-book.php"><em class="fa fa-bar-chart">&nbsp;</em>ADD Book</a></li><?php } ?>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1"
                                                                       class="icon pull-right"><em
                            class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
                    </a></li>
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
                    </a></li>
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
                    </a></li>
            </ul>
        </li>
        <li><a href="?logout=true"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div><!--/.row-->

    <div class="panel panel-default">
        <div class="panel-heading">Add Book</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form role="form" method="post">
                    <div class="form-group">
                        <label>Book Name</label>
                        <input class="form-control" placeholder="Book Name" name="bookName">
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="number" class="form-control" name="amount">
                    </div>
                    <div class="form-group">
                        <label>Publishing Year</label>
                        <input type="date" class="form-control" name="year">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            <?php foreach ($categories as $item) { ?>
                                <option value="<?php echo $item["category_id"] ?>"><?php echo $item["categoriesName"] ?></option>
                            <?php } ?>
                        </select></div>
                    <div class="form-group">
                        <label>Language</label>
                        <select name="language_id" class="form-control">
                            <?php foreach ($languages as $item) { ?>
                                <option value="<?php echo $item["language_id"] ?>"><?php echo $item["languageName"] ?></option>
                            <?php } ?>
                        </select></div>
                    <div class="form-group">
                        <label>Author</label>
                        <select name="author_id" class="form-control">
                            <?php foreach ($authors as $item) { ?>
                                <option value="<?php echo $item["author_id"] ?>"><?php echo $item["authorName"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <select name="location_id" class="form-control">
                            <?php foreach ($locations as $item) { ?>
                                <option value="<?php echo $item["location_id"] ?>"><?php echo $item["location_id"] ?></option>
                            <?php } ?>
                        </select></div>
                    <div class="form-group">
                        <label>Storage</label>
                        <select name="storage_id" class="form-control">
                            <?php foreach ($storages as $item) { ?>
                                <option value="<?php echo $item["storage_id"] ?>"><?php echo $item["storageName"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Publisher</label>
                        <select name="publisher_id" class="form-control">
                            <?php foreach ($publishers as $item) { ?>
                                <option value="<?php echo $item["publisher_id"] ?>"><?php echo $item["publisherName"] ?></option>
                            <?php } ?>
                        </select></div>
                    <button type="submit" class="btn btn-primary">ADD</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../../../public/js/jquery-1.11.1.min.js"></script>
    <script src="../../../public/js/bootstrap.min.js"></script>
    <script src="../../../public/js/chart.min.js"></script>
    <script src="../../../public/js/chart-data.js"></script>
    <script src="../../../public/js/easypiechart.js"></script>
    <script src="../../../public/js/easypiechart-data.js"></script>
    <script src="../../../public/js/bootstrap-datepicker.js"></script>
    <script src="../../../public/js/custom.js"></script>
    <script>
        window.onload = function () {
            var chart1 = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: "rgba(0,0,0,.2)",
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleFontColor: "#c5c7cc"
            });
        };
    </script>

</body>
</html>