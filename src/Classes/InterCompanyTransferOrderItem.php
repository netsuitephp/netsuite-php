<?php

namespace Fungku\NetSuite\Classes;

class InterCompanyTransferOrderItem {
	public $item;
	public $line;
	public $quantityAvailable;
	public $quantityOnHand;
	public $quantityBackOrdered;
	public $quantityCommitted;
	public $quantityFulfilled;
	public $quantityReceived;
	public $quantity;
	public $rate;
	public $units;
	public $amount;
	public $description;
	public $inventoryDetail;
	public $commitInventory;
	public $options;
	public $department;
	public $class;
	public $lastPurchasePrice;
	public $averageCost;
	public $customFieldList;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"line" => "integer",
		"quantityAvailable" => "float",
		"quantityOnHand" => "float",
		"quantityBackOrdered" => "float",
		"quantityCommitted" => "float",
		"quantityFulfilled" => "float",
		"quantityReceived" => "float",
		"quantity" => "float",
		"rate" => "float",
		"units" => "RecordRef",
		"amount" => "float",
		"description" => "string",
		"inventoryDetail" => "InventoryDetail",
		"commitInventory" => "TransferOrderItemCommitInventory",
		"options" => "CustomFieldList",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"lastPurchasePrice" => "float",
		"averageCost" => "float",
		"customFieldList" => "CustomFieldList",
	);
}

