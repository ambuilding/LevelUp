<?php

class BankAccount {

	const TAX = .09;

}

echo BankAccount::TAX;

/*
class BankAccount {

	private static $tax = .09;
    BankAccount::$tax = 1.5;

}
*/

/*
class Person {

	public $age = 1;

	public function haveBirthday()
	{
		$this->age += 1;
	}

	public function age()
	{
		return $this->age;
	}
}

$Jane = new Person;
$Jane->haveBirthday();
$Jane->haveBirthday();

echo $Jane->age();

$Betty = new Person;
$Betty->haveBirthday(); //4

echo $Betty->age();


class Person {

	public static $age = 1;

	public function haveBirthday()
	{
		static::$age += 1;
	}
}

$Jane = new Person;
$Jane->haveBirthday();
$Jane->haveBirthday();

$Betty = new Person;
$Betty->haveBirthday(); //4

echo Person::$age;
*/
/*
class Math {

	// public function add()
	// {
	// 	return array_sum(func_get_args());
	// }

	public static function add(...$nums)
	{
		return array_sum($nums);
	}
}

echo Math::add(1, 2, 5, 7);
*/
// $math = new Math;
// var_dump($math->add(1, 2, 5, 7));