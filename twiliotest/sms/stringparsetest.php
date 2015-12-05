<?php
	include 'stringparse.php';
	$smsstring = "Singapore / deaf / no help at store / nicholas";
	$checkflag = checkparse($smsstring);
	$result = parsetolist($smsstring);
	echo "hello";
	echo $result(0);
	echo $checkflag;
	}



?>
