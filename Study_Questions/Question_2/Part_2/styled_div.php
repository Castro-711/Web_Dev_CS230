<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> A styled div </title>
	<script type="text/javascript">
		function display(name, pword){

			var hid_pword = "";
			for(var i = 0; i < pword.length; i++)
				if(i > 0 && i < pword.length - 2)
					pword.replace(pword.charAt(i), '*');

			document.write("<div id='divid'><h1>Congrats " + name + ", your pass word is " + pword"</h1></div>");
		}
	</script>
	<style type="text/css"></style>
</head>
<body>
	<?php 
		// in this we are using php arrays a little different to what we are use to...
		// this is how you declare them, you can also enter elements in as parameters, like = {} in java
		// $usernames = array(); 

		// but to access ensure the array is not empty after submission we store it in a session variable
		$_SESSION['usernames'] = array();

		// to get the length, create a variable and set it equal to count($array_name);
		// not necessary for this question but  handy to know.
		$usernames_length = count($_SESSION['usernames']);

		echo "<div id='container'>
				<form id='reg_form' method='get'>
					<label for='uname'>Username</label><input type='text' name='uname'><br>
					<label for='pword'>Password</label><input type='text' name='pword'><br>
					<label for='conf_pword'>Confirm</label><input type='text' name='conf_pword'><br>
					<input type='submit'>
			  </div>";

		// this next segment is used to determine if the are previous users with that username

		$isPresent = false;

		for($i = 0; $i < $usernames_length; $i++)
		{
			if($_GET['uname'] == $_SESSION['usernames'][$i])
				$isPresent = true;
		}

		if($isPresent)
		{
			// to run js in php to dynamically supply content we must echo them like so
			echo "<div id='isMember' class='error'>
					Sorry " . $_GET['uname'] . " is already taken.
				  </div>";
		}
		else
		{
			// to add to the end of the array we use the array_push() function
			// it takes parameters, first being the array, second being the value you wish to 
			// store at the end. It can take more params should you wish to add more than one element.
			array_push($_SESSION['usernames'], $_GET['uname']);		
		}

		print_r($_SESSION['usernames']);


		
	?>

</body>
</html>