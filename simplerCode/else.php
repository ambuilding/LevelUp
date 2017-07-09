<?php

public function signUp(Subscription $subscription)
{
	$subscription->create();
}

public function getSubscriptionType($type)
{
	if ($type == 'forever') {
		return new ForevverSubscription;
	}

	return new MonthlySubscription;
}

$subscription = getSubscriptionType($type);
signUp($subscription);

/*
public function signUp($subscription)
{
	if ($subscription == 'monthly') {
		$this->createMonthlySubscription();
	} else if ($subscription == 'forever') {
		$this->createForeverSubscription();
	}
}


public function store()
{
	$input = Request::all();

	$this->validator->validate($input);
		
	Post::create($input);
	return Redirect::home();
}

/*
public function store()
{
	$input = Request::all();
	$validation = Validator::make($input, ['username' => 'required']);

	if (date('l') == 'Friday') {
		throw new Exception('We do not work on Friday');
	}

		if ($validation->fails()) {
			return Redirect::back()->withInput()->withErrors($validation);
		} 
		
		Post::create($input);
		return Redirect::home();
}

/*
public function store()
{
	$input = Request::all();
	$validation = Validator::make($input, ['username' => 'required']);

	if (date('l') !== 'Friday') {
		if ($validation->passes()) {
			Post::create($input);
			return Redirect::home();
		} 
		return Redirect::back()->withInput()->withErrors($validation);
	} else {
		throw new Exception('We do not work on Friday');
	}
}

*/