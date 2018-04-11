<?php

function find($key, $items) {
	foreach ($items as $index => $item) {
		if ($key === $item) {
			return $index;
		}
	}

	return -1;
}
