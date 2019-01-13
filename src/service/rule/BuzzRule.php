<?php
namespace FizzBuzz\service\rule;

class BuzzRule extends AbstractRule
{
	public function __construct($nextRule)
	{
		parent::__construct($nextRule);
	}

    public function apply(array $values, $number)
    {
        if($number % 5 === 0) {
            $values[] = "Buzz";
        }
        return is_null($this->nextRule)?$values:$this->nextRule->apply($values, $number);
    }
}
