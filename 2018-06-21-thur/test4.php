<?php
session_start();

// cookie counter
$count = $_COOKIE['count'] ?? 0;
echo 'Cookie Count: ' . $count . PHP_EOL . '<br>';
setcookie('count', ++$count, time() + 300);

// session counter
$count2 = $_SESSION['count'] ?? 0;
echo 'Session Count: ' . $count;
$_SESSION['count'] = ++$count;

