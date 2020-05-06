<?php 

require_once("ClassPerson.php");

class Employed extends Person
{

	protected $job;

	function __construct(string $id, string $name, int $age)
	{
		parent::__construct($id, $name, $age);
	}

	public function setJob(string $job)
	{
		$this->job = $job;
	}

	public function getJob()
	{
		return $this->job;
	}

}

 ?>