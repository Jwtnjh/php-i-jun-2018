<?php
// An astronaut array assignment
$astronaut = ['Mark', 'Watney', 'Botanist'];
var_dump($astronaut);

// Output Mark's speciality
echo $astronaut[2] . '<br>';

// Output Mark's last name
echo $astronaut[1];

// An astronaut array assignment
$astronaut = ['firstName' => 'Mark', 
			  'lastName' => 'Watney',
			  'specialty' => 'Botanist'];

// Access the specialty value
echo $astronaut['specialty'] . '<br>';

// Access the last name value
echo $astronaut['lastName'];
