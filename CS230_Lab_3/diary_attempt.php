<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "health_diary";

	try{

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		// echo "Connected successfully";

		// sql to create table
		$sql = "CREATE TABLE diary_logs (
			id INT(6) AUTO_INCREMENT PRIMARY KEY,
			when_where VARCHAR(400) NOT NULL,
			event VARCHAR(400) NOT NULL,
			emotion VARCHAR(400) NOT NULL,
			automatic_thoughts VARCHAR(400) NOT NULL,
			rational_response VARCHAR(400) NOT NULL )";

		if($conn->query($sql) === TRUE){
			echo "dairy_logs table has been created successfully";
		}else{
			// echo "Error creating table: " . $conn->error;
		}

	} catch(PDOException $e){
		echo $query . "<br>" . $e.getMessage();
	}
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Dairy Index</title>
	<link rel="stylesheet" type="text/css" href="diary_style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>

      	// using jQuery to show the hidden table when button is pressed
       $(document).ready(function(){
    	 $('#get_old_logs').click(function(){
    	    $('.returned_row').show();
    		});
		}); 

       // This function is used to ensure none of the textfields 
       // are empty
    	function validateForm(){

    		// this line takes all the elements from the form 
    		// that have a tagName - input
       		var inputs = document.getElementsByTagName('input');
       		var isValid = true;

       		// loop through them
       		for(var i = 0; i < inputs.length; i++)
       		{
       			var current = inputs[i].value;
       			// check their lengths
       			if(current.length === 0)       				
       				isValid = false;

       		} // for i

       		// alert user and return isValid
       		alert("Is your form info valid: " + isValid);
       		return isValid;       			
       }
    </script>
    </head>
	<body>
		<h1>This is your diary account for your health</h1>

		<table id="health_data">
			<tr id="header_row">
				<th>When/Where</th>
				<th>Event</th>
				<th>Emotions</th>
				<th>Automatic Thoughts</th>
				<th>Rational Response</th>
			</tr>
			
				<?php
					$sql = "SELECT when_where, event, emotion, automatic_thoughts,
			        rational_response FROM diary_logs";
			        $result = $conn -> query($sql);

			        if($result -> num_rows > 0)
			        {	    
			        	$count = 0;  
			        	//echo "<div id='data' style='none'>";     
		                while($row = $result -> fetch_assoc())
		                {
		                	$className = "returned_row" ;
		                    echo "<tr class='$className'>
		                              <td>".$row["when_where"]."</td>
		                              <td>".$row["event"]."</td>
		                              <td>".$row["emotion"]."</td>
		                              <td>".$row["automatic_thoughts"]."</td>
		                              <td>".$row["rational_response"]."</td>
		                          </tr>";
		                } // echo "</div>";
			         } else
			        echo "0 results";
			    ?>  

		<!-- This is where I add info to the DB -->
		    
		<form name="current_log" action="insert_log.php" 
			onsubmit="return validateForm()" method="get">
	        <tr id="form_entries">
	            
	            <td><input type="text" name="when" id="when_or_where" ></td>

	            <td><input type="text" name="event" id="event_id" ></td>
	        
	            <td><input type="text" name="emotion" id="emotion_id"></td>
	       
	            <td><input type="text" name="autoT" id="automatic_thoughts"></td>
	       
	            <td><input type="text" name="rResponse" id="rational_response"></td>
	        </tr>

	    	<div id="position_submit">
		    	<input type="submit" value="Submit">
		    </div>
		</form>	
		</table>

		<!-- This button is used to show up the current logs once pressed -->
	    <button type="button" id="get_old_logs" >Get Old Logs</button>

	</body>
</html>
