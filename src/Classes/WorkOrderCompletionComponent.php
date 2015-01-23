<?php

class WorkOrderCompletionComponent {
	public $item;
	public $quantityPer;
	public $quantity;
	public $componentInventoryDetail;
	public $lineNumber;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"quantityPer" => "float",
		"quantity" => "float",
		"componentInventoryDetail" => "InventoryDetail",
		"lineNumber" => "integer",
	);
}

