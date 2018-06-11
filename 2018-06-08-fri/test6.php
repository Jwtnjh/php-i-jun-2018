<?php
// Assignment using the define() function
define('PATH', 'some/path/location');

// Outputs the value identified by the constant
echo PATH;
echo PHP_EOL;

// Assignment using the "const" keyword
const URL = 'http://zend.com/';

// Outputs the value identified by the constant
echo URL;
echo PHP_EOL;

// magic constants
echo __FILE__ . ':' . __LINE__ . PHP_EOL;
echo __FILE__ . ':' . __LINE__ . PHP_EOL;
echo __FILE__ . ':' . __LINE__ . PHP_EOL;
