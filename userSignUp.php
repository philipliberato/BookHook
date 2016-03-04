<?php

/* ------------------------------------------------
 * STRIPE 
 * ------------------------------------------------
 */
	// Require Sripe things
	require_once('stripe-php-3.9.1/init.php');
	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey("sk_test_syYx70vwW6x5lq0Xi1cKFfsV");

	// Get the credit card details submitted by the form
	$token = $_POST['stripeToken'];

	// Create a Customer
	$customer = \Stripe\Customer::create(array(
	  "source" => $token,
	  "description" => "Example customer")
	);

	// Charge the Customer instead of the card
	$charge = \Stripe\Charge::create(array(
	  "amount" => 1000, // amount in cents, again
	  "currency" => "usd",
	  "customer" => $customer->id)
	);

	// YOUR CODE: Save the customer ID and other info in a database for later!
	// This gets inserted into our DB with everything else (I guess)
	$stripeID = $charge->customer;

	// Only need this if we happen to need to charge a user again
	// YOUR CODE: When it's time to charge the customer again, retrieve the customer ID!
	/*
	\Stripe\Charge::create(array(
	  "amount"   => 1500, // $15.00 this time
	  "currency" => "usd",
	  "customer" => $customerId // Previously stored, then retrieved
	  ));
	 */

/* ------------------------------------------------
 * DATABASE  
 * ------------------------------------------------
 */
	// Connect to DB
	mysql_connect("localhost", "root", "");
	$database = "BookHook";
	@mysql_select_db($database) or die( "Unable to select database");

	// Gather variables
	$firstname = $_POST["firstname"];
	$lastname  = $_POST["lastname"];
	$street    = $_POST["street"];
	$city      = $_POST["city"];
	$state     = $_POST["state"];
	$zip	   = $_POST["zip"];
	$email     = $_POST["email"];

	// Insert Query
	$query = "INSERT INTO siteusers VALUES ('','$firstname', '$lastname', '$street', '$city', '$state', '$zip', '$email', '$stripeID')";
	
	// Run Query
	$result = mysql_query($query);

	// Check for failure
	if (!$result) {
	    die('Invalid query: ' . mysql_error());
	}
	// Otherwise success
	mysql_close();

/* ------------------------------------------------
 * EMAIL USER 
 * ------------------------------------------------
 */
	// PHPMailer: https://github.com/PHPMailer/PHPMailer
	// Below Code Source: http://technoloread.com/send-email-with-phpmailer-using-xampp-on-your-localhost/
	require('PHPMailer/PHPMailerAutoload.php'); 

	// BookHook's gmail account!
	$sender = "info.bookhook@gmail.com";

	// Setup
	$mail = new PHPMailer();
	$mail->IsSMTP(); // send via SMTP
	$mail->SMTPAuth = true; // turn on SMTP authentication
	$mail->Host = 'smtp.gmail.com';  // Use gmail
	$mail->Username = $sender; // Enter your SMTP username
	$mail->Password = "\"gUq}VF2JC_;fQ*."; // account password 
	$mail->SMTPSecure = 'ssl';   // Enable encryption, 'ssl' also accepted  
	$mail->Port = 465;  // gmail I guess

	// To/From
	$mail->addAddress($email, $firstname);  
	$mail->From = $sender;  
	$mail->FromName = "BookHook";  

	// Content
	$mail->IsHTML(true); // send as HTML
	$mail->Subject = "Thanks for Signing Up!";
	$mail->Body = "<h3>Welcome $firstname!</h3> <p>You are now a member of BookHook! <br> You have been charged $10 for signing up. <br><br>We hope you enjoy using our site!</p> <br><br> <strong>Thanks Again!</strong> <br> The BookHook Team" ;      //HTML Body
	$mail->AltBody = "Success! You are now a member of BookHook! You have been charged $1 for signing up. We hope you enjoy using our site!";     //Plain Text Body
	
	// Send it off!
	if(!$mail->Send()){
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message has been sent";
	}

/* ------------------------------------------------
 * REDIRECT 
 * ------------------------------------------------
 */
	header('Location: index.html');

?>