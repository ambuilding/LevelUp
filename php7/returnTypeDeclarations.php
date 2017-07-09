<?php

interface SomeInterface {
	public function getUser() : User;
}

class SomeClass implements SomeInterface {

	public function getUser() : User
	{
		//return [];
		return User;
	}
}

(new SomeClass)->getUser();