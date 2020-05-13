<?php 

trait ShoppingCart
{
	public $strType;
	public $intQuantity;

	public function setShoppingCart(string $strType, int $intQuantity)
	{
		$this->strType = $strType;
		$this->intQuantity = $intQuantity;
	}

	abstract function getShoppingCart();

}

 ?>