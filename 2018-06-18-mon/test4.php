<?php

$a = 10;

function test()
{
	$a = 20;
	return $a;
}

$b = test();
echo $a;
// yields: 10
// because: $a on line 7 is local to the function and never goes outside
echo PHP_EOL;
echo $b;
echo PHP_EOL;

function test2($c)
{
	return $c;
}

echo test2($a);
echo PHP_EOL;

function test3($a)
{
	return $a;
}

test3($a);
echo $a;
echo PHP_EOL;
