<?php 

require_once("animalClass.php");

class Herbivorous extends Animal
{
	public $name;

	function __construct(string $name)
	{
		parent::__construct($name);

		$this->name = $name;
	}

	public function feed()
	{
		echo "I just ate grass";
	}

}

 ?>