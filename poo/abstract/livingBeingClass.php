<?php 

abstract class LivingBeing
{
	public $name;

	function __construct(string $name)
	{
		$this->name = $name;
	}

	abstract public function feed();

}

 ?>