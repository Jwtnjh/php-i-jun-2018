<?php
$foo = 11;
if( $foo > 10 ) {
    $foo = 10;
} else {
    $foo = null;
}

var_dump($foo);

// The ternary does NOT yield the same results
$foo = 11;
$foo = ($foo > 10) ? $foo : null;
var_dump($foo);

// rewritten
$foo = 11;
$foo = ($foo > 10) ? 10 : null;
var_dump($foo);

// OR maybe we need to rewrite the "if" statement:
// in this case, maybe we want to "cap" the value at 10
// EXAMPLE: paginating a result set from a web query
$foo = 10;
if( $foo > 10 ) {
    $foo = 10;
} else {
    $foo = $foo;
}
var_dump($foo);

$foo = 9;
$foo = ($foo > 10) ? 10 : $foo;
var_dump($foo);


