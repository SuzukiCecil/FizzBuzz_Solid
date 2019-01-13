<?php
namespace FizzBuzz\service\rule;

class BizzRule extends AbstractRule
{
	public function __construct($nextRule)
	{
		parent::__construct($nextRule);
	}

	public function apply(array $values, $number)
	{
	    if($number % 7 === 0) {
	        $values[] = "Bizz";
        }
		return is_null($this->nextRule)?$values:$this->nextRule->apply($values, $number);
	}
}
