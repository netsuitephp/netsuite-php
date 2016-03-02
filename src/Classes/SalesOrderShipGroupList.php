<?php

namespace Fungku\NetSuite\Classes;

class SalesOrderShipGroupList {
	public $shipGroup;
	public $replaceAll;
	static $paramtypesmap = array(
		"shipGroup" => "TransactionShipGroup[]",
		"replaceAll" => "boolean",
	);
}

