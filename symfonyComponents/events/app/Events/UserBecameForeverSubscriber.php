<?php

namespace App\Events;

use Symfony\Component\EventDispatcher\Event;

class UserBecameForeverSubscriber extends Event {

	public $user;

	public function __construct($user)
	{
		$this->user = $user;
	}
}