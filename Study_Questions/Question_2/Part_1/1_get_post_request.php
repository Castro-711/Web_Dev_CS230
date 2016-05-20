<?php

	// $_GET retrieves variables from querystring on your URL

	// $_POST retrieves variables from a POST method, usually from forms

	// $_REQUEST is a merging of $_GET and $_POST where $_POST overides $_GET.
	// Good to use $_REQUEST on self referential forms from validation.

	// the differences between get and post where covered in question 1, part 1

	// ******************* ACCESS IP IN PHP ********************** //
	// $_SERVER is an array with attribute namers like REMOTE_ADDR
	$userIP = $_SERVER['REMOTE_ADDR'];
	echo $userIP . "<br>"; // <br> is just to put rest on a new line

	// ******************* CHECK IF COOKIES ARE ENABLED IN PHP ********************** //
	// $_COOKIE is a global variable that can be used with php's isset() function
	if(isset($_COOKIE['cookieCheck']))
		echo "true";
	else
		echo "false";

?>