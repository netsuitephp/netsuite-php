<?php

namespace Fungku\NetSuite\Classes;

class InventoryDetail extends Record {
	public $inventoryAssignmentList;
	public $customForm;
	static $paramtypesmap = array(
		"inventoryAssignmentList" => "InventoryAssignmentList",
		"customForm" => "RecordRef",
	);
}

