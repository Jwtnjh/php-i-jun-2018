<?php
## JAMES

// Lab: Additional Crew Members

// Build the crew
$astronaut[] = ['firstName' => 'Mark', 'lastName' => 'Watney', 'specialty' => 'Botanist'];
$astronaut[] = ['firstName' => 'Melissa', 'lastName' => 'Lewis', 'specialty' => 'Commander'];
$astronaut[] = ['firstName' => 'Beth', 'lastName' => 'Johanssen', 'specialty' => 'Computer Specialist'];

// New astronaut array assignment
$astronaut[] = ['firstName' => 'Jim', 'lastName' => 'Huss', 'specialty' => 'Old Guy'];

$mission = ['STS395' => $astronaut];

$output = "The {$mission['STS395'][3]['specialty']}, {$mission['STS395'][3]['firstName']} will initially be left behind on Mars";

echo $output;
echo '<br>' . PHP_EOL;

// Lab: Conditional If-ElseIf

$dayOfWeek = $_GET['day'] ?? 'Saturday';

if ( $dayOfWeek === 'Friday' ) {
    echo 'See you on Monday';
} elseif ( $dayOfWeek === 'Saturday' ) {
    echo 'Let\'s grab a beer.';
} else {
    echo 'See you tomorrow';
}


