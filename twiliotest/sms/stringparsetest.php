<?php
	
	echo "hello";
	include 'stringparse.php';
	$smsstring = "Singapore / deaf / no help at store / nicholas ";
	$checkflag = checkparse($smsstring);
	$result = parsetolist($smsstring);
	echo gettype($result);
	echo print_r($result);


?>

	
	
	
	
