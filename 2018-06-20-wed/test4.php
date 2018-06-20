<?php
$contents = file_get_contents('https://google.com');
str_replace('Google', 'Boogle', $contents);
echo $contents;
