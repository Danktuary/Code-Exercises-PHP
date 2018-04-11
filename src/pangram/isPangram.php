<?php

function isPangram($input) {
	// All of this could be a single line, but for the sake of readability, let's not
	$input = preg_replace('/\W+|[_0-9]+/', '', strtolower($input));
	$input = array_unique(str_split($input));
	$alphabet = str_split('abcdefghijklmnopqrstuvwxyz');
	return count($input) === count($alphabet);
}
