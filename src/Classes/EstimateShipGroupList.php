<?php

namespace Fungku\NetSuite\Classes;

class EstimateShipGroupList {
	public $shipGroup;
	public $replaceAll;
	static $paramtypesmap = array(
		"shipGroup" => "TransactionShipGroup[]",
		"replaceAll" => "boolean",
	);
}

