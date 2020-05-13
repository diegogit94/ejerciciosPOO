<?php 

trait Product
{

	public $strType;
	public $fltPrice;
	public $intStock;

	public function setProduct(string $strType, float $fltPrice, int $intStock)
	{
		$this->strType = $strType;
		$this->fltPrice = $fltPrice;
		$this->intStock = $intStock;
	}

	public function getProduct()
	{
		$infoProduct = "<h1>PRODUCT INFO</h1>
						Type: {$this->strType} <br>
						Price: {$this->fltPrice} <br>
						Stock: {$this->intStock} <br>";
		return $infoProduct;
	}


}

 ?>