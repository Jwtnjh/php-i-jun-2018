<?php
declare(strict_types=1); // allows "string" as a type hint
function welcome(string $arg='JavaScript'){
    return "Welcome to the wonderful world of $arg coding\n";
}

echo welcome() . '<br>';
echo welcome('PHP');
echo welcome(['Python']);
