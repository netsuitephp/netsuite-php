<?php namespace Fungku\NetSuite\Classes;

class InventoryNumberLocations {
	public $location;
	public $quantityOnHand;
	public $quantityAvailable;
	public $quantityOnOrder;
	public $quantityInTransit;
	static $paramtypesmap = array(
		"location" => "string",
		"quantityOnHand" => "float",
		"quantityAvailable" => "float",
		"quantityOnOrder" => "float",
		"quantityInTransit" => "float",
	);
}

