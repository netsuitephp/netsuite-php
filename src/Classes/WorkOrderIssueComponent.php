<?php

class WorkOrderIssueComponent {
	public $item;
	public $quantity;
	public $componentInventoryDetail;
	public $lineNumber;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"quantity" => "float",
		"componentInventoryDetail" => "InventoryDetail",
		"lineNumber" => "integer",
	);
}

