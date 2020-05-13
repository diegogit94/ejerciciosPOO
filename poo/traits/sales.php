<?php 

require_once("storeClass.php");

$strType = "Guitar";
$fltPrice = 2000;
$intStock = 30;
$intQuantity = 2;


$objProduct1 = new Store();

$objProduct1->setProduct($strType, $fltPrice, $intStock);
$objProduct1->setShoppingCart($strType, $intQuantity);
echo $objProduct1->getProduct();
echo $objProduct1->getShoppingCart();
echo $objProduct1->getProduct();

$objProduct2 = new Store();

$objProduct2->setProduct($strType, $fltPrice, $intStock);
$objProduct2->setShoppingCart($strType, $intQuantity);
echo $objProduct1->getProduct();
echo $objProduct1->getShoppingCart();
echo $objProduct1->getProduct();

 ?>