<?php 

class Usuario
{

	//Atributes
	public $name;
	public $email;
	public $type;
	private $password;
	protected $registerDate;
	static $state = "Activated"; //The static atributes belongs to the class, for that reason, can be accessed from any class
	
	function __construct(string $name, string $email, string $type, string $password)
	{
		$this->name = $name;
		$this->email = $email;
		$this->type = $type;
		$this->password = rand(1000, 10000);
	}
}

 ?>