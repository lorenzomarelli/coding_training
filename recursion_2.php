<?php

// 1. Write a program in C to print first 50 natural numbers using recursion

// print_first_50_nat_numbers( 0 );

function print_first_50_nat_numbers( $number ) {
	if ( is_null( $number ) || ! is_int( $number) || $number > 50 ) {
		die();
	} else {
		echo $number . "\n";
		print_first_50_nat_numbers( $number + 1 );
	}
}

// 2. Write a program in C to calculate the sum of numbers from 1 to n using recursion. Go to the editor
// Test Data :
// Input the last number of the range starting from 1 : 5
// Expected Output :

// The sum of numbers from 1 to 5 : 
// 15

//echo sum_numbers( 0, 7 );

function sum_numbers( $number, $treshold ) {
	if ( is_null( $number ) || $number == $treshold ) {
		return $number;
	} else {
		return $number + sum_numbers( $number + 1, $treshold );
	}
}

// 3. Write a program in C to Print Fibonacci Series using recursion. Go to the editor
// Test Data :
// Input number of terms for the Series (< 20) : 10
// Expected Output :

 // Input number of terms for the Series (< 20) : 10                                
 // The Series are :                                                                
 // 1  1  2  3  5  8  13  21  34  55  

//fibonacci( 1, 0, 10 );

function fibonacci( $current, $prev, $treshold_index ) {
	if ( is_null( $current ) || is_null( $prev ) || is_null( $treshold_index ) ) {
		die();
	}
	if ( $treshold_index == 0 ) {
		return;
	} else {
		echo $current . ' ';		
		$new_prev = $current;
		$current = $current + $prev;
		fibonacci( $current, $new_prev, $treshold_index - 1 );
	}
}

// 4. Write a program in C to print the array elements using recursion. Go to the editor
// Test Data :
// Input the number of elements to be stored in the array :6
// Input 6 elements in the array :
// element - 0 : 2
// element - 1 : 4
// element - 2 : 6
// element - 3 : 8
// element - 4 : 10
// element - 5 : 12
// Expected Output :

// The elements in the array are : 2  4  6  8  10  12 

//print_array_elements_v2( [ 2, 4, 6, 8, 10, 12 ] );

function print_array_elements( $array, $key ) {
	if ( is_null( $array ) || empty( $array ) || $key == count( $array ) ) {
		return;
	} else {
		echo $key . ' : ' . $array[ $key ] . "\n";
		print_array_elements( $array, $key + 1 );
	}
}

function print_array_elements_v2( $array ) {
	if ( is_null( $array ) || empty( $array ) ) {
		return;
	} else {
		echo array_shift( $array ) . ' ';
		print_array_elements_v2( $array );
	}
}

// 5. Write a program in C to count the digits of a given number using recursion. Go to the editor
// Test Data :
// Input a number : 50
// Expected Output :

// The number of digits in the number is :  2
//echo "The number of digits in the number 6546156151561561 is: " . count_number_digits( 6546156151561561 );

function count_number_digits( $number ) {
	if ( $number < 10 ) {
		return 1;
	} else {
		return 1 + count_number_digits( $number / 10 );
	}
}

// 6. Write a program in C to find the sum of digits of a number using recursion. Go to the editor
// Test Data :
// Input any number to find sum of digits: 25
// Expected Output :

// The Sum of digits of 25 = 7 

//echo 'The Sum of digits of 14125 = ' . sum_number_digits( 14125 );

function sum_number_digits( $number ) {
	if ( $number  < 10 ) {
		return $number;
	} else {
		$tmp = $number / 10;
		return ( $tmp - floor( $tmp ) ) * 10 + sum_number_digits( floor( $tmp ) );
	}
		
}

// 7. Write a program in C to find GCD of two numbers using recursion. Go to the editor
// Test Data :
// Input 1st number: 10
// Input 2nd number: 50
// Expected Output :

// The GCD of 10 and 50 is: 10 
//echo gcd( 15, 50 );

function gcd( $numb1, $numb2 ) {
	if ( is_null( $numb1 ) || is_null( $numb2 ) ) {
		return;
	}
	$gcd_start = $numb1 < $numb2 ? $numb1 : $numb2;
	return gcd_recur( $numb1, $numb2, $gcd_start );
}

