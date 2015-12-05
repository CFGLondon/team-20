<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Message>Thank you for contacting us! Please remember to have your message be in the form: location/disability/problem you're facing/name(optional)</Message>
</Response>
<?php
    include 'mapsclass.php';
	include 'stringparse.php';
	$servername = "ec2-54-170-43-20.eu-west-1.compute.amazonaws.com";
	$username = "root";
	$password = "code4good";
	$dbname = "add_db";
	$smsstring=$_REQUEST['Body'];
	$checkflag = checkparse($smsstring);
	$parsed = parsetolist($smsstring);
	$address=urlencode($parsed[0]);
    $loc = geocoder::getLocation($address);
	try {
		$nameout = $parsed[3];
	} catch (Exception $e) {
		$nameout = 'N.A.';
	}	
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "INSERT INTO Report(`disability_prose`,`location_prose`,`problem_prose`,`lat`,`long`,`location_is_precise`,`time_sent`,`requires_editing`,`is_solved`,`time_updated`,`sms_id`,`name`) 
	VALUES('$parsed[1]','$parsed[0]','$parsed[2]',$loc[lat],$loc[lon],0,NOW(),$checkflag,0,NOW(),1,'$nameout');";
	$conn->query($sql);
	$conn->close();
?>
