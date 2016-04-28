<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
	<script>
		$(document).ready(function(){

			// register link on login div
			$("#reg_button").click(function(){
				$("#login_container").hide();
				$("#register_container").show();
			});

			// already member link on register div
			$("#member_button").click(function(){
				$("#login_container").show();
				$("#register_container").hide();
			});

			// clear button on login page
			$("#login_clear").click(function(){
				document.getElementById("#u_name").innerHTML = "";
			});
		});
		
	</script>
	<style type="text/css">
		body{
			background-color: black;
		}

		a{
			color: red;
		}

		div{
			padding: 10px;
			position: centre;
			text-align: center;
			color: white;
		}

		div div{
			position: center;
			text-align: center;
			display: inline-block;
			border: solid 10px;
			border-color: grey;
			width: 400px;
		}

		#register_container{
			display: none;
		}
	</style>
</head>
<body>
	<div id="login_container">
		<div id="inner_login">
			<h1>LOGIN DETAILS</h1>
			<table>
				<form name="login" action="confirm_login.php" method="get"
					id="login_form">
					<tr>
						<td>
							USERNAME:       
						</td>
						<td>
							<input type="text" name="username" id="u_name" >
						</td>
					</tr>
					<tr>
						<td>
							PASSWORD: 
						</td>
						<td>
							<input type="text" name="password" id="p_word" >
						</td>
					</tr>
				</form>
				<tr>
					<td>
						<button form="login_form" >LOGIN</button>      
					</td>
					<td>
						<button id="login_clear">CLEAR</button>
					</td>
				</tr>
				<tr>
					<td>
						<a href="#" id="reg_button">Register</a>
					</td>
					<td>
						<a href="#" class="forgot_button">Forgot Password</a>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div id="register_container">
		<div id="inner_register">
			<h1>REGISTER DETAILS</h1>
			<table>
				<form name="register" action="reg_new_user.php" method="get"
					id="reg_form">
				<tr>
					<td>
						FIRST NAME: 
					</td>
					<td>
						<input type="text" name="first" id="f_name">
					</td>
				</tr>
				<tr>
					<td>
						LAST NAME: 
					</td>
					<td>
						<input type="text" name="last" id="l_name">
					</td>
				</tr>
				<tr>
					<td>
						USERNAME:       
					</td>
					<td>
						<input type="text" name="reg_username" id="reg_u_name">
					</td>
				</tr>
				<tr>
					<td>
						PASSWORD: 
					</td>
					<td>
						<input type="text" name="reg_password" id="reg_p_word">
					</td>
				</tr>
				<tr>
					<td>
						CONFIRM PASSWORD:       
					</td>
					<td>
						<input type="text" name="confirm_password" id="conf_p_word">
					</td>
				</tr>
				<tr>
					<td>
						<button form="reg_form">REGISTER</button>      
					</td>
					<td>
						<button>CLEAR</button>
					</td>
				</tr>
				<tr>
					<td>
						<a href="#" id="member_button">Already a member</a>
					</td>
					<td>
						<a href="#" class="forgot_button">Forgot Password</a>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<!-- use php to connect to the db -->
	<?php


	?>
</body>
</html>
