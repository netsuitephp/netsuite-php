<?php

class TransferOrderItem {
	public $item;
	public $line;
	public $quantityAvailable;
	public $quantityOnHand;
	public $quantityBackOrdered;
	public $quantityCommitted;
	public $quantityFulfilled;
	public $quantityPacked;
	public $quantityPicked;
	public $quantityReceived;
	public $quantity;
	public $rate;
	public $units;
	public $amount;
	public $description;
	public $inventoryDetail;
	public $serialNumbers;
	public $commitInventory;
	public $orderPriority;
	public $options;
	public $isClosed;
	public $department;
	public $class;
	public $lastPurchasePrice;
	public $averageCost;
	public $expectedShipDate;
	public $expectedReceiptDate;
	public $customFieldList;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"line" => "integer",
		"quantityAvailable" => "float",
		"quantityOnHand" => "float",
		"quantityBackOrdered" => "float",
		"quantityCommitted" => "float",
		"quantityFulfilled" => "float",
		"quantityPacked" => "float",
		"quantityPicked" => "float",
		"quantityReceived" => "float",
		"quantity" => "float",
		"rate" => "float",
		"units" => "RecordRef",
		"amount" => "float",
		"description" => "string",
		"inventoryDetail" => "InventoryDetail",
		"serialNumbers" => "string",
		"commitInventory" => "TransferOrderItemCommitInventory",
		"orderPriority" => "float",
		"options" => "CustomFieldList",
		"isClosed" => "boolean",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"lastPurchasePrice" => "float",
		"averageCost" => "float",
		"expectedShipDate" => "dateTime",
		"expectedReceiptDate" => "dateTime",
		"customFieldList" => "CustomFieldList",
	);
}

