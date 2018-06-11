<?php

$astronaut['firstName'] = $_GET['fname'] ?? NULL;
$astronaut['lastName']  = $_GET['lname'] ?? NULL;
$astronaut['specialty'] = $_GET['spec'] ?? NULL;

// This condition fails early on required keys not being set
if(!(isset($astronaut['firstName']) 
	 && isset($astronaut['lastName']) 
	 && isset($astronaut['specialty']))) {
    exit 'Information incomplete';
}
echo 'Information received ... proceeding with the code';

