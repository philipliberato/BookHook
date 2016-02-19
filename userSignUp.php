<html>
<body>

<?php

	$firstname = $_POST["firstname"];
	$lastname  = $_POST["lastname"];
	$email     = $_POST["email"];
	$street    = $_POST["street"];
	$city      = $_POST["city"];
	$state     = $_POST["state"];
	$zip	   = $_POST["zip"];

	echo "WOW";
	echo $firstname, $lastname, $email, $street, $city, $state, $zip;

?>

</body>
</html>