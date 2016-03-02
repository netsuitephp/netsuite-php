<?php

namespace Fungku\NetSuite\Classes;

class WorkOrderCompletionComponent {
	public $item;
	public $operationSequenceNumber;
	public $quantityPer;
	public $quantity;
	public $componentInventoryDetail;
	public $lineNumber;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"operationSequenceNumber" => "integer",
		"quantityPer" => "float",
		"quantity" => "float",
		"componentInventoryDetail" => "InventoryDetail",
		"lineNumber" => "integer",
	);
}

