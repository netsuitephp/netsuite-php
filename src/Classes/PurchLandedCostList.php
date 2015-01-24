<?php namespace Fungku\NetSuite\Classes;

class PurchLandedCostList {
	public $landedCost;
	public $replaceAll;
	static $paramtypesmap = array(
		"landedCost" => "LandedCostSummary[]",
		"replaceAll" => "boolean",
	);
}

