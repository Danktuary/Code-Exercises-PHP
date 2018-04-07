<?php

class Robot {

	protected $name = '';

	protected $pastNames = [];

	public function getName() {
		if (!strlen($this->name)) {
			$this->generateName();
		}

		return $this->name;
	}

	private function generateName() {
		$alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$generatedName = $alphabet[mt_rand(0,  25)] . $alphabet[mt_rand(0,  25)] . mt_rand(100, 999);
		
		if (in_array($generatedName, $this->pastNames)) {
			return $this->generateName();
		}
		
		$this->name = $generatedName;
		$this->pastNames[] = $this->name;

		return $this;
	}

	public function reset() {
		$this->name = '';

		return $this;
	}

}
