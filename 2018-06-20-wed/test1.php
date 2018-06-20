<?php

function fib($int){
    static $fibTable = array();

    return empty($fibTable[$int]) 
               ? ($fibTable[$int] = ($int>1) ? (fib($int-2) + fib($int-1)) : 1) 
               : $fibTable[$int];
};

$output  = fib(5).',';
$output .= fib(4).',';
$output .= fib(3).',';
$output .= fib(2).',';
$output .= fib(1);

echo $output.PHP_EOL;

$output  = fib(1).',';
$output .= fib(2).',';
$output .= fib(3).',';
$output .= fib(4).',';
$output .= fib(5);

echo $output.PHP_EOL;
