<?php 

namespace controllers;

//require_once("../models/Person.php");
use models\Person;

class Client extends Person
{
	private $credit;

	function __construct(string $id, string $name, int $age)
	{
		parent::__construct($id, $name, $age);
	}

	public function setCredit(int $credit)
	{
		$this->credit = $credit;
	}

	public function getCredit(){
		return $this->credit;
	}
}

 ?>