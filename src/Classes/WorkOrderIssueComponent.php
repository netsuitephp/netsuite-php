<?php

namespace Fungku\NetSuite\Classes;

class WorkOrderIssueComponent {
	public $item;
	public $operationSequenceNumber;
	public $quantity;
	public $componentInventoryDetail;
	public $lineNumber;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"operationSequenceNumber" => "integer",
		"quantity" => "float",
		"componentInventoryDetail" => "InventoryDetail",
		"lineNumber" => "integer",
	);
}

