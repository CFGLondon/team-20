<?php
	function checkparse($inputstring1){
		$outputarray1 = explode("/",$inputstring2);
		$result = count($outputarray1);
		if ($outputarray1 > 3 || $outputarray1 < 2){
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
