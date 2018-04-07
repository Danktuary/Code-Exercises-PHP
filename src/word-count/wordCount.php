<?php

function wordCount($input) {
	$words = preg_split('/(\b|\s)\W+(\b)?/', $input);

	$count = [];

	foreach ($words as $word) {
		$word = strtolower($word);

		if (!strlen(trim($word))) {
			continue;
		}

		$count[$word] = isset($count[$word]) ? $count[$word] + 1 : 1;
	}

	return $count;
}
