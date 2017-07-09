<?php

class User
{
	protected $name;
	protected $age;

	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	public function name()
	{
		return $this->name;
	}

	public function age()
	{
		return $this->age;
	}
}

class UserCollection {
	protected $users;

	public function __construct(array $users)
	{
		$this->users = $users;
	}

	public function users()
	{
		return $this->users;
	}

	public function sortBy($property)
	{
		usort($this->users, function($userOne, $userTwo) use ($property) {
			return $userOne->$property() <=> $userTwo->$property();
		});
	}
}

$collection = new UserCollection([
	new User('Jeff', 30),
	new User('Taylor', 29),
	new User('Jane', 18),
	new User('Susie', 80),
]);

$collection->sortBy('name');
var_dump($collection->users());

// $games = ['Mass Effect', 'Super Mario Bros', 'Zelda', 'Fallout', 'Metal Gear'];

// usort($games, function($a, $b) {
// 	var_dump('a: ' . $a . ', b: ' . $b);
// 	//return $a <=> $b; // -1, 0, 1
// 	return strlen($a) <=> strlen($b);
// });
// // sort($games);
// // rsort($games);

// var_dump($games);