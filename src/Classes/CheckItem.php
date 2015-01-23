<?php

class CheckItem {
	public $item;
	public $vendorName;
	public $line;
	public $quantity;
	public $units;
	public $inventoryDetail;
	public $description;
	public $binNumbers;
	public $serialNumbers;
	public $expirationDate;
	public $rate;
	public $taxCode;
	public $amount;
	public $options;
	public $taxRate1;
	public $taxRate2;
	public $department;
	public $grossAmt;
	public $class;
	public $tax1Amt;
	public $location;
	public $customer;
	public $isBillable;
	public $landedCost;
	public $customFieldList;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"vendorName" => "string",
		"line" => "integer",
		"quantity" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"description" => "string",
		"binNumbers" => "string",
		"serialNumbers" => "string",
		"expirationDate" => "dateTime",
		"rate" => "string",
		"taxCode" => "RecordRef",
		"amount" => "float",
		"options" => "CustomFieldList",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"department" => "RecordRef",
		"grossAmt" => "float",
		"class" => "RecordRef",
		"tax1Amt" => "float",
		"location" => "RecordRef",
		"customer" => "RecordRef",
		"isBillable" => "boolean",
		"landedCost" => "LandedCost",
		"customFieldList" => "CustomFieldList",
	);
}

