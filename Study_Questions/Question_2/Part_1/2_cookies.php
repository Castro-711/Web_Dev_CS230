<!DOCTYPE html>
<html>
<head>
	<title>Cookie Functionality in PHP</title>
	<?php
		// ********** SETTING COOKKIE ************* //

		$cookie_name = "user";
		$cookie_value = "John Snow";

		// setcookie(name, value, expire, path, domain, secure, httponly)
		// only name is required the rest are optional 

		setcookie($cookie_name, $cookie_value, time() + (3600), "/"); // 3600 is 1 hour
		// the "/" parameter means the cookies is available across the whole site.
	?>
</head>
<body>
	<?php

		// ********** RETRIEVING COOKKIE ************* //

		// this checks if ithe cookie is set (using isset) 
		// and if it is not, it then sets the cookie and echoes it

		if(!isset($_COOKIE[$cookie_name]))
			echo "Cookie named " . $cookie_name . " is not set!";
		else
		{
			echo "Cookie '" . $cookie_name ."' is set <br>";
			echo "Value is: " . $_COOKIE[$cookie_name] , "<br>";
		}

		// ********** MODIFY COOKKIE ************* //

		// you simply just set the cookie again
		// change cookie value to see
		$cookie_value = "Arya Stark";

		// this next line is where the modification happens
		setcookie($cookie_name, $cookie_value, time() + 3600, "/");


		// ********** DELETE COOKKIE ************* //

		// to delete a cookie use the setcookie function
		// setting the expiry date to the past
		setcookie($cookie_name, $cookie_value, time() - 3600, "/");


		// ********** CHECK IF COOKIE'S ARE ENABLED ************* //

		if(count($_COOKIE) > 0)
			echo "Cookies are enabled";
		else
			echo "Cookies are not enabled";

		// comment out the delete cookie section to get a better idea of how it is working.

	?> 


</body>
</html>