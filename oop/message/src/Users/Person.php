<?php

namespace Message\Users;

//The key to OOP is undestanding that objects send messages to one another.

class Person {

	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}
