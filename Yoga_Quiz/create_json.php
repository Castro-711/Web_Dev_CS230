<!DOCTYPE html>
<html>

<head>
	<script type="text/javascript" src="jquery.js"></script>
</head>

<body>
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

	$sql = "SELECT * FROM yoga_cards";
	$result = $conn -> query($sql);
	$json_file = fopen("dbresults.json", "w");

	fwrite ($json_file, "[\n");
	while($row = $result -> fetch_assoc())
	{
		fwrite($json_file, json_encode($row, JSON_PRETTY_PRINT));
		fwrite($json_file, ",");
	}

	fwrite ($json_file, "\n]");
	fclose($json_file);

?>