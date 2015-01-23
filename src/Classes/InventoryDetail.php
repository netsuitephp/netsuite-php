<?php

class InventoryDetail extends Record {
	public $inventoryAssignmentList;
	public $customForm;
	static $paramtypesmap = array(
		"inventoryAssignmentList" => "InventoryAssignmentList",
		"customForm" => "RecordRef",
	);
}

