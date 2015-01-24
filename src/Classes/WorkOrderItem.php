<?php namespace Fungku\NetSuite\Classes;

class WorkOrderItem {
	public $line;
	public $item;
	public $componentYield;
	public $bomQuantity;
	public $quantityCommitted;
	public $quantityBackOrdered;
	public $quantityAvailable;
	public $averageCost;
	public $lastPurchasePrice;
	public $quantityOnHand;
	public $quantity;
	public $units;
	public $inventoryDetail;
	public $serialNumbers;
	public $orderPriority;
	public $options;
	public $department;
	public $class;
	public $location;
	public $poVendor;
	public $poRate;
	public $percentComplete;
	public $contribution;
	public $description;
	public $commit;
	public $createPo;
	public $createWo;
	public $customFieldList;
	static $paramtypesmap = array(
		"line" => "integer",
		"item" => "RecordRef",
		"componentYield" => "float",
		"bomQuantity" => "float",
		"quantityCommitted" => "float",
		"quantityBackOrdered" => "float",
		"quantityAvailable" => "float",
		"averageCost" => "float",
		"lastPurchasePrice" => "float",
		"quantityOnHand" => "float",
		"quantity" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"serialNumbers" => "string",
		"orderPriority" => "float",
		"options" => "CustomFieldList",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"poVendor" => "RecordRef",
		"poRate" => "float",
		"percentComplete" => "float",
		"contribution" => "float",
		"description" => "string",
		"commit" => "WorkOrderItemItemCommitInventory",
		"createPo" => "WorkOrderItemItemCreatePo",
		"createWo" => "boolean",
		"customFieldList" => "CustomFieldList",
	);
}

