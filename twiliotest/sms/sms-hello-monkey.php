<?php
	$servername = "ec2-54-170-43-20.eu-west-1.compute.amazonaws.com";
	$username = "root";
	$password = "code4good";
	$dbname = "add_db";

    include 'stringparse.php';
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	$smsstring=$_REQUEST['Body'];
	$checkflag = checkparse($smsstring);
	$parsed = parsetolist($smsstring);
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	$sql = "INSERT INTO DisabilityCategory (category)
	VALUES ('Test')";
	$conn->query($sql);

	$conn->close();
	
?>
<Response>
    <Message>Thank you for contacting us!</Message>
</Response>
