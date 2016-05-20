<!DOCTYPE html>
<html>
<head>
	<title>User payment informantion</title>
	<script type="text/javascript">
		function validate(){
			validateCardNumber();
		}

		function validateCardNumber(){

			// if using getElementsByName you must add [0]
			var x = document.getElementsByName("card_num")[0].value;

			if(x.length != 16)
				alert("Invalid card number..!  " + x.length);
			if(isNaN(x))
				alert("It must only be numbers... !");
		}
	</script>
	<style type="text/css">

		/* from here to... */
		label {
		    width:180px;
		    clear:left;
		    text-align:right;
		    padding-right:10px;
		}

		label, input{
			float: left;
		}
		
		/* here. is the code that you use to align inputs with textfields */

		#container{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		echo "<div id='container'>
				<form id='payment' method='post' onsubmit='validate(this)'>
					<label for='name'>Card Name</label><input type='text' name='name'><br>
					<label for='card_num'>Card Number</label><input type='text' name='card_num'><br>
					<label for='card_type'>Card Type</label><input type='text' name='card_type'><br>
					<label for='expiry'>Expiry Date</label><input type='text' name='expiry'><br>
					<label for='sec_code'>Security Code</label><input type='text' name='sec_code'><br>
				</form>
				<button form='payment' type='submit'>
					PAY
				</button>"
	?>

</body>
</html>