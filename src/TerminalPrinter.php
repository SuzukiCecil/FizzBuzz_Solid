<?php
namespace FizzBuzz;

class TerminalPrinter implements IPrinter
{
	private $separator;

	public function __construct(string $separator)
	{
		$this->separator = $separator;
	}
	public function print($value)
	{
		echo $value . $this->separator;
	}
}
