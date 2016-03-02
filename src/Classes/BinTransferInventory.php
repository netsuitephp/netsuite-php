<?php

namespace Fungku\NetSuite\Classes;

class BinTransferInventory {
	public $line;
	public $item;
	public $description;
	public $preferredBin;
	public $quantity;
	public $itemUnitsLabel;
	public $inventoryDetail;
	public $fromBins;
	public $toBins;
	static $paramtypesmap = array(
		"line" => "integer",
		"item" => "RecordRef",
		"description" => "string",
		"preferredBin" => "string",
		"quantity" => "float",
		"itemUnitsLabel" => "string",
		"inventoryDetail" => "InventoryDetail",
		"fromBins" => "string",
		"toBins" => "string",
	);
}

