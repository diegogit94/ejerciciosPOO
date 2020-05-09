<?php 

require_once("livingBeingClass.php");

abstract class Animal extends LivingBeing
{
	public $name;

	function __construct(string $name)
	{
		parent::__construct($name);

		$this->name = $name;
	}

	public function feed()
	{

	}


}

 ?>