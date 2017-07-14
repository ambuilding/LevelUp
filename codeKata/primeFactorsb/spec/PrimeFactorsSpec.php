<?php

namespace spec;

use PrimeFactors;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{
	function it_returns_an_empty_array_for_1()
	{
		$this->generate(1)->shouldReturn([]);
	}

	function it_returns_2_2_for_4()
	{
		$this->generate(4)->shouldReturn([2, 2]);
	}

	function it_returns_2_3_for_6()
	{
		$this->generate(6)->shouldReturn([2, 3]);
	}

	function it_returns_3_3_for_9()
	{
		$this->generate(9)->shouldReturn([3, 3]);
	}
}
