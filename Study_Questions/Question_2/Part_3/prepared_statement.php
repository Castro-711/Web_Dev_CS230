<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		
    	// a prepared statement is used to execute the same(or similar) SQL  statements repeatedly with high efficiency

    	// Prepared Statements:
    	// An SQL  statement template is created and sent to the database. Certain values are left upsecified, called parameters
    	// labelled ? i.e. INSERT INTO myGuests VALUES(?, ?, ?);
    	// the database parses, compiles, and performs query optimizations on the SQL statement template, and stores the result without 
    	// executing it
    	// At a later time, the application binds the values to the parameters, and the database executes the statement. The application
    	// the application my exectute the statement as many times as it wants with different values.

    	// advantages of prepared statements over executing statements directly.

		// 1.
    	// Prepared statements reduces parsing time as the preparation on the query is done lonly once (although the statement is 
    	// executed multiple times), Bound parameters minimized bandwidth to the server as you need send only 
		// the parameters each time, and not the whole query

		// 2.
    	// Prepared Statements are very useful against SQL injecions, because parameter values, which aare transmitted later using a 
    	// different protocol need not be correctly escaped. If the original statement template is not derived from external input, SQL  
		// injection cannot occur

		// an example of a prepared statement

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "preped_details";

		// create connection
		$conn = new mysli($servername, $username, $password, $dbname);

		// check connection
		if($conn -> connect_error)
			die("Error connecting to the database...!");

		// prepare and bind
		// the question mark can take on any type and is where we want to add new data
		$stmt = $conn -> prepare("INSERT INTO myGuests (firstname, lastname, email) VALUES (?, ?, ?)");
		$stmt -> bind_param("sss", $firstname, $lastname, $email);
		// the "sss" list the types of data the parameters are
		// s - string
		// i - integer
		// d - double
		// b - BLOB  --> havent a clue what that is..
		// we must have one for each parameter...

		// set paramters and bind
		$firstname = "John";
		$lastname = "Snow";
		$email = "snow@winterfell.got";
		$stmt -> execute();
		// repeate this as many times as needed as you want

		// close statement and connection
		$stmt -> close();
		$conn -> close();

		// PDO (PHP Data Objects)
		// this is basically a lightweigh interface between php and any database
		// PDO provides a data-access abstraction layer, which means that, regarless of which database you're using, 
		// you use the same function to issue queries and fectch data. PDO does not provide a database abstraction:
		// 	it doesn't rewrite SQL or emultae missing features. You should use a full-blown abstraction layer if you need
		// that facility


		// below is a code example but it is not needed for the question, everything above is what your after.

		try {

		    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		    // prepare sql and bind parameters
		    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
		    VALUES (:firstname, :lastname, :email)");
		    $stmt->bindParam(':firstname', $firstname);
		    $stmt->bindParam(':lastname', $lastname);
		    $stmt->bindParam(':email', $email);

		    // insert a row
		    $firstname = "Tyrion";
		    $lastname = "Lannister";
		    $email = "little_t@mereen.got";
		    $stmt -> execute();

	    } 
	    catch(PDOException $e){
	    	echo "Error: " . $e->getMessage();
	    }

		$conn = null;
	
	?>
</body>
</html>