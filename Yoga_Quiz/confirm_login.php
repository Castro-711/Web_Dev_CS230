<!DOCTYPE html>
<html>
<head>
	<title>Confriming Login Credentials</title>
</head>
<body>
	<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "yoga_quiz";

		// create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// check connection
		if($conn -> connect_error)
			die("Connection failed: " . $conn -> connect_error);

		$sql = "SELECT username, password FROM quiz_members";

		$result = $conn -> query($sql);
		$isValid = false;

		if($result -> num_rows > 0)	
		{
			while($row = $result -> fetch_assoc())
			{
				// get the variable values from the login
				$uname = $_GET["username"];
				$pword = $_GET["password"];
				
				if($row["username"] === $uname && $row["password"] === $pword)
				{
					echo "Logging you in...";
					echo "<meta http-equiv='refresh' content='2;url=select_language.php'>";	
					$isValid = true;
				}
			}

			if(!$isValid)
			{
				echo "You are not a registered member, please return and register if you wish to play...!";
				echo "<meta http-equiv='refresh' content='3;url=login_register.php'>";
			}

		}
		

	?>
</body>
</html>