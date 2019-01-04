<?php
namespace FizzBuzz;

class BuzzRule extends AbstractRule
{
	public function __construct($nextRule)
	{
		parent::__construct($nextRule);
	}

	public function apply($value, $number)
	{
		$value .= ($number % 5 === 0)? "Buzz":"";
		return is_null($this->nextRule)?$value:$this->nextRule->apply($value, $number);
	}
}
