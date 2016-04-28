<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Yoga Quiz Index</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script text="Javascript/text">

		var game = null;     

	    function promptForNumber(text)
		{
		    if(text != 'E' || text != 'S' ){
		     text = "Select your language..!\n  For Sanskirt type: S\n   For English type: E";   
		    }
		    var letter = window.prompt(text, "");
		    checkLetter(letter);
		}

		function checkLetter(letter){

			if (letter === 'E') 
			    window.alert("Good choice, lets play in English...!", "");
			else if (letter === 'S') 
			    window.alert("Good choice, lets play in Sanskirt...!", "");
			else 
			    promptForNumber("Your letter (" + letter + ") is not a match", "");

			var game = letter;

			$.ajax({
			    type: 'POST',
			    url: 'index.php',
			    data: {json: JSON.stringify(game)},
			    dataType: 'json'
			});
		}

		// this code I found online and helps to stop an error
		// "not normal" when loading the json file - firefox error
		$.ajaxSetup({beforeSend: function(xhr){
			  if (xhr.overrideMimeType)
			  {
			    xhr.overrideMimeType("application/json");
			  }
			}
		});
		
		// this conects to the json file to get the data
		$.ajax({
			url: 		'dbresults.json',
			dataType: 	'json',
			type: 		'get',
			cache: 		'false',
			success: function(data){
				$(data).Poses.each(index, value)
				{
					console.log("it worked!!!!");
				};
			}
		});

		// the click functions for buttons and divs etc
		$(document).ready(function(){
		    $(".image_td").click(function(){
		    	$td_index  = $(this).closest("td").index();

		    	if($td_index === 0)
		    	{
		    		$td_toHide = $(this).next().next().next();
		    		$td_toShow = $(this).next(); // we want the last radio
		    	} 
		    	else 
		    	{
		    		$td_toHide = $(this).prev().prev().prev();
		    		$td_toShow = $(this).prev(); // we want the first radio
		    	}
		        $($td_toHide).hide();
		        $($td_toShow).show();
		    });

		    $(".next").click(function(){
		    	$td_index  = $(this).closest("td").index();

		    	if($td_index <= 1)
		    	{
		    		$td_toHide = $(this).closest("td");
		    		$td_toShow = $(this).closest("td").next().next(); // we want the last radio
		    	} 
		    	else
		    	{
		    		$td_toHide = $(this).closest("td");
		    		$td_toShow = $(this).closest("td").prev().prev(); // we want the first radio
		    	}
		        $($td_toHide).hide();
		        $($td_toShow).show();

		    });
		});
	</script>

	<!-- This is my style section -->
	<style>
		body{	display: center;	}

		td{
			width: 420px;
			height: 275px;
			border: solid 10px;
			border-color: blue;
			padding: 10px;
			box-shadow: 0 0 10px 10px black inset;
		}

		img{
			width: 290px;
			height: 225px;
			position: center;
			box-shadow: 0 0 10px 10px black inset;
			display: block;
			margin: 0 auto;
		}

		.radios{
			display: none;
		}

		#table_container{
			background-color: white;
			width: 1000px;
			position: center;
		}
	</style>
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

		// sql to create table
		$sql = "CREATE TABLE yoga_cards (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		full_image_path VARCHAR(250) NOT NULL,
		half_image_path VARCHAR(250) NOT NULL,
		english_name VARCHAR(50) NOT NULL,
		sanskirt_name VARCHAR(50) NOT NULL)";

		if($conn -> query($sql) === TRUE)	
			echo "Table Yoga Cards has been created successfully";
		
		// change sql to our select statment
		$sql = "SELECT id, full_image_path, half_image_path, english_name, sanskirt_name FROM yoga_cards";
		
		$result = $conn -> query($sql);

		$row_count = 0; // track current number of rows
		echo "<div id='table_container'><table id='image_table'>";
		if($result -> num_rows > 0)
		{
			while($row = $result -> fetch_assoc())
			{
				$json_string = file_get_contents("dbresults.json");
				$json_contents = json_decode($json_string, true);

				$floater = 1;
				if($row_count > 16)
					$floater = -1;

				$language = 'sanskirt_name';

				if($row_count % 2 == 0) 
				{
					echo "<tr>";
					echo "<td class='image_td'><img src=" . $row["half_image_path"] .
							"></td><td class='radios'>
								<form class='answers' method='get' >
									<h2><--- What pose is that ?</h2>
									<ul>
										<li><input type='radio' name='question' value='0'>" . $json_contents[$row_count][$language] . "</input></li>
										<li><input type='radio' name='question' value='1'>" . $json_contents[$row_count + $floater][$language] . "</input></li>
										<li><input type='radio' name='question' value='2'>" . $json_contents[$row_count + $floater + $floater][$language] . "</input></li>
										<li><input type='radio' name='question' value='3'>" . $json_contents[$row_count + $floater + $floater + $floater][$language] . "</input></li>
									</ul>
								</form>
								<button class='next'>NEXT</button>
							</td>";
				}
				
				if($row_count % 2 == 1)
				{
					echo "<td class='radios'>
								<form class='answers' method='get' >
									<h2>What pose is that ? ---></h2>
									<ul>
										<li><input type='radio' name='question' value='0'>" . $json_contents[$row_count][$language] . "</input></li>
										<li><input type='radio' name='question' value='1'>" . $json_contents[$row_count + $floater][$language] . "</input></li>
										<li><input type='radio' name='question' value='2'>" . $json_contents[$row_count + $floater + $floater ][$language] . "</input></li>
										<li><input type='radio' name='question' value='3'>" . $json_contents[$row_count + $floater + $floater + $floater][$language] . "</input></li>
									</ul>
								</form>
								<button class='next'>NEXT</button>
							</td><td class='image_td'><img src=" . $row["half_image_path"] .
							"></td>";
					echo "</tr>";
				}

				$row_count++;

			 } // while
		} // if

		echo "</table></div>";
			
		$conn -> close();

	?>
</body>
</html>


