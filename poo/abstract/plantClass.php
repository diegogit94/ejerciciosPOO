<?php 

require_once("livingBeingClass.php");

class Plant extends LivingBeing
{
	public $name;

	function __construct(string $name)
	{
		parent::__construct($name);

		$this->name = $name;
	}

	public function feed()
	{
		echo "I just did the photosynthesis";
	}

}

 ?>