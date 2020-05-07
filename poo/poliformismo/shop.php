<?php 

require_once("classProduct.php");
require_once("classCouch.php");
require_once("classTable.php");

$objProduct1 = new Product("Lamp", 70);
$arrLamp1 = $objProduct1->getProductInfo();

//The function "Print_r" shows the array's content
//The label "('<pre>')" organice the array information

print_r('<pre>');
print_r($arrLamp1);
print_r('</pre>');

$objCouch1 = new Couch("Couch", 500, "Green", "Wool", "Home Basics");
$arrCouch1 = $objCouch1->getProductInfo();

print_r('<pre>');
print_r($arrCouch1);
print_r('</pre>');

$objTable1 = new Table("Table", 700, "Brown", "Wood", "Musketeers", "1.5 mts");
$objTable1->setForm("Round");
$arrTable1 = $objTable1->getProductInfo();

print_r('<pre>');
print_r($arrCouch1);
print_r('</pre>');

 ?>