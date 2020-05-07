<?php 

require_once("classCouch.php");

class Table extends Couch
{
	public $strForm;
	public $strSize;

	function __construct(string $strDescription, int $intPrice, string $strColor, string $strMaterial, string $strBrand, string $strSize)
	{
		parent::__construct($strDescription, $intPrice, $strColor, $strMaterial, $strBrand);

		$this->strSize = $strSize;
	}

	public function setForm(string $strForm)
	{
		$this->strForm = $strForm;
	}

	public function getProductInfo()
	{
		$arrInfo = array('Description' => $this->strDescription,
						 'Price' => $this->intPrice,
						 'Minimum Stock' => $this->intMinimumStock,
						 'Status' => $this->strStatus,
						 'Color' => $this->strColor,
						 'Material' => $this->strMaterial,
						 'Brand' => $this->strBrand,
						 'Form' => $this->strForm,
						 'Size' => $this->strSize
						 );
		return $arrInfo;
	}

}

 ?>