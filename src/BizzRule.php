<?php
namespace FizzBuzz;

class BizzRule extends AbstractRule
{
	public function __construct($nextRule)
	{
		parent::__construct($nextRule);
	}

	public function apply($value, $number)
	{
		$value .= ($number % 7 === 0)? "Bizz":"";
		return is_null($this->nextRule)?$value:$this->nextRule->apply($value, $number);
	}
}
