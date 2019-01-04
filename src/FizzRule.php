<?php
namespace FizzBuzz;

class FizzRule extends AbstractRule
{
	public function __construct($nextRule)
	{
		parent::__construct($nextRule);
	}

	public function apply($value, $number)
	{
		$value .= ($number % 3 === 0)? "Fizz":"";
		return is_null($this->nextRule)?$value:$this->nextRule->apply($value, $number);
	}
}
