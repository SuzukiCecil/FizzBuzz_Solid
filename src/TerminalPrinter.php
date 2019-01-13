<?php
namespace FizzBuzz;

class TerminalPrinter implements IPrinter
{

	public function __construct(string $characterSeparator, string $lineSeparator)
	{
		$this->characterSeparator = $characterSeparator;
        $this->lineSeparator = $lineSeparator;
	}
	public function print(array $values)
	{
	    echo implode($this->characterSeparator, $values) . $this->lineSeparator;
	}
}
