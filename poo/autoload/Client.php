<?php 

//require_once("ClassPerson.php");
require_once("autoload.php");

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