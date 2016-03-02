<?php

namespace Fungku\NetSuite\Classes;

class InventoryTransferInventory {
	public $line;
	public $item;
	public $description;
	public $units;
	public $quantityOnHand;
	public $adjustQtyBy;
	public $serialNumbers;
	public $fromBinNumbers;
	public $toBinNumbers;
	public $inventoryDetail;
	static $paramtypesmap = array(
		"line" => "integer",
		"item" => "RecordRef",
		"description" => "string",
		"units" => "RecordRef",
		"quantityOnHand" => "float",
		"adjustQtyBy" => "float",
		"serialNumbers" => "string",
		"fromBinNumbers" => "string",
		"toBinNumbers" => "string",
		"inventoryDetail" => "InventoryDetail",
	);
}

