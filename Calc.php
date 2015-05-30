<?php

class Calc
{
	public function __construct()
	{

	}

	public function add($x, $y)
	{
		if(!is_numeric($x) || !is_numeric($y)) {
			throw new \Exception("Invalid number {$x} and {$y}");
		}

		if (!filter_var($x, FILTER_VALIDATE_FLOAT) || !filter_var($y, FILTER_VALIDATE_FLOAT)) {
			throw new \Exception("Filter invalid {$x} and {$y}");
		}

		return $x + $y;
	}
}