<?php

namespace Acme;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class Command extends SymfonyCommand {

	protected $database;
	function __construct(DatabaseAdapter $database)
	{
		$this->database = $database;
		parent::__construct();
	}

	protected function showTasks(OutputInterface $output)
	{
		if (! $tasks = $this->database->fetchAll('task')) {
			return $output->writeln('<info>No tasks at the moment!</info>');
		}
		$table = new Table($output);
		$table->setHeaders(['Id', 'Description'])
			->setRows($tasks)
			->render();
	}
}