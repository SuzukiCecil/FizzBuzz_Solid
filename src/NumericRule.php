<?php
namespace FizzBuzz;

class NumericRule extends AbstractRule
{
	public function __construct($nextRule)
	{
		parent::__construct($nextRule);
	}

	public function apply($value, $number)
	{
		$value .= ($value === "")? $number:"";
		return is_null($this->nextRule)?$value:$this->nextRule->apply($value, $number);
	}
}
