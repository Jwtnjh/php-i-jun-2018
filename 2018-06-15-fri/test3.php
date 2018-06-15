<?php
## JAMES

define('SYMBOL', '$');
$item[] = ['itemSku' => 'CST001', 'itemDesc' => 'Work Boots', 'itemPrice' => '35.35'];
$item[] = ['itemSku' => 'CST010', 'itemDesc' => 'Overalls', 'itemPrice' => '80.80'];
$item[] = ['itemSku' => 'CST021', 'itemDesc' => 'Helmet', 'itemPrice' => '23.00'];
$item[] = ['itemSku' => 'CST035', 'itemDesc' => 'Tool Belt', 'itemPrice' => '55.00'];
$item[] = ['itemSku' => 'CST045', 'itemDesc' => 'Shirt', 'itemPrice' => '60.00'];

$output = '<table style="width:100%">
               <thead>
                   <tr>
                       <th align="left"><u>SKU #</th>
                       <th align="left"><u>Description</th>
                       <th align="left"><u>Price</th>
                       <th align="left"><u>Tax</th>
                       <th align="left"><u>Extended</th>
                   </tr>
               </thead>
           <tbody>';
$itemCount  = count($item);

$i  = 0;
while ($i <= ($itemCount - 1)){

    $price   = $item[$i]['itemPrice'];
    $tax     = $price * .06;
    $extendPrice = $price + $tax;

    $output .= '<tr>';
    $output .= '<td>' . $item[$i]['itemSku'] . '</td>'; 
    $output .= "<td>{$item[$i]['itemDesc']}</td>";
    $output .= '<td>' . SYMBOL . number_format($item[$i]['itemPrice'], 2) . '</td>';
    $output .= sprintf('<td>%s%.2f</td>', SYMBOL, $tax); 
    $output .= sprintf('<td>%s%.2f</td>', SYMBOL, $extendPrice);
    $output .= '</tr>';
    $i++;
}

$output .= '</tbody></table>';

echo $output;
