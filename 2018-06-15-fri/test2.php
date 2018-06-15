<?php
$max = 100;
$output = 1 . ', ' . 2 . ', ' . 3 . ', ';
for ($x = 5; $x < $max; $x++){
// This if evaluation checks to see if number is odd or even
  $test = TRUE;
  for($i = 3; $i < $x; $i++) {
    if(($x % $i) === 0) {
      $test = FALSE;
      break;
    }
  }
  $output .= ($test) ? $x . ', ' : ''; 
}
echo substr($output, 0, -2);
