<?php
// do while
$i = 1;
do {
    echo __LINE__ . ":Hello World $i <br>\n";
    $i++;
} while ( $i <= 5);

// do while
$i = 6;
do {
    echo __LINE__ . ":Hello World $i <br>\n";
    $i++;
} while ( $i <= 5);

// continue
for ( $i = 0; $i <= 5; $i++) {
    if ($i === 3) continue;
    echo "The  number is $i <br />";
}
