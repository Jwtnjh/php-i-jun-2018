<?php
function add($a, $b)
{
	return ($a + $b) . PHP_EOL;
}

function dateUsa(int $time)
{
	return date('m/d/Y', $time) . PHP_EOL;
}

function dateEurope(int $time)
{
	return date('d-m-Y', $time) . PHP_EOL;
}

function dateGeneric(int $time, string $format)
{
	return date($format, $time) . PHP_EOL;
}

echo add(1, 1);
echo dateusa(time());
echo dateEurope(time());
echo dateGeneric(time(), 'l d M Y');

// this is the wrong data type
// echo dateUsa('abc');

