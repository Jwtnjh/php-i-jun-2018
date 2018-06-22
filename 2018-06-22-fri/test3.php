<?php
##SCOTT
$emailAddress1 = 'bob@example.com'; // no characters to escape
$emailAddress2 = 'b<o>b@example."com'; // 3 characters to escape

$new1 = htmlspecialchars($emailAddress1, ENT_QUOTES);
$new2 = htmlspecialchars($emailAddress2, ENT_QUOTES);
echo $new1;
echo PHP_EOL;
echo $new2;

$new3 = filter_var($emailAddress2, FILTER_SANITIZE_EMAIL);
echo PHP_EOL;
echo $new3;
