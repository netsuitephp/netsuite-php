<?php namespace Fungku\NetSuite\Classes;

class InventoryAdjustmentInventoryList {
	public $inventory;
	public $replaceAll;
	static $paramtypesmap = array(
		"inventory" => "InventoryAdjustmentInventory[]",
		"replaceAll" => "boolean",
	);
}

