<?php 


class Product
{
	public $strDescription;
	public $intPrice;
	public $intMinimumStock = 20;
	public $strStatus = "Activated";

	function __construct(string $strDescription, int $intPrice)
	{
		$this->strDescription = $strDescription;
		$this->intPrice = $intPrice;
	}

	public function getProductInfo()
	{
		$arrInfo = array('Description' => $this->strDescription,
						 'Price' => $this->intPrice,
						 'Minimum Stock' => $this->intMinimumStock,
						 'Status' => $this->strStatus
						 );
		return $arrInfo;
	}

}


 ?>