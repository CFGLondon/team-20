<?php
	function checkparse($inputstring1){
		$outputarray1 = explode("/",$inputstring2);
		$result = count($outputarray1);
		echo $result;
		if ($result > 4 || $result < 3){
			return true;
		}
		else{
			return false;
		}
	}
	function parsetolist($inputstring2){
		 $outputarray2 = explode("/",$inputstring2);
		return $outputarray2;
	}



?>
