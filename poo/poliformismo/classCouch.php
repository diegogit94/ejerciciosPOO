<?php 

require_once("classProduct.php");

class Couch extends Product
{
	public $strColor;
	public $strMaterial;
	public $strBrand;
	public $strStatus = "Desactivated";

	function __construct(string $strDescription, int $intPrice, string $strColor, string $strMaterial, string $strBrand)
	{
		parent::__construct($strDescription, $intPrice);

		$this->strColor = $strColor;
		$this->strMaterial = $strMaterial;
		$this->strBrand = $strBrand;
	}

	public function getProductInfo()
	{
		$arrInfo = array('Description' => $this->strDescription,
						 'Price' => $this->intPrice,
						 'Minimum Stock' => $this->intMinimumStock,
						 'Status' => $this->strStatus,
						 'Color' => $this->strColor,
						 'Material' => $this->strMaterial,
						 'Brand' => $this->strBrand
						 );
		return $arrInfo;
	}

}

 ?>