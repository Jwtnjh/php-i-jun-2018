<?php

$test = 0;
$control = 10;

// this produces no output
echo "\nNO OUTPUT\n";
while ($test++) {
	echo '<br>' . $control-- . ':' . $test . PHP_EOL;
	if ($control === 0) {
		break;
	}
}

// this produces expected output
echo "\nOUTPUT OK\n";
$test = 0;
$control = 10;
while (++$test) {
	echo '<br>' . $control-- . ':' . $test . PHP_EOL;
	if ($control === 0) {
		break;
	}
}
