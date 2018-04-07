<?php

function acronym($phrase) {
	preg_match_all('/(?<=\b|[a-z])[A-Z]|\b[a-z]/', $phrase, $words);

	if (count($words[0]) === 1) {
		return '';
	}

	return implode('', array_map(function($word) {
		return strtoupper(substr($word, 0, 1));
	}, $words[0]));
}
