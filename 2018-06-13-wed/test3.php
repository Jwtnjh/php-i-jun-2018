<?php
## KANDACE
echo PHP_EOL;
echo "-----------------------";
echo PHP_EOL;
echo "Lab: Conditional If";
echo PHP_EOL;
echo "-----------------------";
echo PHP_EOL;


$foo = 3;
$bar = 5;

if ( $foo > $bar ) echo "Foo is greater than bar \n";
else $foo = $bar;

echo "The value for Foo has changed \n";
var_dump($foo);

/********************************************************************************************************
* Which statement runs as part of the condition?
    * "Foo is greater than bar" 
    * $foo is assigned to $bar
    * "The value for Foo has changed" -> is also printed, I would have assumed that this would not
      have printed because when you run if ( $foo < $bar ), the only condition printed is 
      "The value for Foo has changed", which runs as the else condition.
********************************************************************************************************/


/********************************************************************************************************
* An application needs to determine the country of origin for an astronaut applicant. 
* Write a switch construct that evaluates multiple country use cases against a true boolean, 
* and sets a variable based on the condition evaluated. 
********************************************************************************************************/


echo PHP_EOL;
echo "-----------------------";
echo PHP_EOL;
echo "Lab: Switch Construct";
echo PHP_EOL;
echo "-----------------------";
echo PHP_EOL;

// Astronaut Data Array
$astronaut[] = ['firstName' => 'Mark', 'lastName' => 'Watney', 'from' => 'Albuquerque, New Mexico'];
$astronaut[] = ['firstName' => 'Melissa', 'lastName' => 'Lewis', 'from' => 'Dayton, Ohio'];
$astronaut[] = ['firstName' => 'Beth', 'lastName' => 'Johanssen', 'from' => 'Bolsward, Friesland'];
$missions = ['STS395' => $astronaut];

foreach($missions as $mission => $astronauts){
    if($mission === 'STS395'){
        foreach($astronauts as $astronaut){
            
             switch ($astronaut['from']) {
                case ('Albuquerque, New Mexico') :
					$country = 'United States';
					break;
                case ('Dayton, Ohio') :
					$country = 'United States';
					break;
                case ('Bolsward, Friesland') :
					$country = 'Netherlands';
					break;
                default :
					$country = NULL;

            } 

            echo "{$astronaut['firstName']} {$astronaut['lastName']}'s country of origin is the {$country}  ". "\n";

        }
    }
}

// an alternative way to get "from" info
$mapping = [
	'Albuquerque, New Mexico' => 'USA',
	'Dayton, Ohio' => 'USA',
	'Bolsward, Friesland' => 'Netherlands'
];

foreach (array_column($missions['STS395'], 'from') as $key => $from) {
	// NOTE: would also need switch() here to associate "from" with a country
	echo $missions['STS395'][$key]['firstName'] . ' '
	     . $missions['STS395'][$key]['lastName'] . '\'s ' 
	     . 'country of origin is the ' . $mapping[$from] . "\n";	
}
