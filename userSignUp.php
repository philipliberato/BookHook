<html>
<body>

<?php

    // $connection = mysqli_connect("localhost:1234", "BookHook", "root", "");
    // if (!$connection) {
    //     echo "connection failed";
    // } else {
    // 	echo "connection successful";
    // 	}
	mysql_connect("localhost:1234", "root", "");
	$database = "BookHook";
	@mysql_select_db($database) or die( "Unable to select database");


    // session_start();

	$firstname = $_POST["firstname"];
	$lastname  = $_POST["lastname"];
	$street    = $_POST["street"];
	$city      = $_POST["city"];
	$state     = $_POST["state"];
	$zip	   = $_POST["zip"];
	$email     = $_POST["email"];

	echo "WOW";
	echo $firstname, $lastname, $email, $street, $city, $state, $zip;

	$query = "INSERT INTO siteusers VALUES ('','$firstname', '$lastname', '$street', '$city', '$state', '$zip', '$email')";
	mysql_query($query);

	mysql_close();

?>

</body>
</html>