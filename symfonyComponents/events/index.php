<?php

require 'vendor/autoload.php';

use App\Events\UserBecameForeverSubscriber;
use App\Listeners\SendThankYouEmail;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventDispatcher;

// Service provider
$dispatcher = new EventDispatcher;

// EventServiceProvider
//['App\Event\UserBecameForeverSubscriber' => []]

$listener = new SendThankYouEmail;

/*
$dispatcher->addListener(UserBecameForeverSubscriber::class, function ($event) {
	var_dump('send the email ' . $event->user->name);
});
*/

$dispatcher->addListener(UserBecameForeverSubscriber::class, [$listener, 'handle']);

// the part of the controller where you upgrade the user to forever
$event = new UserBecameForeverSubscriber((object) ['name' => 'Jane']);
$dispatcher->dispatch(UserBecameForeverSubscriber::class, $event);


/*
$dispatcher = new EventDispatcher;

//$dispatcher->addListener('user.becamePremium'); //UserBecamePremium::class
// $dispatcher->addListener(UserSignedUp::class, function (Event $event) {
// 	var_dump($event->user->name);
// });

//$dispatcher->dispatch('UserSignedUp');

$listener = new SendThankYouEmail;
$dispatcher->addListener(UserSignedUp::class, [$listener, 'handle']);

$event = new UserSignedUp( (object) ['name' => 'Joe', 'email' => 'joe@example.com']);

$dispatcher->dispatch(UserSignedUp::class, $event);
*/