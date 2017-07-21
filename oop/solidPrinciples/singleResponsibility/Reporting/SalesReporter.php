<?php

namespace Acme\Reporting;

use Auth, DB, Exception;
use Acme\Repositories\SelesRepository;

class SalesReporter {

	private $repo;

	public function __construct(SelesRepository $repo)
	{
		$this->repo = $repo;
	}

	public function between($startDate, $endDate, SalesOutputInterface $formatter)
	{
		$sales = $this->repo->Between($startDate, $endDate);

		$formatter->output($sales);
	}
}