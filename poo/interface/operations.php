<?php 

require_once ("basicsOperationsInterface.php");
require_once ("advancedOperationsInterface.php");

class Operations implements BasicOps, AdvancedOps
{
	public function basicOperations(string $operation, int $num1, int $num2)
	{
		if ($operation == "+") 
		{
			$total = $num1 + $num2;
		}else if ($operation == "-") 
		{
			$total = $num1 - $num2;
		}else if ($operation == "*") 
		{
			$total = $num1 * $num2;
		}else if ($operation == "/") 
		{
			$total = $num1 / $num2;
		}else
		{
			$total = "Please insert a valid operation";
		}
		return $total;
	}

	public function squareRoot(int $number):int
	{
		$total = sqrt($number);
		return $total;
	}

	public function power(int $base, int $exponent):int
	{
		$total = pow($base, $exponent);
		return $total;
	}


}

 ?>