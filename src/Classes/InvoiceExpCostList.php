<?php namespace Fungku\NetSuite\Classes;

class InvoiceExpCostList {
	public $expCost;
	public $replaceAll;
	static $paramtypesmap = array(
		"expCost" => "InvoiceExpCost[]",
		"replaceAll" => "boolean",
	);
}

