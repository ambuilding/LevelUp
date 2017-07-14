<?php

class PrimeFactors
{
	public function generate($number)
	{
		$primes = [];

		// while ($number > 1) {
		// 	while ($number % candidate == 0) {
		// 		$primes[] = candidate;
		// 		$number /= candidate;
		// 	}
		// 	$candidate++;
		// }

		for ($candidate = 2; $number > 1; $candidate++) { 
			for (; $number % $candidate == 0; $number /= $candidate) {
				$primes[] = $candidate;
			}
		}

		// if ($number >1) {
		// 	$primes[] = $number;
		// }

		return $primes;
	}
}
