<?php 

class Calculadora
{

	//Atributes
	public $num1 = 0;
	public $num2 = 0;
	public $result = 0;
	
	function __construct($num1, $num2)
	{
		$this->num1 = $num1;
		$this->num2 = $num2;
	}

	public function getSum()
	{
		$this->result = ($this->num1 + $this->num2);
		return $this->result;
	}

	public function getSubtraction()
	{
		$this->result = ($this->$num1 - $this->num2);
		return $this->result;
	}

	public function getMultiplication()
	{
		$this->result = ($this->num1 * $this->num2);
		return $this->result;
	}

	public function getDivision()
	{
		$this->result = ($this->num1 / $this->num2);
		return $this->result;
	}

}//cierre clase


 ?>