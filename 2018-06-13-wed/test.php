<?php
## Charles
    $greetings = "Hello World!";
    echo $greetings;
	echo PHP_EOL;

// 2nd program for Charles:
$valueA = 10;
$valueB = 20;

// false ^ false takes the else clause
if ( ( $valueA >= 50 ) xor ( $valueB === '20') ) {
	echo "Apples";
} else {
	echo "Oranges";
}

// true ^ true *also* takes the else clause
if ( ( $valueA >= '5' ) xor ( $valueB === 20 ) ) {
	echo "White";
} else {
	echo "Black";
}
echo PHP_EOL;

// what happens to this expression?
var_dump(( $valueA >= '5' ) );
var_dump( ( $valueB === 20 ) );
