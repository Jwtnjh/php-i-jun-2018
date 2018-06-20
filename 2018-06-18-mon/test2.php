<?php
// example of infinite number of params

function add1()
{
	$args = func_get_args();
	return array_sum($args);
}

echo add1(1,2,3);
echo PHP_EOL;
echo add1(4,5,6,7,8,9);
echo PHP_EOL;

function add2(...$whatever)
{
	return array_sum($whatever);
}

echo add2(1,2,3);
echo PHP_EOL;
echo add2(4,5,6,7,8,9);
echo PHP_EOL;

function add3($title, ...$args)
{
	return $title . ':' . array_sum($args);
}

echo add3('TEST1', 1,2,3);
echo PHP_EOL;
echo add3('TEST2', 4,5,6,7,8,9);
echo PHP_EOL;
