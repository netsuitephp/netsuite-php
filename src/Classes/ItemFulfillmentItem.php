<?php

namespace Fungku\NetSuite\Classes;

class ItemFulfillmentItem {
	public $jobName;
	public $itemReceive;
	public $itemName;
	public $description;
	public $location;
	public $onHand;
	public $quantity;
	public $unitsDisplay;
	public $createPo;
	public $inventoryDetail;
	public $binNumbers;
	public $serialNumbers;
	public $poNum;
	public $item;
	public $orderLine;
	public $quantityRemaining;
	public $options;
	public $shipGroup;
	public $itemIsFulfilled;
	public $shipAddress;
	public $shipMethod;
	public $customFieldList;
	static $paramtypesmap = array(
		"jobName" => "string",
		"itemReceive" => "boolean",
		"itemName" => "string",
		"description" => "string",
		"location" => "RecordRef",
		"onHand" => "float",
		"quantity" => "float",
		"unitsDisplay" => "string",
		"createPo" => "string",
		"inventoryDetail" => "InventoryDetail",
		"binNumbers" => "string",
		"serialNumbers" => "string",
		"poNum" => "string",
		"item" => "RecordRef",
		"orderLine" => "integer",
		"quantityRemaining" => "float",
		"options" => "CustomFieldList",
		"shipGroup" => "integer",
		"itemIsFulfilled" => "boolean",
		"shipAddress" => "RecordRef",
		"shipMethod" => "RecordRef",
		"customFieldList" => "CustomFieldList",
	);
}

