<?php

use Acme\Reporting;
use Acme\Repositories;

// a class should have one, and only have one, reason to change.

Route::get('/', function() {
	$report = new SalesReporter(new SalesRepository);

	$begin = 
	$end = 

	return $report->between($begin, $end, new HtmlOutput);
});