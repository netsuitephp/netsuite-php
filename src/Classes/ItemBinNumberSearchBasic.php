<?php namespace Fungku\NetSuite\Classes;

class ItemBinNumberSearchBasic extends SearchRecordBasic {
	public $binNumber;
	public $location;
	public $quantityAvailable;
	public $quantityOnHand;
	static $paramtypesmap = array(
		"binNumber" => "SearchMultiSelectField",
		"location" => "SearchMultiSelectField",
		"quantityAvailable" => "SearchDoubleField",
		"quantityOnHand" => "SearchDoubleField",
	);
}

