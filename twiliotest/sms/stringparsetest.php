<?php
	include 'stringparse.php';
	$smsstring = "Singapore / deaf / no help at store / nicholas";
	$checkflag = checkparse($smsstring);
	$result = count($outputarray1);
	echo $result;
	echo $checkflag;
	}



?>
