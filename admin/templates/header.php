<?php require_once "../config.php"; ?>
<?php require_once "../vendor/autoload.php"; ?>
<?php  
    
    use Edu\Board\Support\Auth;

    $auth = new Auth;
?>

<?php  


    /**
     * Logout System 
     */
    if ( isset($_GET['logout']) AND $_GET['logout'] == 'success' ) {
        $auth -> userLogout();
    }



?>

<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title><?php echo $_SESSION['name']; ?></title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">





    <section class="vbox">



        
        <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
            <div class="navbar-header aside-md dk">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
                <a href="index.html" class="navbar-brand"> <img src="images/logo.png" class="m-r-sm" alt="scale"> <span class="hidden-nav-xs">Scale</span> </a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a>
            </div>


            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/<?php echo $_SESSION['photo']; ?>" alt="..."> </span> <?php echo $_SESSION['name']; ?><b class="caret"></b> </a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <li> <span class="arrow top"></span> <a href="password_change.php">Settings</a> </li>
                        <li> <a href="profile.html">Profile</a> </li>
                        <li class="divider"></li>
                        <li> <a href="?logout=success" >Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </header>


        <section>
            <section class="hbox stretch">



                <?php include_once "templates/menu.php"; ?>





