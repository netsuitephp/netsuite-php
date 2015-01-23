<?php

class InventoryCostRevaluationCostComponent {
	public $cost;
	public $componentItem;
	public $quantity;
	public $units;
	public $costCategory;
	static $paramtypesmap = array(
		"cost" => "float",
		"componentItem" => "RecordRef",
		"quantity" => "float",
		"units" => "RecordRef",
		"costCategory" => "RecordRef",
	);
}

