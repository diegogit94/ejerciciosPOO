<?php 

class User
{

	//Atributes
	public $name;
	private $email;
	private $type;
	private $password;
	protected $registerDate;
	static $state = "Activated"; //The static atributes belongs to the class, for that reason, can be accessed from any class
	
	function __construct(string $name, string $email, string $type)
	{
		$this->name = $name;
		$this->email = $email;
		$this->type = $type;
		$this->password = rand(1000, 10000);
		$this->registerDate = date('d-m-y h:m:s');
	}

	public function getName()
	{
		return $this->name;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function getInfo()
	{
		echo "User Information" . "<br>";
		echo "Name: " . $this->name . "<br>";
		echo "Email: " . $this->email . "<br>";
		echo "Type: " . $this->type . "<br>";
		echo "Password: " . $this->password . "<br>";
		echo "Register date: " . $this->registerDate . "<br>";
		echo "State: " . self::$state . "<br>";

		//When the propierty is "static" belongs to the class, so you have to access with "self"
	}

}

 ?>