<!DOCTYPE html>
<html>
<head>
	<title> A user login page </title>
	<link rel="stylesheet" type="text/css" href="/op/lampp/htdocs/Study_Questions/CSS_messages.css">
	<script type="text/javascript">
		function validate(){
			var pword = document.forms["reg_form"]["p_word"].value;
			var conf = document.forms["reg_form"]["confirm"].value;

			if(pword.length < 8)
			{
				document.writeln("<div id='warning'>The password is not long enough</div> ");
				return false;
			}
			else if(pword != conf)
			{
				document.writeln("<div id='warning'>The passwords don't match</div> ");
				return false;
			}
		}
	</script>
	</style>
</head>
<body>
	<?php

		// don't forget the htmlspecialchars is used to stop attackers from injecting scripts
		// the $_SERVER["PHP_SELF"] just returns error to original page without redirecting

		echo "<div id='container'>
				<form  id='reg_form' onsubmit='return validate()' action=". htmlspecialchars($_SERVER['PHP_SELF']) .">
					Username: <input type='text' name='u_name' required><br>
					Password: <input type='text' name='p_word' required><br>
					Confirm : <input type='text' name='confirm' required><br>
				</form>
				<button form='reg_form' type='submit'>Submit</button>
			</div>";
	?>
</body>
</html>