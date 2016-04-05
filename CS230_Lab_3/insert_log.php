<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "health_diary";

    // create connection    
    $conn = new mysqli($servername, $username, $password, $dbname);

    // check connection 
    if($conn -> connect_error)
        die("Failed to connect: " . $conn -> connect_error);

    $sql = "INSERT INTO diary_logs (when_where, event, emotion, 
            automatic_thoughts, rational_response) VALUES
        ('{$_GET['when']}', '{$_GET['event']}', '{$_GET['emotion']}', 
    '{$_GET['autoT']}', '{$_GET['rResponse']}')";

    if($conn -> query($sql) == TRUE)
        echo "New record has been logged successfully";
    else
        echo "Error: " . $sql . "<br><br>" . $conn -> error;

    $conn -> close();
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Insert_Confirm</title>
   
</head>
    <body>
        <!-- this line is used to redirect the back to the index page -->
        <meta http-equiv="refresh" content="1;url=diary_attempt.php">
    </body>
</html>