<?php

namespace Fungku\NetSuite\Classes;

class PurchaseRequisitionItem {
	public $line;
	public $item;
	public $vendorName;
	public $poVendor;
	public $quantity;
	public $units;
	public $serialNumbers;
	public $inventoryDetail;
	public $description;
	public $estimatedRate;
	public $estimatedAmount;
	public $rate;
	public $amount;
	public $taxCode;
	public $taxRate1;
	public $taxRate2;
	public $grossAmt;
	public $options;
	public $department;
	public $class;
	public $customer;
	public $isBillable;
	public $linkedOrderList;
	public $linkedOrderStatus;
	public $expectedReceiptDate;
	public $isClosed;
	public $expandItemGroup;
	static $paramtypesmap = array(
		"line" => "integer",
		"item" => "RecordRef",
		"vendorName" => "string",
		"poVendor" => "RecordRef",
		"quantity" => "float",
		"units" => "RecordRef",
		"serialNumbers" => "string",
		"inventoryDetail" => "InventoryDetail",
		"description" => "string",
		"estimatedRate" => "float",
		"estimatedAmount" => "float",
		"rate" => "string",
		"amount" => "float",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"grossAmt" => "float",
		"options" => "CustomFieldList",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"customer" => "RecordRef",
		"isBillable" => "boolean",
		"linkedOrderList" => "RecordRefList",
		"linkedOrderStatus" => "string",
		"expectedReceiptDate" => "dateTime",
		"isClosed" => "boolean",
		"expandItemGroup" => "boolean",
	);
}

