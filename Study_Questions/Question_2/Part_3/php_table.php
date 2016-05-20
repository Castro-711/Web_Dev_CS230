<!DOCTYPE html>
<html>
<head>
	<title>PHP Table</title>
</head>
<body>
	<?php

		// declare and init the vars needed for db connection
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "userdata"; // I just chose, could be anything

		// wrap the connection lines in a try - catch block
		try{

			// create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// check connection
			if ($conn -> connect_error) 
				// the die() func prints a msg and exits the current script
				die("Connection failed: " . $conn->connect_error);

			// create sql variable to hold data
			$sql = "CREATE TABLE user_details(
				id INT(6) AUTO_INCREMENT PRIMARY KEY,
				username VARCHAR(400) NOT NULL,
				password VARCHAR(20) NOT NULL)";

			// create table
			if($conn -> query($sql) === true)
				echo "Table, user_details created successfully..!";
			else
				echo "Error creating table..!";

		} catch(PDOException $e){
			echo $query . "<br>" . $e.getMessage();
		}

		$conn -> close();

		// this is what needs to be added to any of the questions in part 2
		// I have done it just for one as the only thing that will change is 
		// possibly the table name - up to you 
		// or the string in the $sql variable, to suit the question other
		// than that it is completely the same
		
	?>

</body>
</html>