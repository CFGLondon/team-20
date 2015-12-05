<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Message>Thank you for contacting us!</Message>
</Response>
<?php
	include 'stringparse.php';
	$servername = "ec2-54-170-43-20.eu-west-1.compute.amazonaws.com";
	$username = "root";
	$password = "code4good";
	$dbname = "add_db";
	$smsstring=$_REQUEST['Body'];
	$checkflag = checkparse($smsstring);
	$parsed = parsetolist($smsstring);
	try {
		$nameout = $parsed[3];
	} catch (Exception $e) {
		$nameout = 'N.A.';
	}	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	$sql = "INSERT INTO Report(``disability_prose`,`location_prose`,`problem_prose`,`lat`,`long`,`location_is_precise`,`time_sent`,`requires_editing`,`is_solved`,`time_updated`,`sms_id`,`name`) 
	VALUES('$parsed[1]','$parsed[0]','$parsed[2]',1.0,1.0,0,NOW(),$checkflag,0,NOW(),1,'$nameout');";
	$conn->query($sql);
	$conn->close();
?>
