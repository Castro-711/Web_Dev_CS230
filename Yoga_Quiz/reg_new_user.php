<!DOCTYPE html>
<html>
<head>
	<title>Success full account creation</title>
</head>
<body>
 	<h2>Congratulations you have created a new account...</h2>
 	<h4>Redirecting you back to log in...</h4>

    <!-- this line is used to redirect the back to the index page -->
    <meta http-equiv="refresh" content="5;url=login_register.php">
</body>
</html>
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

	// sql to create table
	$sql = "CREATE TABLE quiz_members (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	fname VARCHAR(250) NOT NULL,
	lname VARCHAR(250) NOT NULL,
	username VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL)";

	if($conn -> query($sql) === TRUE)	
		echo "Table Quiz Members has been created successfully";

	// insert into db
	$sql = "INSERT INTO quiz_members(fname, lname, username, password)
		VALUES('{$_GET['first']}', '{$_GET['last']}', '{$_GET['reg_username']}',
		 '{$_GET['reg_password']}')";

	if($conn -> query($sql) === TRUE)	
		echo "";
?>