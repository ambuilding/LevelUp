<?php

namespace Acme\Repositories;

class SelesRepository {

	public function Between($startDate, $endDate)
	{
		return DB::table('sales')->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
	}
}