<?php

namespace App\Listeners;

use App\Events\UserBecameForeverSubscriber;

class SendThankYouEmail {

	public function handle(UserBecameForeverSubscriber $event)
	{
		var_dump('send the email ' . $event->user->name);
	}
}