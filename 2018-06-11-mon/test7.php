<?php
$colorChoice = (isset($_GET['color'])) ? $_GET['color'] : 'unknown';
// or this way:
// $colorChoice = $_GET['color'] ?? 'unknown';

switch ($colorChoice) {
    case 'red' :
        $code = '#FF0000';
        break;
    case 'green' :
        $code = '#00FF00';
        break;
    case 'blue' :
        $code = '#0000FF';
        break;
    default :
        $code = '#000000';
}
echo '<span style="color:' . $code . ';">'
     . 'We are in ' . htmlspecialchars($colorChoice) . ' condition'
     . '</span>';
echo '<br>';
     
switch (true) {
    case ($colorChoice === 'red') :
        echo 'Alert level: <span style="color: red; font-size: 200%;">RED</span>';
        break;
    case ($colorChoice === 'olive') :
    case ($colorChoice === 'jade') :
    case ($colorChoice === 'green') :
        echo 'Alert level: <span style="color: green; font-size: 200%;">GREEN</span>';
        break;
    case ($colorChoice === 'blue') :
        echo 'Alert level: <span style="color: blue; font-size: 200%;">BLUE</span>';
        // if you break > 1 an error is generated!
        //break 2;
        break;
    default :
        echo 'Please choose red, some shade of green, or blue';
}

