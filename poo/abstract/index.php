<?php 

require_once("plantClass.php");
require_once("herbivorousClass.php");
require_once("carnivorousClass.php");



$objPlant = new Plant("Girasol");

	echo $objPlant->name . "<br>";	
	echo $objPlant->feed();

	echo "<br><br>";

$objAnCarn = new Carnivorous("Tiger");

	echo $objAnCarn->name . "<br>";	
	echo $objAnCarn->feed();

	echo "<br><br>";

$objAnHer = new Herbivorous("Carpincho");

	echo $objAnHer->name . "<br>";	
	echo $objArHer->feed(); //Error en esta linea

 ?>