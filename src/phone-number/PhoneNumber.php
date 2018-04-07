<?php

class PhoneNumber {

	protected $number;

	public function __construct($number) {
		if (strlen($number) < 10 || preg_match('/[a-zA-Z]/', $number)) {
			throw new InvalidArgumentException;
		}

		$number = preg_replace('/[() -.]/', '', $number);

		if (strlen($number) > 11 && preg_match('/^1/', $number) || strlen($number) === 11 && !preg_match('/^1/', $number)) {
			throw new InvalidArgumentException;
		}
		else if (strlen($number) > 10) {
			$number = preg_replace('/^1/', '', $number);
		}

		$this->number = $number;
	}

	public function number() {
		return $this->number;
	}

	public function areaCode() {
		return substr($this->number(), 0, 3);
	}

	public function prettyPrint() {
		return preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $this->number());
	}

}
