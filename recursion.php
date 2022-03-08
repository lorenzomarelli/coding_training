<?php

class Tree {
	public $value;
	public Tree $left;
	public Tree $right;
	
}

class TreeN {
	public $value;
	public array $children;
}

/*$tree = new Tree();

$tree_left = new Tree();
$tree_left->value = 'root->left';
$tree_right = new Tree();
$tree_right->value = 'root->right';
$tree_right_right = new Tree();
$tree_right_right->value = 'root->right->right';

$tree->value = 'root';

$tree->left = $tree_left;

$tree_right->right = $tree_right_right;

$tree->right = $tree_right;

traverse_bin_tree($tree);
*/

$tree = new TreeN();
$tree->value = 1;

$tree2 = new TreeN();
$tree2->value = 2;

$tree3 = new TreeN();
$tree3->value = 3;

$tree4 = new TreeN();
$tree4->value = 4;

$tree5 = new TreeN();
$tree5->value = 5;

$tree6 = new TreeN();
$tree6->value = 6;

$tree7 = new TreeN();
$tree7->value = 7;

$tree8 = new TreeN();
$tree8->value = 8;

$tree9 = new TreeN();
$tree9->value = 9;


$tree7->children = [ $tree8];
$tree6->children = [ $tree7 ];
$tree2->children = [ $tree5, $tree6 ];
$tree4->children = [ $tree9 ];
$tree->children = [ $tree2, $tree3, $tree4 ];

traverse_tree( $tree );

function traverse_bin_tree( $tree ) {
	if ( $tree !== null ) {
		echo $tree->value. "\n";
	}
	if ( isset( $tree->left ) && $tree->left !== null ) {
		traverse_bin_tree( $tree->left );
	}
	if ( isset( $tree->right ) && $tree->right !== null ) {
		traverse_bin_tree( $tree->right );
	}
}


function traverse_tree ( $tree ) {
	if ( $tree->value !== null ) {
		echo $tree->value. "\n";
	}
	if ( isset( $tree->children ) && is_array( $tree->children ) && ! empty( $tree->children ) ) {
		foreach ( $tree->children as $child ) {
			traverse_tree( $child );
		}
	}
}