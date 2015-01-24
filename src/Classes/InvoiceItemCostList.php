<?php namespace Fungku\NetSuite\Classes;

class InvoiceItemCostList {
	public $itemCost;
	public $replaceAll;
	static $paramtypesmap = array(
		"itemCost" => "InvoiceItemCost[]",
		"replaceAll" => "boolean",
	);
}

