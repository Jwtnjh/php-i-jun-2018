<?php
$numbers = [1,2,3,4,5];

// add to the end of array
array_push($numbers, 6);
var_dump($numbers);

// does same thing as array_push:
$numbers[] = 7;
var_dump($numbers);

// converts array to string
$string = implode(' ', $numbers);

// appending to the string
$string .= ' 8';
echo $string;
echo PHP_EOL;

// converting back to array ... BUT ...
$new = explode(' ', $string);
var_dump($new);
