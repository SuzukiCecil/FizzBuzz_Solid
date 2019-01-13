<?php
namespace FizzBuzz\service\rule;

class FizzRule extends AbstractRule
{
	public function __construct($nextRule)
	{
		parent::__construct($nextRule);
	}

    public function apply(array $values, $number)
    {
        if($number % 3 === 0) {
            $values[] = "Fizz";
        }
        return is_null($this->nextRule)?$values:$this->nextRule->apply($values, $number);
    }
}
