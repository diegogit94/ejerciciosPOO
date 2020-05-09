<?php 

abstract class LivingBeing
{
	public $name;

	function __construct(string $name)
	{
		$this->name = $name;
	}

	public function feed()
	{

	}

}

 ?>