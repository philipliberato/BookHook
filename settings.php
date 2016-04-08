<?php
    session_start();
    if(!isset($_SESSION['firstname'])) {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BookHook</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="css/settings.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome-animation.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand page-scroll" href="member.php"><span class="icon"><img src="img/BookHookLogo-xs.png"style="padding-bottom:3px; padding-right:8px;"></span>BookHook</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#">Manage My Books</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top">Settings</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="signout.php">Sign Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
    <div id="services" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <hr class="primary">
                    <br>    
                </div>
            </div>
        </div>
        <div class="container text-center centered">
            <div class="row text-center centered">
                <div class="col-centered">
                    <h1 class="text-lightblue">Profile Information</h1>
                   <dl class="dl-horizontal col-md-5 col-md-offset-4">
                      <dt>Name</dt> <dd><?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?></dd>
                      <dt>Address</dt> <dd><?php echo $_SESSION['street']; ?> <?php echo $_SESSION['city']; ?>, <?php echo $_SESSION['state']; ?> <?php echo $_SESSION['zip']; ?></dd>
                      <dt>Email</dt> <dd><?php echo $_SESSION['email']; ?></dd>
                      <dt>Password</dt> <dd><?php echo $_SESSION['password']; ?></dd>
                      <!-- <dt>Stripe ID</dt> <dd><?php echo $_SESSION['stripeID']; ?></dd>  -->              
                    </dl>
                    <div class="col-md-7"></div>
                    <div class="col-md-5"></div>


                </div>

            </div>
                            <button class="btn btn-lg btn-primary text-center">Update Information</button>  
        </div>
    </div>

        <img class="icon-padding" color= "black" height="100">
        <div class="header-content">
                       
        </div>
    </header>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
