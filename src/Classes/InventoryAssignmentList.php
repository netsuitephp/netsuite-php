<?php

namespace Fungku\NetSuite\Classes;

class InventoryAssignmentList {
	public $inventoryAssignment;
	public $replaceAll;
	static $paramtypesmap = array(
		"inventoryAssignment" => "InventoryAssignment[]",
		"replaceAll" => "boolean",
	);
}