function gcd_recur( $numb1, $numb2, $gcd ) {
	if ( $gcd == 1 || ( is_int( $numb1 / $gcd ) && is_int( $numb2 / $gcd ) ) ) {
		return $gcd;
	} else {
		return gcd_recur( $numb1, $numb2, $gcd - 1 );
	}
}

// 8. Write a program in C to get the largest element of an array using recursion. Go to the editor
// Test Data :
// Input the number of elements to be stored in the array :5
// Input 5 elements in the array :
// element - 0 : 5
// element - 1 : 10
// element - 2 : 15
// element - 3 : 20
// element - 4 : 25
// Expected Output :

// Largest element of an array is: 25  

//echo largest_array_element( [ 2, 110, 4, 22, 1, 3] );

function largest_array_element( $array ) {
	if ( is_null( $array ) || empty( $array ) ) {
		die();
	}
	if ( count( $array ) == 1 ) {
		return $array[0];
	} else {
		$first_element = array_shift( $array );
		return max( $first_element, largest_array_element( $array ) );
	}
}

// 9. Write a program in C to reverse a string using recursion. Go to the editor
// Test Data :
// Input any string: w3resource
// Expected Output :

// The reversed string is: ecruoser3w   

//echo reverse_string( 'briefing' );
//echo reverse_string( 'briefing' );

function reverse_string( $string ) {
	if ( is_null( $string ) || empty( $string ) ) {
		return $string;
	} else {
		return reverse_string_recur( $string, 0 );
	}
}

function reverse_string_recur( $string, $index ) {
	if ( $index == ceil( strlen( $string ) / 2 ) ) {
		return $string;
	} else {
		$swp_char = $string[ $index ];
		$string[ $index ] = $string[ strlen( $string ) - 1 - $index ];
		$string[ strlen( $string ) - 1 - $index ] = $swp_char;
		return reverse_string_recur( $string, $index + 1 );
	}
}

// 10. Write a program in C to find the Factorial of a number using recursion. Go to the editor
// Test Data :
// Input a number : 5
// Expected Output :

// The Factorial of 5 is : 120

//echo 'The factorial of 5 is ' . factorial( 5 );

function factorial( $number ) {
	if ( is_null( $number ) ) {
		die();
	}
	if ( $number === 1 ) {
		return $number;
	} else {
		return $number * factorial( $number - 1 );
	}
}

// 11. Write a program in C to convert a decimal number to binary using recursion. Go to the editor
// Test Data :
// Input any decimal number : 66
// Expected Output :

// The Binary value of decimal no. 66 is : 1000010

//echo toBinary( 66, "");

function toBinary( $number, $binary ) {
	if ( is_null( $number ) || is_null( $binary ) ) {
		die();
	}
	if ( $number == 0 ) {
		return $binary;
	} else {
		$binary = ( $number % 2 ) . $binary;
		$number = $number / 2;
		return toBinary( floor( $number ), $binary );
	}
}

// 12. Write a program in C to check a number is a prime number or not using recursion. Go to the editor
// Test Data :
// Input any positive number : 7
// Expected Output :

// The number 7 is a prime number.   

//echo isPrime(17) ? 'true' : 'false';

function isPrime( $number ) {
	if ( is_null( $number ) ) {
		die();
	} else {
		return isPrime_recur( $number, $number - 1 );
	}
}

function isPrime_recur( $number, $checker ) {
	if ( $checker == 1 ) {
		return true;
	} else {
		if ( $number % $checker  === 0 ) {
			return false;
		} else {
			return true && isPrime_recur( $number, $checker - 1 );
		}
	}
}

// 13. Write a program in C to find the LCM of two numbers using recursion. Go to the editor
// Test Data :
// Input 1st number for LCM : 4
// Input 2nd number for LCM : 6
// Expected Output :

// The LCM of 4 and 6 :  12   

//echo 'LCM of 4 and 6 : ' . lcm( 4, 6 );
//echo 'LCM of 4 and 6 : ' . lcm_recur_v2( 9, 11, 1 );

