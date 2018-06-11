<?php
$firstOrGivenName = 'Homer';
$lastName = 'Simpson';

$first_or_given_name = 'Marge';
$last_name = 'Simpson';

echo "$firstOrGivenName $lastName\n";
echo $first_or_given_name . ' ' . $last_name . PHP_EOL;

// mixing single and double
echo "'$firstOrGivenName' '$lastName'\n";
echo '\'' . $first_or_given_name . '\' \'' . $last_name . '\'' . PHP_EOL;
