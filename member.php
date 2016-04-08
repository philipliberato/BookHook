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

                <a class="navbar-brand page-scroll" href="#page-top"><span class="icon"><img src="img/BookHookLogo-xs.png"style="padding-bottom:3px; padding-right:8px;"></span>BookHook</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#">Manage My Books</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="settings.php">Settings</a>
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

    <div id="services" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <hr class="primary">
                    <br>    
                    <?php echo '<h2>Welcome, ' . $_SESSION["firstname"] . '!</h2>'; ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 col-left">

                    <form class="form-horizontal" action="listbook.php" method="post" id="listbookform">
                                                
                        <div class="form-group">

                            <span class="col-md-2"><h3>&nbsp;</h3></span>
                             

                            <span><h3 class="text-lightblue">List a Book for Rent</h3></span>
                            <label class="col-md-2 control-label"></label> 
                            <div class="col-md-4">
                            <label class="control-label" for="firstname">Book ISBN</label> 
                                <input class="form-control" placeholder="ISBN" id="isbn" name="isbn">
                            </div>
                            <div class="col-md-4">
                            <label class="control-label" for="lastname">City</label> 
                                <input class="form-control"placeholder="City" id="city" name="city">
                            </div>
                            <div class="col-md-2">
                                <label class="control-label" for="state">State</label> 
                                <select id="state" name="state" class="form-control">
                                    <option value="--">--</option>
                                    <option value="AL">AL</option>
                                    <option value="AK">AK</option>
                                    <option value="AZ">AZ</option>
                                    <option value="AR">AR</option>
                                    <option value="CA">CA</option>
                                    <option value="CO">CO</option>
                                    <option value="CT">CT</option>
                                    <option value="DE">DE</option>
                                    <option value="DC">DC</option>
                                    <option value="FL">FL</option>
                                    <option value="GA">GA</option>
                                    <option value="HI">HI</option>
                                    <option value="ID">ID</option>
                                    <option value="IL">IL</option>
                                    <option value="IN">IN</option>
                                    <option value="IA">IA</option>
                                    <option value="KS">KS</option>
                                    <option value="KY">KY</option>
                                    <option value="LA">LA</option>
                                    <option value="ME">ME</option>
                                    <option value="MD">MD</option>
                                    <option value="MA">MA</option>
                                    <option value="MI">MI</option>
                                    <option value="MN">MN</option>
                                    <option value="MS">MS</option>
                                    <option value="MO">MO</option>
                                    <option value="MT">MT</option>
                                    <option value="NE">NE</option>
                                    <option value="NV">NV</option>
                                    <option value="NH">NH</option>
                                    <option value="NJ">NJ</option>
                                    <option value="NM">NM</option>
                                    <option value="NY">NY</option>
                                    <option value="NC">NC</option>
                                    <option value="ND">ND</option>
                                    <option value="OH">OH</option>
                                    <option value="OK">OK</option>
                                    <option value="OR">OR</option>
                                    <option value="PA">PA</option>
                                    <option value="RI">RI</option>
                                    <option value="SC">SC</option>
                                    <option value="SD">SD</option>
                                    <option value="TN">TN</option>
                                    <option value="TX">TX</option>
                                    <option value="UT">UT</option>
                                    <option value="VT">VT</option>
                                    <option value="VA">VA</option>
                                    <option value="WA">WA</option>
                                    <option value="WV">WV</option>
                                    <option value="WI">WI</option>
                                    <option value="WY">WY</option>
                                </select>
                            </div>
                        </div>                       

                        <br>
                        
                        <div class="form-group">
                            <label class="col-md-5 control-label"></label>
                            <button class="col-md-2 btn btn-lg btn-primary" id="btn_submit">List It</button>
                        </div>

                    </form>                  
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 col-right">

                    <form class="form-horizontal" action="searchbook.php" method="post" id="searchbookform">
                                                
                        <div class="form-group">

                            <span class="col-md-2"><h3>&nbsp;</h3></span>
                             

                            <span><h3 class="text-lightblue">Search for a Book</h3></span>
                            <label class="col-md-2 control-label"></label> 
                            <div class="col-md-4">
                            <label class="control-label" for="firstname">Book ISBN</label> 
                                <input class="form-control" placeholder="ISBN" id="isbn" name="isbn">
                            </div>
                            <div class="col-md-4">
                            <label class="control-label" for="lastname">City</label> 
                                <input class="form-control"placeholder="City" id="city" name="city">
                            </div>
                            <div class="col-md-2">
                                <label class="control-label" for="state">State</label> 
                                <select id="state" name="state" class="form-control">
                                    <option value="--">--</option>
                                    <option value="AL">AL</option>
                                    <option value="AK">AK</option>
                                    <option value="AZ">AZ</option>
                                    <option value="AR">AR</option>
                                    <option value="CA">CA</option>
                                    <option value="CO">CO</option>
                                    <option value="CT">CT</option>
                                    <option value="DE">DE</option>
                                    <option value="DC">DC</option>
                                    <option value="FL">FL</option>
                                    <option value="GA">GA</option>
                                    <option value="HI">HI</option>
                                    <option value="ID">ID</option>
                                    <option value="IL">IL</option>
                                    <option value="IN">IN</option>
                                    <option value="IA">IA</option>
                                    <option value="KS">KS</option>
                                    <option value="KY">KY</option>
                                    <option value="LA">LA</option>
                                    <option value="ME">ME</option>
                                    <option value="MD">MD</option>
                                    <option value="MA">MA</option>
                                    <option value="MI">MI</option>
                                    <option value="MN">MN</option>
                                    <option value="MS">MS</option>
                                    <option value="MO">MO</option>
                                    <option value="MT">MT</option>
                                    <option value="NE">NE</option>
                                    <option value="NV">NV</option>
                                    <option value="NH">NH</option>
                                    <option value="NJ">NJ</option>
                                    <option value="NM">NM</option>
                                    <option value="NY">NY</option>
                                    <option value="NC">NC</option>
                                    <option value="ND">ND</option>
                                    <option value="OH">OH</option>
                                    <option value="OK">OK</option>
                                    <option value="OR">OR</option>
                                    <option value="PA">PA</option>
                                    <option value="RI">RI</option>
                                    <option value="SC">SC</option>
                                    <option value="SD">SD</option>
                                    <option value="TN">TN</option>
                                    <option value="TX">TX</option>
                                    <option value="UT">UT</option>
                                    <option value="VT">VT</option>
                                    <option value="VA">VA</option>
                                    <option value="WA">WA</option>
                                    <option value="WV">WV</option>
                                    <option value="WI">WI</option>
                                    <option value="WY">WY</option>
                                </select>
                            </div>
                        </div>                       

                        <br>
                        
                        <div class="form-group">
                            <label class="col-md-5 control-label"></label>
                            <button class="col-md-2 btn btn-lg btn-primary" id="btn_submit">Search</button>
                        </div>

                    </form>
                  
                </div>

                 <div class="col-md-12 col-sm-12 col-xs-12 col-centered">
                   
                    <table style="width:100%; padding-top: 100px">
                        <tr>
                            <td>
                                <p>Popular Books in Your Area:</p>
                                <a href="#">See More Here!</a>
                            </td>
                            <td>
                                <a href="#"><img src="img/algo.jpg"alt:"Algorithms"></a>
                                <p>$13.58</p>
                            </td>
                            <td>
                                <a href="#"><img src="img/write.jpg" alt:"College Writing"></a>
                                <p>$9.89</p>
                            </td> 
                            <td>
                                <a href="#"><img src="img/westciv.jpg" alt:"Western Civilization"></a>
                                <p>$12.45</p>
                            </td>
                            <td>
                                <a href="#"><img src="img/calc.jpg" alt:"Western Civilization"></a>
                                <p>$15.31</p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>Your Listed Books:</p>
                                <a href="#">See All</a>
                            </td>
                            <td>
                                <img src="img/c++.jpg" alt:"C++ and Object-oriented Programming">
                                <p>List: $15.00</p>
                                <a href="#">1 New Offer</a>
                            </td>
                            <td>
                                <img src="img/security.jpg" alt: "Computer Security">
                                <p>List: $20.00</p>
                                <a href="#">3 New Offers</a>
                            </td>
                        </tr>

                    </table> 
                </div>    
            </div>
        </div>
    </div>



    <header>
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
