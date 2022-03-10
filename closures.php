<?php

function sum( ...$num ): int {
    return array_sum( $num );
}


$sum = 'sum';

// echo $sum( 1, 2, 3, 4 );

$array = array( 1, 2, 3, 4 );

$power = 2;

$array2 = array_map( function( $element ) use ( $power ) {
    $power = $power + 1;
    echo $power . '<br/>';
    return $element * $power;
}, $array );

echo '<br/>' . $power;

echo '<pre>';
print_r( $array2 );
echo '</pre>';


function map_func( $element ) {
    return $element * 2;
}

$cb_f = 'map_func';

// arrow functions accept just one expression
$array2 = array_map( fn( $element ) => $element * 2,  $array );

echo '<pre>';
print_r( $array2 );
echo '</pre>';


