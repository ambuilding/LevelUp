<?php

class StringCalculator
{

	const MAX_NUMBER_ALLOWED = 1000;

    public function add($numbers)
    {
    	//$numbers = explode(',', $numbers);
    	//$numbers = preg_split('/\s*(,|\\\n)\s*/', $numbers);
    	$numbers = $this->parseNumbers($numbers);
    	//var_dump($numbers);
    	return array_sum(array_map(function($number) {
    		$this->guardAgainstInvalidNumber($number);
    		
    		if ($number >= self::MAX_NUMBER_ALLOWED) {
    			return 0;
    		}

    		return $number;
    	}, $numbers));
    	/*
    	$solution = 0;

    	foreach ($numbers as $number) {
    		$this->guardAgainstInvalidNumber($number);
    		if ($number >= self::MAX_NUMBER_ALLOWED) continue;

    		$solution += $number;
    	}
    	return $solution; //array_sum($numbers);
    	*/
    }

    private function guardAgainstInvalidNumber($number)
	{
		if ($number < 0)
		{
			throw new InvalidArgumentException("Invalid number provided: {$number}");
		}
	}

	private function parseNumbers($numbers)
	{
		return array_map('intval', preg_split('/\s*(,|\\\n)\s*/', $numbers));
	}
}
