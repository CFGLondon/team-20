<?php
	function checkparse($inputstring1){
		$outputarray1 = explode("/",$inputstring1);
		$result = count($outputarray1);
		if ($result > 4 || $result < 3){
			return 1;
		}
		else{
			return 0;
		}
	}
	function parsetolist($inputstring2){
		$new_arr = array_map('trim', explode('/', $inputstring2));
		return $new_arr;
	}



?>
