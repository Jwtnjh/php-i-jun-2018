<?php
## KANDACE

/* LAB 3*/
// Build the crew
$astronaut1 = ['firstName' => 'Mark', 'lastName' => 'Watney',
'specialty' => 'Botanist'];
$astronaut2 = ['firstName' => 'Melissa', 'lastName' => 'Lewis',
'specialty' => 'Commander'];
$astronaut3 = ['firstName' => 'Beth', 'lastName' => 'Johanssen',
'specialty' => 'Computer Specialist'];
$mission = ['STS395' => [$astronaut1, $astronaut2, $astronaut3]];

// Access the Computer Specialist's first name
echo $mission['STS395'][2]['firstName'];
