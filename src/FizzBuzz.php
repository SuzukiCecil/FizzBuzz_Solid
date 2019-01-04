<?php
namespace FizzBuzz;

class FizzBuzz
{
	private $rule;
	private $it;
	private $printer;
	public function __construct(AbstractRule $rule, \Iterator $it, IPrinter $printer)
	{
		$this->rule = $rule;
		$this->it = $it;
		$this->printer = $printer;
	}

	public function start()
	{

		foreach($this->it as $key => $value) {
			$this->printer->print($this->rule->apply("", $value));
		}
	}
}
