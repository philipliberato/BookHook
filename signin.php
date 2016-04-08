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

<body id="page-top" class="bg-dark">

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

                <a class="navbar-brand page-scroll" href="index.php"><span class="icon"><img src="img/BookHookLogo-xs.png" style="padding-bottom:3px; padding-right:8px;" alt="logo"></span>BookHook</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="about.php">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="signup.php">Sign Up</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top">Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="text-center" style="padding-bottom:40px;">
        <img class="icon-padding" src="img/BookHookLogo.png" height="100">
    </div>

    <div id="services" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Sign In</h2>
                    <hr class="primary">
                    <br>    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-6 col-centered">

                    <form class="form-horizontal" action="sign_in_handler.php" method="post" id="payment-form">
                    	<span class="payment-errors"></span>
                    	
                        <div class="form-group">

                            <span class="col-md-2"><h3>&nbsp;</h3></span>
                             

                            <span><h3 class="text-lightblue">Account Info</h3></span>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-8">
                                <label class="control-label" for="email">Email</label>
                                <input class="form-control" placeholder="Example@email.com" id="email" name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-8">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                            </div>
                        </div>
                        <br>
                        <p>Forgot Password?</p>
                        <hr class="primary">

                        <br>
                        <div class="form-group">
                        	<label class="col-md-5 control-label"></label>
                        	<button class="col-md-2 btn btn-lg btn-primary" id="btn_submit">Sign In</button>
                        </div>

                    </form>
                  
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>
    <div class="navbar navbar-bottom">
            <div class="text-center">
                <p class="text-sm text-faded">Copyright &copy; BookHook 2016</p>
            </div>
        </div>
    </div>

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

    <!-- Stripe Scripts -->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
	  // This identifies your website in the createToken call below
	  Stripe.setPublishableKey('pk_test_oF9lNLtk8vwedvSBl2e41YA0');
	  // ...
	</script>

    <!-- Our Script -->
    <script>
    // FORM VALIDATION

    // Tutorial used: 
    // https://formden.com/blog/validate-contact-form-jquery

    // Use this to only run code inside when page has loaded
    $(document).ready(function() {
        var name_text   = /^[A-Za-z\-\.\'\s]{1,50}$/;
        var email_text  = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$/i;
        var street_text = /^[0-9a-zA-Z#\-\.\'\,\s]{1,100}$/;
        var zip_text    = /^[0-9]{1,5}$/;
        var pw_text     = /^.{1,50}$/;

        // FORM SUBMISSION
        $("form").submit(function (e) {
            var firstname = document.getElementById("firstname").value;
            var lastname  = document.getElementById("lastname").value;
            var email     = document.getElementById("email").value;
            var pw        = document.getElementById("password").value;
            var street    = document.getElementById("street").value;
            var city      = document.getElementById("city").value;
            var state     = document.getElementById("state").value;
            var zip       = document.getElementById("zip").value;

            if (!name_text.test(firstname)) {
                alert("First name is invalid!");
                return false;
            }
            else if (!name_text.test(lastname)) {
                alert("Last name is invalid!");
                return false;
            }
            else if (!email_text.test(email)) {
                alert("Email is invalid!");
                return false;
            }
            else if (!pw_text.test(pw)) {
                alert("Password is invalid!");
                return false;
            }
            else if (!street_text.test(street)) {
                alert("Street Address is invalid!");
                return false;
            }
            else if (!name_text.test(city)) {
                alert("City is invalid!");
                return false;
            }
            else if (state == "--") {
                alert("Please select a state!");
                return false;
            }
            else if (!zip_text.test(zip)) {
                alert("Zip code is invalid!");
                return false;
            }
            else {
            	var $form = $(this);

			    // Disable the submit button to prevent repeated clicks
			    $form.find('button').prop('disabled', true);

			    Stripe.card.createToken($form, stripeResponseHandler);

			    // Prevent the form from submitting with the default action
			    return false;
            }
        });

        // STRIPE JUNK
        function stripeResponseHandler(status, response) {
		  var $form = $('#payment-form');

		  if (response.error) {
		    // Display alert with the error message
		    alert(response.error.message);
		    $form.find('button').prop('disabled', false);
		  } else {
		    // response contains id and card, which contains additional card details
		    var token = response.id;
		    // Insert the token into the form so it gets submitted to the server
		    $form.append($('<input type="hidden" name="stripeToken" />').val(token));
		    // and submit
		    $form.get(0).submit();
		  }
		};


        // REAL TIME CHECKING

        // FIRSTNAME
        $('#firstname').on('input', function() {
            var input = $(this).val();
            if(name_text.test(input)) {
                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });
        $('#firstname').on('focusout', function() {
            var input = $(this).val();
            if(name_text.test(input)) {
                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });

        // LASTNAME
        $('#lastname').on('input', function() {
            var input = $(this).val();
            if(name_text.test(input)) {

                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });
        $('#lastname').on('focusout', function() {
            var input = $(this).val();
            if(name_text.test(input)) {
                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });

        // EMAIL
        $('#email').on('input', function() {
            var input = $(this).val();
            if(email_text.test(input)) {

                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });
        $('#email').on('focusout', function() {
            var input = $(this).val();
            if(email_text.test(input)) {
                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });

        // PASSWORD
        $('#password').on('input', function() {
            var input = $(this).val();
            if(pw_text.test(input)) {
                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });
        $('#password').on('focusout', function() {
            var input = $(this).val();
            if(pw_text.test(input)) {
                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });

        // STREET
        $('#street').on('input', function() {
            var input = $(this).val();
            if(street_text.test(input)) {

                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });
        $('#street').on('focusout', function() {
            var input = $(this).val();
            if(street_text.test(input)) {
                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });

        // CITY
        $('#city').on('input', function() {
            var input = $(this).val();
            if(name_text.test(input)) {

                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });
        $('#city').on('focusout', function() {
            var input = $(this).val();
            if(name_text.test(input)) {
                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });

        // STATE
        $('#state').on('input', function() {
            var input = $(this).val();
            if(input != "--") {
                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });
        $('#state').on('focusout', function() {
            var input = $(this).val();
            if(input != "--") {
                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });

        // ZIP
        $('#zip').on('input', function() {
            var input = $(this).val();
            if(zip_text.test(input)) {

                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });
        $('#zip').on('focusout', function() {
            var input = $(this).val();
            if(zip_text.test(input)) {
                $(this.parentNode).removeClass("has-error");
            }
            else {
                $(this.parentNode).addClass("has-error");
            }
        });

    });
    </script>

</body>

</html>
