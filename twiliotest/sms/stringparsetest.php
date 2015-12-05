<?php
	
	echo "hello";
	


?>
include 'stringparse.php';
	$smsstring = "Singapore / deaf / no help at store / nicholas";
	$checkflag = checkparse($smsstring);
	$result = parsetolist($smsstring);
	echo $result(0);
	echo $checkflag;
