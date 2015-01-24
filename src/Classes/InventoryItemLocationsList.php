<?php namespace Fungku\NetSuite\Classes;

class InventoryItemLocationsList {
	public $locations;
	public $replaceAll;
	static $paramtypesmap = array(
		"locations" => "InventoryItemLocations[]",
		"replaceAll" => "boolean",
	);
}

