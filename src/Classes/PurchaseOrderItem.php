<?php

class PurchaseOrderItem {
	public $item;
	public $line;
	public $vendorName;
	public $quantityReceived;
	public $quantityBilled;
	public $quantityAvailable;
	public $quantityOnHand;
	public $taxCode;
	public $taxRate1;
	public $taxRate2;
	public $quantity;
	public $tax1Amt;
	public $grossAmt;
	public $units;
	public $inventoryDetail;
	public $serialNumbers;
	public $description;
	public $purchaseContract;
	public $rate;
	public $amount;
	public $options;
	public $department;
	public $class;
	public $location;
	public $landedCostCategory;
	public $customer;
	public $isBillable;
	public $billVarianceStatus;
	public $matchBillToReceipt;
	public $expectedReceiptDate;
	public $isClosed;
	public $createdFrom;
	public $linkedOrderList;
	public $customFieldList;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"line" => "integer",
		"vendorName" => "string",
		"quantityReceived" => "float",
		"quantityBilled" => "float",
		"quantityAvailable" => "float",
		"quantityOnHand" => "float",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"quantity" => "float",
		"tax1Amt" => "float",
		"grossAmt" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"serialNumbers" => "string",
		"description" => "string",
		"purchaseContract" => "RecordRef",
		"rate" => "string",
		"amount" => "float",
		"options" => "CustomFieldList",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"landedCostCategory" => "RecordRef",
		"customer" => "RecordRef",
		"isBillable" => "boolean",
		"billVarianceStatus" => "TransactionBillVarianceStatus",
		"matchBillToReceipt" => "boolean",
		"expectedReceiptDate" => "dateTime",
		"isClosed" => "boolean",
		"createdFrom" => "RecordRef",
		"linkedOrderList" => "RecordRefList",
		"customFieldList" => "CustomFieldList",
	);
}

