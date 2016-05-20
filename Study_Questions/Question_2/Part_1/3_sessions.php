<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Describing sessions and how to create, modify and destroy them</title>
</head>
<body>
	<?php

		// HTTP does not maintain state, which is a problem for web apps to keep 
		// track of users as they travel through their site.

		// Session variables solve this by storing user info across multiple pages. By
		// default they last until the user closes the browser.

		// *** Simply put ****//
		// They hold info about one single user and they are available to 
		// all pages in one app.

		// ****** SET SESSION VARIABLES ****** //

		$_SESSION['club'] = "Liverpool";
		$_SESSION['got'] = "Brandon Stark";

		// this would work on another page just the same
		echo "Favourite football team: " . $_SESSION['club'] . "<br>";
		echo "Underated Thrones character: " . $_SESSION['got'] . "<br>";

		// Most sessions set a user-key and store it on the users computer, when
		// a session begins they scan the computer and if it finds a match it accesses
		// that session and if not it creates a new session.

		// ****** MODIFY SESSION VARIABLES ****** //		

		// to modify you just change the session variable
		$_SESSION['got'] = "Benjin Stark";
		print_r($_SESSION['got']);

		// ****** DESTROY A SESSION ****** //

		// remove all session variables
		session_unset();

		// destroy the session
		session_destroy();

		// To answer the last question in this section you would use mostly this and add a counter
		// make the counter a session var like the ones above
		// $_SESSION['counter']++; --> something to that affect.



	?>

</body>
</html>