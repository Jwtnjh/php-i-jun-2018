<?php
define('COUNTER_FILE', __DIR__ . '/counter.txt');
function getCount()
{
    if (!file_exists(COUNTER_FILE)) touch(COUNTER_FILE);
    $fh = fopen(COUNTER_FILE, 'r' );
    //get the current count
    $num = (int) fread( $fh, 10 );
    fclose( $fh );
    return $num;
}

function addHit($hits)
{
    if (!file_exists(COUNTER_FILE)) touch(COUNTER_FILE);
	$hits++;
    $fh = fopen(COUNTER_FILE, 'w' );
	fwrite($fh, $hits, 10);
    fclose( $fh );
}

$hits = getCount();
echo 'Hit count: ' . $hits . PHP_EOL;
addHit($hits);
