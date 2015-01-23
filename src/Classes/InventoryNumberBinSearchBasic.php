<?php

class InventoryNumberBinSearchBasic extends SearchRecordBasic {
	public $binNumber;
	public $inventoryNumber;
	public $location;
	public $quantityAvailable;
	public $quantityOnHand;
	static $paramtypesmap = array(
		"binNumber" => "SearchMultiSelectField",
		"inventoryNumber" => "SearchStringField",
		"location" => "SearchMultiSelectField",
		"quantityAvailable" => "SearchDoubleField",
		"quantityOnHand" => "SearchDoubleField",
	);
}

