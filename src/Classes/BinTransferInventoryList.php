<?php

namespace Fungku\NetSuite\Classes;

class BinTransferInventoryList {
	public $inventory;
	public $replaceAll;
	static $paramtypesmap = array(
		"inventory" => "BinTransferInventory[]",
		"replaceAll" => "boolean",
	);
}

