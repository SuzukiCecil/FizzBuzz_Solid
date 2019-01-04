<?php
namespace FizzBuzz;

class ArrayIterator implements \Iterator
{
	private $position;
	private $max;

	public function __construct(int $position, int $max) {
		$this->position = $position;
		$this->max = $max;
	}

	public function rewind() {
		$this->position = 0;
	}

	public function current() {
		return $this->position;
	}

	public function key() {
		return $this->position;
	}

	public function next() {
		++$this->position;
	}

	public function valid() {
		return $this->position <= $this->max;
	}
}
