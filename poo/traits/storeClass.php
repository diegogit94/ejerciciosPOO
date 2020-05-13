<?php 

require_once("productTrait.php");
require_once("shoppingCartTrait.php");

class Store
{
	use Product, ShoppingCart;

	public $fltTotal = 0;

	public function getShoppingCart()
	{
		$this->fltTotal = $this->fltPrice * $this->intQuantity;
		$this->intStock -= $this->intQuantity;
		$infoShoppingCart = "<h1>Shopping Cart</h1> <hr>
						     Type: {$this->strType} <br>
							 Quantity: {$this->intQuantity} <br>
							 Unit price: {$this->fltPrice} <br>
							 Total Price: {$this->fltTotal} <br>";
		return $infoShoppingCart; 
	}
}


 ?>