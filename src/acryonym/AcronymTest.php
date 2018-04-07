<?php

require_once 'acronym.php';

class AcronymTest extends PHPUnit\Framework\TestCase {

	public function testBasicTitleCase() {
		$this->assertEquals('PNG', acronym('Portable Network Graphics'));
	}

	public function testLowerCaseWord() {
		$this->assertEquals('ROR', acronym('Ruby on Rails'));
	}

	public function testCamelCase() {
		$this->assertEquals('HTML', acronym('HyperText Markup Language'));
	}

	public function testAllCapsWords() {
		$this->assertEquals('PHP', acronym('PHP: Hypertext Preprocessor'));
	}

	public function testHyphenated() {
		$this->assertEquals('CMOS', acronym('Complementary metal-oxide semiconductor'));
	}

	public function testOneWordIsNotAbbreviated() {
		$this->assertEmpty(acronym('Word'));
	}

}
