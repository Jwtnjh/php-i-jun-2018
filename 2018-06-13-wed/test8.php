<?php
$i = 1;
$top = 10;
while ($i <= $top){
    echo "Hello World $i" . '<br/>' . PHP_EOL;
    $i++;
}

// NOTE: same thing using for()
for ($i = 1; $i <= $top; $i++) {
    echo "Hello World $i" . '<br/>' . PHP_EOL;
}

// while loop based on elapsed seconds
$count = 0;
$now = time();
$end = $now + 5;
while ($now <= $end) {
	echo $count++ . ':';
	$now = time();
}

// do while
$i = 1;
do {
    echo "Hello World $i <br>";
    $i++;
} while ( $i <= 5);
