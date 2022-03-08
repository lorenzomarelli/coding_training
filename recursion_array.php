<?php

//$ret = appearsIn( [ 2, 5, 7, 4, 9, 0, 22 ], 1 );
//echo $ret ? 'true' : 'false';
//echo occurrences( [ 2, 5, 7, 3, 2, 3, 3 ], 7 );

// echo '<pre>';
// print_r( negativesToZero( [ -2, 5, -7, -13, 2, -3, 3 ] ) );
// echo '</pre>';

// echo '<pre>';
// print_r( invert( [ 1, 2, 3, 4, 5, 6 ] ) );
// echo '</pre>';

$ret =  palindrome( [ 0, 1, 2, 3, 3, 2, 1] );
echo $ret ? 'true' : 'false';



function appearsIn( $array, $n ) {
	if ( is_null( $array ) || ! is_array( $array ) || empty( $array ) ) {
		return false;
	} else {
		$first_element = array_shift( $array );
		if ( $n === $first_element ){
			return true;
		} else {
			return appearsIn( $array, $n );
		}
	}
}

function occurrences( $array, $n ) {
	if ( is_null( $array ) || ! is_array( $array ) || empty( $array ) ) {
		return 0;
	} else {
		$first_element = array_shift( $array );
		if ( $n === $first_element ) {
			return 1 + occurrences( $array, $n );
		} else {
			return occurrences( $array, $n );
		}
	}
}

function negativesToZero( $array ) {
	if ( is_null( $array ) || ! is_array( $array ) || empty( $array ) ) {
		return $array;
	} else {
		return negativeToZeroRecur( $array, 0 );
	}
}

function negativeToZeroRecur( $array, $index ) {
	if ( $index === count( $array ) ) {
		return $array;
	} else {
		$array[ $index ] = ( $array[ $index ] < 0 ) ? 0 : $array[ $index ];
		return negativeToZeroRecur( $array, $index + 1 );
	}
}

function invert( $array ) {
	if ( is_null( $array ) || ! is_array( $array ) || empty( $array ) ) {
		return $array;
	} else {
		return invertRecur( $array, 0 );
	}
}

function invertRecur( array $array, $index ) {
	if ( $index == round( count( $array ) / 2, 0, PHP_ROUND_HALF_UP ) ) {	
		return $array;
	} else {
		$swp = $array[ $index ];
		$array[ $index ] = $array[ count( $array ) - 1 - $index ];
		$array[ count( $array ) - 1 - $index ] = $swp;
		return invertRecur( $array, $index + 1 );
	}
}

function palindrome( array $array ) {
	if ( is_null( $array ) || ! is_array( $array ) || empty( $array ) ) {
		return false;
	} else {
		return palindromeRecur( $array, 0 );
	}
}

function palindromeRecur( $array, $index ) {
	if ( $index == round( count( $array ) / 2, 0, PHP_ROUND_HALF_UP ) ) {
		return true;
	} else {
		if ( $array[ $index ] === $array[ count( $array ) - 1 - $index ] ) {
			return palindromeRecur( $array, $index + 1 );
		} else {
			return false;
		}
	}
}