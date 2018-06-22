<?php
function htmlTable(array $worked, string $title = 'Hours') 
{
    $html = '<table><thead>';
    $html .= "<tr><th colspan=\"2\">$title</th></tr>";
    $html .= '</thead><tbody>' . PHP_EOL;
    foreach($worked as $day => $hours){
        $html .= "<tr><th>$day</th>";
        $html .= "<td style=\"text-align:right;\">$hours</td>";
        $html .= '</tr>' . PHP_EOL;
    }
    $html .= '</tbody></table>' . PHP_EOL;
    return $html;
}
$worked = [
	'Monday' => 8, 
	'Tuesday' => 4, 
	'Wednesday' => 1, 
	'Thursday' => 6,
	'Friday' => 9
];
echo htmlTable($worked, 'Hours Worked');
