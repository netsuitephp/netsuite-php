<?php

namespace Fungku\NetSuite\Classes;

class CheckLandedCostList {
	public $landedCost;
	public $replaceAll;
	static $paramtypesmap = array(
		"landedCost" => "LandedCostSummary[]",
		"replaceAll" => "boolean",
	);
}

