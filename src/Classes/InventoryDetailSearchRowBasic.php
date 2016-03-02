<?php

namespace Fungku\NetSuite\Classes;

class InventoryDetailSearchRowBasic extends SearchRowBasic {
	public $binNumber;
	public $externalId;
	public $internalId;
	public $inventoryNumber;
	public $quantity;
	static $paramtypesmap = array(
		"binNumber" => "SearchColumnSelectField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"inventoryNumber" => "SearchColumnSelectField[]",
		"quantity" => "SearchColumnDoubleField[]",
	);
}

