<?php
    include 'stringparse.php';
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	$smsstring=$_REQUEST['Body']
?>
<Response>
    <Message>What you said is:<?php echo $smsstring?></Message>
</Response>
