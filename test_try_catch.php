<?php


$arr = array();
try {
	$sum = 2+ null;
} catch (Exception $ex) {
	echo $ex->getMessage();
}
