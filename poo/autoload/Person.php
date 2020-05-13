<?php 
//Super class
class Person
{

	//Atributes
	private $id;
	public $name;
	public $age;

	function __construct(string $id, string $name, int $age)
	{
		$this->id = $id;
		$this->name = $name;
		$this->age = $age;
	}

	public function getInfo()
	{
		$data = "
		<h2>Personal Information</h2>
		ID: {$this->id}<br>
		Name: {$this->name}<br>
		Age: {$this->age}<br>
		";
		return $data;
	}

}

 ?>