function lcm( $num1, $num2 ) {
	if ( is_null( $num1 ) || is_null( $num2 ) || $num1 === 0 || $num2 === 0 ) {
		die();
	}
	if ( $num1 > $num2) {
		if ( ( $num1 % $num2 ) == 0 ) {
			return $num1;
		}
	} else {
		if ( ( $num2 % $num1 ) == 0 ) {
			return $num2;
		}
	}
	return lcm_recur( $num1, $num2, min( $num1, $num2 ) );
}

function lcm_recur( $num1, $num2, $lcm ) {
	if ( is_null( $lcm ) || $lcm === 0 ) {
		return die();
	}
	if ( $lcm % $num1 === 0 && $lcm % $num2 === 0 ) {
		return $lcm;
	} else {
		return lcm_recur( $num1, $num2, $lcm + 1 );
	}
}

function lcm_recur_v2( $num1, $num2, $index ) {
	if ( is_null( $index ) || $index === 0 ) {
		return die();
	}
	if ( ( ( $num1 * $index ) % $num2  ) == 0 ) {
		return $num1 * $index;
	} elseif ( ( ( $num2 * $index ) % $num1  ) == 0 ){
		return $num2 * $index;
	} else {
		return lcm_recur_v2( $num1, $num2, $index + 1 );
	}
}

// 14. Write a program in C to print even or odd numbers in given range using recursion. Go to the editor
// Test Data :
// Input the range to print starting from 1 : 10
// Expected Output :

// All even numbers from 1 to 10 are : 2  4  6  8  10                              
// All odd numbers from 1 to 10 are : 1  3  5  7  9   

//echo print_odd_even_numbers( 1, 10 );

function print_odd_even_numbers( $start, $end ) { 
	print_odd_even_numbers_recur_v2( $start, $end );
	print_odd_even_numbers_recur_v2( $start + 1, $end );
}


function print_odd_even_numbers_recur( $start, $end, $type ) {
	if ( $start > $end ) {
		return;
	}
	$module = $type === 'even' ? 0 : 1;
	if ( $start % 2 === $module ) {
		//even
		echo $start. ' ';
		print_odd_even_numbers_recur( $start + 2, $end, $type ); 
	} else {
		print_odd_even_numbers_recur( $start + 1 , $end, $type ); 
	}
}

function print_odd_even_numbers_recur_v2( $start, $end ) {
	if ( $start > $end ) {
		return;
	}
	echo $start. ' ';
	print_odd_even_numbers_recur_v2( $start + 2, $end ); 
}

// 16. Write a program in C to Check whether a given String is Palindrome or not. Go to the editor
// Test Data :
// Input a word to check for palindrome : mom
// Expected Output :

 // The entered word is a palindrome.  
 
 //echo string_palindrome( 'otto' ) ? 'true' : 'false';
 
 function string_palindrome( $string ) {
	if ( is_null( $string ) ) {
		die();
	}		
	if ( empty( $string ) ) {
		return $string;
	} else {
		return string_palindrome_recur( $string, 0 );
	}
 }
 
 function string_palindrome_recur( $string, $index ) {
	 if ( is_null( $index ) ) {
		 die();
	 } else {
		 if ( $index == floor( strlen( $string ) / 2 ) ) {
			 return true;
		 } else {
			 if ( $string[ $index ] === $string[ strlen( $string ) - 1 - $index ] ){
				 return string_palindrome_recur( $string, $index + 1 );
			 } else {
				 return false;
			 }
		 }
	 }
 }
 
 // 17. Write a program in C to calculate the power of any number using recursion. Go to the editor
// Test Data :
// Input the base value : 2
// Input the value of power : 6
// Expected Output :

// The value of 2 to the power of 6 is : 64   

//echo power( 3, 3 );

function power( $base, $power ) {
	if ( is_null( $base ) || is_null( $power ) ) {
		die();
	} elseif( $power === 0 ) {
		return 1;
	} elseif( $power === 1) {
		return $base;
	} else {
		return power_recur( $base, $power, $base );
	}
}

function power_recur( $base, $power, $track ) {
	if ( is_null( $track ) ) {
		die();
	}
	if ( $power === 1 ){
		return $track;
	} else {
		return power_recur( $base, $power - 1, $track * $base );
	}
}

