<?php

namespace Fungku\NetSuite\Classes;

class CashSaleExpCostList {
	public $expCost;
	public $replaceAll;
	static $paramtypesmap = array(
		"expCost" => "CashSaleExpCost[]",
		"replaceAll" => "boolean",
	);
}

