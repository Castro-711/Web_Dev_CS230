<!DOCTYPE html>
<html>
<head>
	<title>TValidate user name and email with JS before submitting</title>
	<script type='text/javascript'>
		// to be recognized in jsfiddle functions need the same signature as below
		function validateEmail() {
		    var x = document.forms["usr_form"]["usr_email"].value;
		    if (x.indexOf('@') < 0) {
		        alert("Not a valid email..!");
		        return false;
		    }
		    setTimeout(success(), 10000);
		}

		function success(){
			var suc = document.getElementById('success');
			suc.style.visibility = 'visible';
		}
	</script>
	<style type='text/css'>
		.container{
			width: 300px;
			height: 175px;
			padding: 5px;
			margin: 0 auto;
			text-align: center;
			background-color: grey;
			top: 50%;
		}

		#success{
			visibility: hidden;
			width: 300px;
			height: 175px;
			padding: 5px;
			margin: 0 auto;
			text-align: center;
			background-color: green;
			top: 50%;
		}
	</style>
</head>
<body>
	<div class="container">
		<!-- the htmlspecialchars is used to protect against any html or js injections by attackers -->
		<!-- the $_SERVER["PHP_SELF"] is used to submit and show error on the same page user is on -->
		<form method="post" id="usr_form" onsubmit="return validateEmail();" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
			Name: <input type="text" name="usr_name"><br>
			Email: <input type="text" name="usr_email"><br>
			<input type="submit">
		</form>
	</div>
	<div id="success">
		We have validated your details.
	</div>

			
</body>
</html>