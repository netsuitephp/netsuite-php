<?php

class InventoryNumberBinSearchRowBasic extends SearchRowBasic {
	public $binNumber;
	public $inventoryNumber;
	public $location;
	public $quantityAvailable;
	public $quantityOnHand;
	static $paramtypesmap = array(
		"binNumber" => "SearchColumnSelectField[]",
		"inventoryNumber" => "SearchColumnStringField[]",
		"location" => "SearchColumnSelectField[]",
		"quantityAvailable" => "SearchColumnDoubleField[]",
		"quantityOnHand" => "SearchColumnDoubleField[]",
	);
}

