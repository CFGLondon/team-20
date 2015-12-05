<?php
    include 'stringparse.php';
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	$smsstring=$_REQUEST['Body'];
	$checkflag = checkparse($smsstring);
	$parsed = parsetolist($smsstring);
	
	
?>
<Response>
    <Message><?php echo $parsed ?>Thank you for contacting us!</Message>
</Response>