// 19. Write a program in C to copy One string to another using recursion. Go to the editor
// Test Data :
// Input the string to copy : w3resource
// Expected Output :

 // The string successfully copied.                                                                              
                                                                                                              
 // The first string is : w3resource                                                                             
 // The copied string is : w3resource
 
 // $out_str = copy_string( 'ciao', '' );
 // echo $out_str;
 
 function copy_string ( $input, $output ) {
	 if ( is_null( $input ) || is_null( $output ) ) {
		 die();
	 }
	 
	 if ( strlen( $output ) === strlen ( $input ) ) {
		 return $output;
	 } else {
		 $output[ strlen( $output ) ] = $input[ strlen( $output ) ];
		 return copy_string( $input, $output );
	 }
 }
 
 // 20. Write a program in C to find the first capital letter in a string using recursion. Go to the editor
// Test Data :
// Input a string to including one or more capital letters : testString
// Expected Output :

 // The first capital letter appears in the string testString is S. 
//echo first_capital_letter( 'aspsP' );
 
 function first_capital_letter( $string ) {
	 if ( is_null( $string ) ) {
		 die();
	 }
	 if ( empty( $string ) ) {
		 return $string;
	 } else {
		 $char = substr($string, 0, 1);
		 $rest = substr($string, 1);
		 if ( ctype_upper( $char ) ) {
			 return $char;
		 } else {
			 return first_capital_letter( $rest );
		 }
	 }
 }
 
 // 21. Write a program in C for binary search using recursion. Go to the editor
// Test Data :
// Input the number of elements to store in the array :3
// Input 3 numbers of elements in the array in ascending order :
// element - 0 : 15
// element - 1 : 25
// element - 2 : 35
// Input the number to search : 35
// Expected Output :

 // The search number found in the array.
 
 //echo binary_search( [ 1, 2, 5, 7, 9, 22, 44 ], 1 ) ? 'true' : 'false';
 
 function binary_search( $array, $num ) {
	 if ( is_null( $array ) || is_null( $num ) ) {
		 die();
	 }
	 return binary_search_recur( $array, $num, 0, count( $array ) - 1 );
 }

function binary_search_recur( $array, $num, $start, $end ) {
	if ( is_null( $start ) || is_null( $end ) ) {
		return false;
	}
	if ( $end < $start ) {
		return false;
	}
	$medium = ( $start + $end ) / 2;
	if ( $array[ $medium ] === $num ) {
		return true;
	} else {
		if ( $num < $array[ $medium ] ) {
			return binary_search_recur( $array, $num, $start, $medium - 1 );
		} else {
			return binary_search_recur( $array, $num, $start + 1, $end );
		}
	}
}

// Write a recursive function to find the best path in a matrix

$matrix = [
	[ 0, 1, 1, 0 ],
	[ 0, 0, 0, 0],
	[ 1, 0, 1, 0],
	[ 1, 0, 1, 0]
];

$matrix_two = [
	[ 0, 1, 1, 1 ],
	[ 0, 0, 0, 1 ],
	[ 1, 0, 1, 1 ],
	[ 0, 0, 0, 0 ]
];


echo '<pre>';
print_r( find_best_path( $matrix_two ) );
echo '</pre>';

function print_best_path( $matrix ) {
	if ( is_null( $matrix ) ) {
		die();
	} else {
		return print_best_path_recur( $matrix, 0, 0, [] );
	}
}

function find_best_path_recur( $matrix, $x, $y, $path ) {
	if ( $x == count( $matrix[ count( $matrix ) - 1 ] ) - 1 && $y == count( $matrix ) - 1 ) {
		$path[] = [ $x, $y ];
		return $path;
	} else {
		if ( ( $x + 1 >= count( $matrix[ $y ] ) || $matrix[ $y ][ $x + 1 ] === 1 ) &&
			 ( $y + 1 >= count ( $matrix ) || $matrix[ $y + 1 ][ $x ] === 1 ) ){
			return $path;
		} else {
			$path[] = [ $x, $y ];
			if ( $x + 1 < count( $matrix[ $y ] ) && $matrix[ $y ][ $x + 1 ] === 0 ) {
				// x --> 
				$path = find_best_path_recur( $matrix, $x + 1, $y, $path );
			}
			if ( $y + 1 < count ( $matrix ) && $matrix[ $y + 1 ][ $x ] === 0 ) {
				// y --> 
				$path = find_best_path_recur( $matrix, $x, $y + 1, $path );
			}
			return $path;
		}
	}
	
}