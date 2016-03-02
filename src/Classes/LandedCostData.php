<?php

namespace Fungku\NetSuite\Classes;

class LandedCostData {
	public $costCategory;
	public $amount;
	static $paramtypesmap = array(
		"costCategory" => "RecordRef",
		"amount" => "float",
	);
}

