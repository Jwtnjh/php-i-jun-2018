<?php
function formatCurrency(float $value, string $arg='$') {
    switch ($arg) {
        case 'euro' :
        case '€' :
            return number_format($value, 2, ',', ' ') . '€';
        case 'pound' :
        case '£' :
            return '£' . number_format($value, 2, '.', ',');
        case 'dollar' :
        case '$' :
            return '$' . number_format($value, 2, '.', ',');
    }
    return NULL;
}
echo formatCurrency(9999, 'baht') ?? 'Unknown';
