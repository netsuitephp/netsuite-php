<?php namespace Fungku\NetSuite\Classes;

class InventoryItemBinNumber {
	public $binNumber;
	public $onHand;
	public $onHandAvail;
	public $location;
	public $preferredBin;
	static $paramtypesmap = array(
		"binNumber" => "RecordRef",
		"onHand" => "string",
		"onHandAvail" => "string",
		"location" => "string",
		"preferredBin" => "boolean",
	);
}

