<?php

	// Connect to DB
	mysql_connect("localhost", "root", "");
	$database = "BookHook";
	@mysql_select_db($database) or die( "Unable to select database");

	// Gather variables
	$email     = $_POST["email"];
	$password  = $_POST["password"];

	$query = "SELECT First, Last, StreetAddress, City, State, Zipcode, Email, Password, stripeID FROM siteusers WHERE Email = '$email'";
	$result = mysql_query($query) or die(mysql_error());
	$user_info = mysql_fetch_assoc($result);

	if($user_info['Email']) {
		if($user_info['Password'] == $password) {
			?>
			<script language="javascript">
			alert("Email correct, Password correct.");
			window.location.href = "signin.php";
			</script>	
			<?php
			// start a session for the logged in user
			session_start();
			// set the session variables
			$_SESSION['firstname'] = $user_info['First'];
			$_SESSION['lastname'] = $user_info['Last'];
			$_SESSION['street'] = $user_info['StreetAddress'];
			$_SESSION['city'] = $user_info['City'];
			$_SESSION['state'] = $user_info['State'];
			$_SESSION['zip'] = $user_info['Zipcode'];
			$_SESSION['email'] = $user_info['Email'];
			$_SESSION['password'] = $user_info['Password'];
			$_SESSION['stripeID'] = $user_info['stripeID'];

			header('Location: member.php');

		} else {
			?>
			<script language="javascript">
			alert("Email correct, Password incorrect.");
			window.location.href = "signin.php";
			</script>	
			<?php
		}
	} else {
		?>
		<script language="javascript">
		alert("No user exists with the given email.");
		window.location.href = "signin.php";
		</script>
		echo "The entered email is incorrect.";
		<?php
	}

	if($user_info['Email'] == $email) {
		echo $user_info['Email'];
		echo $user_info['Password'];
	} else {
		?>
		<script language="javascript">
		alert("No user exists with the given email.");
		window.location.href = "signin.php";
		</script>
		<?php
	}

	// Otherwise success
	mysql_close();

?>