<?php
$purchases = [
	'2018-01-01' => 'Paper',
	'2017-07-11' => 'Laptop',
	'2018-04-21' => 'Staples',
	'2016-01-01' => 'Apples',
	'2015-07-11' => 'Pears',
	'2018-03-21' => 'Bananas'
];

function listPurch(array $purchases, $sort = 'default')
{
	switch ($sort) {
		case 'sort' : 
			sort($purchases);
			break;
		case 'ksort' :
			asort($purchases);
			break;
		case 'asort' :
			asort($purchases);
			break;
		default :
			// do nothing
	}
	$output = $sort . PHP_EOL;
	$output .= '--------------------' . PHP_EOL;
	$output .= '    Date   | Item' . PHP_EOL;
	$output .= '--------------------' . PHP_EOL;
	foreach ($purchases as $key => $value) {
		$output .= sprintf('%10s | %s' . PHP_EOL, $key, $value);
	}
	return $output;
}

// everything is out of order
echo listPurch($purchases);

// sort() is by value but re-keys array
echo listPurch($purchases, 'sort');

// asort() is by value but retains the keys
echo listPurch($purchases, 'asort');

// ksort() is by key
echo listPurch($purchases, 'ksort');
