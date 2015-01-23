<?php

class ItemReceiptItem {
	public $itemReceive;
	public $jobName;
	public $item;
	public $orderLine;
	public $line;
	public $itemName;
	public $description;
	public $location;
	public $onHand;
	public $quantityRemaining;
	public $quantity;
	public $unitsDisplay;
	public $unitCostOverride;
	public $inventoryDetail;
	public $serialNumbers;
	public $binNumbers;
	public $expirationDate;
	public $rate;
	public $currency;
	public $restock;
	public $billVarianceStatus;
	public $isDropShipment;
	public $options;
	public $landedCost;
	public $customFieldList;
	static $paramtypesmap = array(
		"itemReceive" => "boolean",
		"jobName" => "string",
		"item" => "RecordRef",
		"orderLine" => "integer",
		"line" => "integer",
		"itemName" => "string",
		"description" => "string",
		"location" => "RecordRef",
		"onHand" => "float",
		"quantityRemaining" => "float",
		"quantity" => "float",
		"unitsDisplay" => "string",
		"unitCostOverride" => "float",
		"inventoryDetail" => "InventoryDetail",
		"serialNumbers" => "string",
		"binNumbers" => "string",
		"expirationDate" => "dateTime",
		"rate" => "string",
		"currency" => "string",
		"restock" => "boolean",
		"billVarianceStatus" => "TransactionBillVarianceStatus",
		"isDropShipment" => "boolean",
		"options" => "CustomFieldList",
		"landedCost" => "LandedCost",
		"customFieldList" => "CustomFieldList",
	);
}

