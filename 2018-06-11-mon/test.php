<?php
## CHARLES
//An astronaut array assignment
$astronaut = ['firstName' => 'Mark', 'Watney', 5 => 'Botanist'];

// Access the last name value
echo $astronaut[0].'<br>';

// Better way to formulate the original array:
$astronaut = ['firstName' => 'Mark', 'lastName' => 'Watney', 'occupation' => 'Botanist'];

## JAMES
// An astronaut array assignment
$astronaut = ['firstName' => 'Mark', 6 => 'Watney', 5 => 'Botanist', 'STS395'];
// Access the last element value
echo $astronaut[7] . '<br>';

// quick check
var_dump($astronaut);
