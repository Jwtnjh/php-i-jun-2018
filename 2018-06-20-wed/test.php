<?php
## Charles
function reverseString($str)
{
	$newStr = "";
	$length = strlen($str);

	for($i = ($length -1); $i >= 0; $i--) {
		$newStr .= $str[$i];       
	}

	return $newStr;
     
}

echo reverseString("function");
