<?php
##James Lab: file_put_contents()

define('CONTROL_FILE', __DIR__ . '/jdhtest.txt');

function putControl($string)    
{
    return file_put_contents( CONTROL_FILE, $string );
}

function getControl()
{
    return file_get_contents( CONTROL_FILE );
}

putControl('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum');

echo getControl();
echo PHP_EOL;
echo PHP_EOL;

putControl('Four score and seven years ago our fathers brought forth on this continent, a new nation, conceived in Liberty, and dedicated to the proposition that all men are created equal.');

echo getControl();
echo PHP_EOL;
