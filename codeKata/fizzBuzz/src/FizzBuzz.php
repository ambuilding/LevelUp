<?php

namespace Acme;

class FizzBuzz
{
	public function execute($number)
	{
		if ($number % 15 == 0) return 'fizzbuzz';
		if ($number % 3 == 0) return 'fizz';
		if ($number % 5 == 0) return 'buzz';
		/*
		$output = '';
		if ($number % 3 == 0) $output .= 'fizz';
		if ($number % 5 == 0) $output .= 'buzz';

		if ($output) return $output;
		*/
		return $number;
	}

	public function executeUpTo($number)
	{
		return array_map([$this, 'execute'], range(1, $number));
		// return array_map(function($i) {
		// 	return $this->execute($i);
		// }, range(1, $number));
		/*
		$output = [];

		foreach (range(1, $number) as $i) {
			$output[] = $this->execute($i);
		}

		return $output;
		*/
	}
}
