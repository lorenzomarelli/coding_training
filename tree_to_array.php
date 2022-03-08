<?php

$tree = [
	"id" => 1,
	"parent_id" => null,
	"children" => [
		 [
			"id" => 2,
			"parent_id" => 1,
			"children" => [
				[
					"id" => 3,
					"parent_id" => 2,
					"children" => []
				],
				[
					"id" => 4,
					"parent_id" => 2,
					"children" => []
				]
			]
		 ],
		 [
			"id" => 5,
			"parent_id" => 1,
			"children" => []
		 ]
	]
];

$arr = build_array( $tree );
print_r( $arr );

function build_array( array $input, $output = [] ) {
	if ( is_null( $input ) || count( $input ) === 0 ) {
		return $input;
	}		
	if ( array_key_exists( 'children', $input ) ) {
		if ( empty( $input['children'] ) )  {
			unset( $input['children'] );
			$output[] = $input;
			return $output;
		} else {
			foreach ($input['children'] as $child ) {
				$output = build_array( $child, $output );
			}
			unset( $input['children'] );
			$output[] = $input;
			return $output;
		}
	}
}
