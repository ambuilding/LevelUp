<?php

//A client should not be forced to implement an interface that it doesn't use.

interface ManagableInterface {
	public function beManaged();
}

interface WorkableInterface {
	public function work();
}

interface SleepableInterface {
	public function sleep();
}

class HumanWorker implements WorkableInterface, SleepableInterface, ManagableInterface {
	public function work()
	{
		return 'human working';
	}

	public function sleep()
	{
		return 'human sleeping';
	}

	public function beManaged()
	{
		$this->work();
		$this->sleep();
	}
}

class AndroidWorker implements WorkableInterface, ManagableInterface {
	public function work()
	{
		return 'android working';
	}

	public function beManaged()
	{
		$this->work();
	}
}

class Caption {
	public function manage(ManagableInterface $worker)
	{
		$worker->beManaged();
	}
}