<?php

interface ConnectionInterface {
	public function connect();
}

class DbConnection implements ConnectionInterface {
	public function connect() {
		// 
	}
}

class PasswordReminder {
	private $dbConnection;

	function __construct(ConnectionInterface $dbConnection)
	{
		$this->dbConnection = $dbConnection;
	}
}