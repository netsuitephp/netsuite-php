<?php

namespace Fungku\NetSuite\Classes;

class InvoiceShipGroupList {
	public $shipGroup;
	public $replaceAll;
	static $paramtypesmap = array(
		"shipGroup" => "TransactionShipGroup[]",
		"replaceAll" => "boolean",
	);
}

