<?php
define('COUNTER_FILE', __DIR__ . '/counter.txt');
function getCount()
{
    if (!file_exists(COUNTER_FILE)) touch(COUNTER_FILE);
    return (int) file_get_contents(COUNTER_FILE);
}

function addHit($hits)
{
    if (!file_exists(COUNTER_FILE)) touch(COUNTER_FILE);
    file_put_contents(COUNTER_FILE, ++$hits);
}

$hits = getCount();
echo 'Hit count: ' . $hits . PHP_EOL;
addHit($hits);
