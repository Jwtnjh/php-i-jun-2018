<?php
// Build the crew
$astronaut1 = ['firstName' => 'Mark', 'lastName' => 'Watney',
        'specialty' => 'Botanist'];
$astronaut2 = ['firstName' => 'Melissa', 'lastName' => 'Lewis',
        'specialty' => 'Commander'];
$astronaut3 = ['firstName' => 'Beth', 'lastName' => 'Johanssen',
        'specialty' => 'Computer Specialist'];
$mission = ['STS395' => [$astronaut1, $astronaut2, $astronaut3]];

// last name of the 1st person in mission STS395:
echo $mission['STS395'][0]['lastName'];
echo PHP_EOL;

// Output all elements
// print_r($mission);

// Alternate ways to Build the crew array
$mission = [];
$mission['STS395'][] = ['firstName' => 'Mark', 'lastName' => 'Watney', 'specialty' => 'Botanist'];
$mission['STS395'][] = ['firstName' => 'Melissa', 'lastName' => 'Lewis', 'specialty' => 'Commander'];
$mission['STS395'][] = ['firstName' => 'Beth', 'lastName' => 'Johanssen', 'specialty' => 'Computer Specialist'];

// Yet another ways to Build the crew array
$mission = [];
$mission = [
	'STS395' => [
		0 => ['firstName' => 'Mark',    'lastName' => 'Watney',    'specialty' => 'Botanist'],
		1 => ['firstName' => 'Melissa', 'lastName' => 'Lewis',     'specialty' => 'Commander'],
		2 => ['firstName' => 'Beth',    'lastName' => 'Johanssen', 'specialty' => 'Computer Specialist']
	]
];

print_r($mission);
