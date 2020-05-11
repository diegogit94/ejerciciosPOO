<?php 

require_once ("operations.php");


$objCalc1 = new Operations();

echo "<h1>OPERATIONS</h1>";

//Basic Operations
echo "Sum: " . $objCalc1->basicOperations("+", 10, 2) . "<br>";
echo "Sustraction: " . $objCalc1->basicOperations("-", 10, 2) . "<br>";
echo "Multiplication: " . $objCalc1->basicOperations("*", 10, 2) . "<br>";
echo "Divition: " . $objCalc1->basicOperations("/", 10, 2) . "<br>";
echo "Wrong Operation: " . $objCalc1->basicOperations("f", 10, 2) . "<br>";

echo "<br>";

//Advanced Operations

echo "Square Root: " . $objCalc1->squareRoot(25) . "<br>";
echo "Power: " . $objCalc1->power(9, 2) . "<br>";


 ?>