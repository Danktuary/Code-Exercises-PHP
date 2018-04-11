<?php

class School {

	protected $students = [];

	public function add($name, $grade) {
		$this->students[$grade][] = $name;
	}

	public function grade($year) {
		return $this->students[$year] ?? [];
	}

	public function numberOfStudents() {
		return count($this->students);
	}

	public function studentsByGradeAlphabetical() {
		foreach ($this->students as &$student) {
			sort($student);
		}

		return $this->students;
	}

}
