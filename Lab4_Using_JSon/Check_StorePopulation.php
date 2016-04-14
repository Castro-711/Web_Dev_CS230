<html>
	<head>
		<meta charset="utf-8">
		<title>Store Customer Count</title>
		<style>
			#head{
				width: 500px;
				background-size: 550px;
				background-color: black;
				color: blue;
				padding: 15px;
				border-color: white;
				text-align: center;
			}
			#guts{
				width: 500px;
				background-size: 550px;
				background-color: blue;
				padding: 15px;
			}

			h4{
				background-color: white;
				color: black;
				padding: 5px;
				text-align: center; 
			}
			#pop{
				border-color: black;
				border-bottom-width: 10px;
			}
		</style>
	</head>
	<body>
		<div id="content">
			<?php
			
				$json_string = file_get_contents("http://localhost/Store_HeadCount.json");
				$json_contents = json_decode($json_string, true);
				$p_in = $json_contents[0]['people_in'];
				$p_out = $json_contents[0]['people_out'];
				if($p_in > $p_out)
					$p_current = $p_in - $p_out;
				else
					$p_current = 0;

				echo   "<div id='head'><h1>" . $json_contents[0]['store_name'] . "</h1></div>";
				echo   "<div id='guts'><h4>People who entered in the last 5 minutes: "  . $p_in . "</h4>";
				echo   "<h4>People who exited in the last 5 minutes: "  . $p_out . "</h4>";
				echo   "<div id='pop'><h4>Current store population is: " . $p_current. "</h4></div></div>";
				echo   "<script>loadDoc()</script>";
			
			?>
		</div>
		 <!-- this line is used to refresh the page every 30 seconds to ensure the latest data is displayed -->
        <meta http-equiv="refresh" content="30;url=Check_StorePopulation.php">
	</body>
</html>

