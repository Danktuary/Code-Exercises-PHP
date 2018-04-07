<?php

class Bob {

	public function respondTo($input) {
		$input = str_replace('\t', '', trim($input));

		if (!strlen($input)) {
			return 'Fine. Be that way!';
		}

		if (strtoupper($input) === $input && preg_match('/[A-Z]+/', $input)) {
			if (preg_match('/\?$/', $input)) {
				return 'Calm down, I know what I\'m doing!';
			}

			return 'Whoa, chill out!';
		}

		if (preg_match('/\?$/', $input)) {
			return 'Sure.';
		}

		return 'Whatever.';
	}

}
