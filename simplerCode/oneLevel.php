<?php

class BankAccounts {

	protected $accounts;

	public function __construct($accounts)
	{
		$this->accounts = $accounts;
	}

	public function filterBy($accountType)
	{	
		return array_filter($this->accounts, function($account) use ($accountType) {
			return $account->isOfType($accountType);
		});
	}
}

class Account {

	protected $type;

	private function __construct($type)
	{
		$this->type = $type;
	}

	public static function open($type)
	{
		return new static($type);
	}

	public function isOfType($accountType)
	{
		return $this->type() == $accountType && $this->isActive();
	}

	private function type()
	{
		return $this->type;
	}

	private function isActive()
	{
		return true;
	}
}

$accounts = [
	Account::open('checking'),
	Account::open('saving'),
	Account::open('checking'),
	Account::open('saving')
];

$accounts = new BankAccounts($accounts);
$saving = $accounts->filterBy('checking');
var_dump($saving);


/*
class BankAccounts {

	protected $accounts;

	public function __construct($accounts)
	{
		$this->accounts = $accounts;
	}

	public function filterBy($accountType)
	{
		$filtered = [];

		foreach ($this->accounts as $account) {
			if ($account->type() == $accountType) {
				if ($account->isActive()) {
					$filtered[] = $account;	
				}
			}
		}

		return $filtered;
	}
}

class Account {

	protected $type;

	private function __construct($type)
	{
		$this->type = $type;
	}

	public static function open($type)
	{
		return new static($type);
	}

	public function type()
	{
		return $this->type;
	}

	public function isActive()
	{
		return true;
	}
}
*/