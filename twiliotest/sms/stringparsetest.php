<?php
    include 'stringparse.php';



?>

	
	$servername = "ec2-54-170-43-20.eu-west-1.compute.amazonaws.com";
	$username = "root";
	$password = "code4good";
	$dbname = "add_db";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	$sql = "INSERT INTO RawSMSData 
	VALUES ('my message text','34555')";
	$conn->query($sql);
	$conn->close();

	
	
