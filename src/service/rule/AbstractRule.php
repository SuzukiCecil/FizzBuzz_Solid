<?php
namespace FizzBuzz\service\rule;

abstract class AbstractRule
{
	protected $nextRule;

	public function __construct(?AbstractRule $nextRule)
	{
		$this->nextRule = $nextRule;
	}

	public static function build(?AbstractRule $nextRule)
	{
		return new static($nextRule);
	}

	abstract public function apply(array $values, $number);
}
