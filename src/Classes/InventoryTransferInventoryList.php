<?php

namespace Fungku\NetSuite\Classes;

class InventoryTransferInventoryList {
	public $inventory;
	public $replaceAll;
	static $paramtypesmap = array(
		"inventory" => "InventoryTransferInventory[]",
		"replaceAll" => "boolean",
	);
}

