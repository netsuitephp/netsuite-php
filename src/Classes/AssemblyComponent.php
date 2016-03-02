<?php

namespace Fungku\NetSuite\Classes;

class AssemblyComponent {
	public $item;
	public $quantity;
	public $quantityOnHand;
	public $componentInventoryDetail;
	public $componentNumbers;
	public $binNumbers;
	public $lineNumber;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"quantity" => "float",
		"quantityOnHand" => "float",
		"componentInventoryDetail" => "InventoryDetail",
		"componentNumbers" => "string",
		"binNumbers" => "string",
		"lineNumber" => "integer",
	);
}

