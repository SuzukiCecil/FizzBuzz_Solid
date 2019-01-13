<?php
namespace FizzBuzz\service\rule;

class NumericRule extends AbstractRule
{
	public function __construct($nextRule)
	{
		parent::__construct($nextRule);
	}

    public function apply(array $values, $number)
    {
        if(count($values) === 0) {
            $values[] = (string)$number;
        }
        return is_null($this->nextRule)?$values:$this->nextRule->apply($values, $number);
    }
}
