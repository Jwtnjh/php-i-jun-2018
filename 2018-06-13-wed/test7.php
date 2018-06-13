<?php
for ( $i = 1; $i <= 10; $i++) {
    echo "Count to $i" . '<br>' . PHP_EOL;
}

// every other 
for ( $i = 0; $i <= 10; $i+=2) {
    echo "Count to $i" . '<br>' . PHP_EOL;
}

// reverse
for ( $i = 10; $i >= 0; $i--) {
    echo "Count to $i" . '<br>' . PHP_EOL;
}

// multi-assign
for ( $i = 10,$j=0; $i >= 0; $i--) {
    echo "Count to $i + $j" . '<br>' . PHP_EOL;
    $j++;
}
