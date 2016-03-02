<?php

namespace Fungku\NetSuite\Classes;

class ItemFulfillmentShipGroupList {
	public $shipGroup;
	public $replaceAll;
	static $paramtypesmap = array(
		"shipGroup" => "TransactionShipGroup[]",
		"replaceAll" => "boolean",
	);
}

