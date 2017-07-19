<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SpeakCommand extends Command {

	protected function configure()
	{
		$this->setName('speak')
			->setDescription('Speak a message.')
			->addArgument('message', InputArgument::OPTIONAL, 'What message should I speak?', 'coffee'); // ./demo book
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		exec('say ' . $input->getArgument('message'));
		$output->writeln('All done.');
		//info error
	}

	protected function info($message)
	{
		$this->output->write("<info>{$message}</info>");
	}
}