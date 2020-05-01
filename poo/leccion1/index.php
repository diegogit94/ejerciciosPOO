<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>

	<h1>CALCULATOR</h1>

	<hr>

	<?php 

	require_once("Calculadora.php");

	$calculo1 = new Calculadora(3,2);

	$totalSum = $calculo1->getSum();

	echo "The sum result is: $totalSum";

	 ?>

</body>
</html>