<?php

class TestTest extends \PHPUnit_Framework_TestCase {
	public function test () {
		$foo = new Test;
		$this->assertTrue($foo->bar());
		$this->assertFalse($foo->baz());
	}
}
