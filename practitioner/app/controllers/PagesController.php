<?php

namespace App\Controllers;

class PagesController {

	public function home()
	{
		// Receive the request
		// Delegate.
		// Return a response.
		//die('home');
        //$users = App::get('database')->selectAll('users');

        //return view('index', ['users' => $users]);
        return view('index');
	}
	
	public function about()
	{
		$company = 'Laracasts';
		return view('about', ['company' => $company]);
	}

	public function contact()
	{
		return view('contact');
	}
}