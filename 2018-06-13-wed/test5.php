<?php
$test = [1,2,3,4,5];

// foreach takes an array as argument
$output = '';
foreach ($test as $number) {
	$output .= $number . PHP_EOL;
}
echo $output;

// but .. foreach also takes an iteration or its equivalent as argument
$iterator = new ArrayIterator($test);
$output = '';
foreach ($iterator as $number) {
	$output .= $number . PHP_EOL;
}
echo $output;

// what happens if you modify the array while the foreach() is still running?
$output = '';
foreach ($test as $key => $number) {
	$output .= $number . PHP_EOL;
	if ($key == 2) {
		unset($test[3]);
		var_dump($test);
	}
}
// ans: foreach() "preloads" the array in advance so it completes regardless
//      but the final modifications of the array are in place when loop ends
echo $output;
var_dump($test);
