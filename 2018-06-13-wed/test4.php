<?php

## SCOTT

$valueA = "50";
$valueB = 50;

// also demonstrating the technique of capturing all output in a single variable
$output = '';

if ( $valueA == $valueB ) {
    $output .= "Equal, because both variables are 50.";
} else {
    $output .= "Not equal";
}
if ( $valueA === $valueB ) {
    $output .= "Identical";
} else {
    $output .= "Not identical, because one is a string and one is numerical.";
}
// NOTE: only 1 echo, makes more efficient use of HTTP
echo $output;

// output:
// Equal, because both variables are 50.
// Not identical, because one is a string and one is numerical.
