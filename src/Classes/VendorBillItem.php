<?php

class VendorBillItem {
	public $item;
	public $vendorName;
	public $line;
	public $orderDoc;
	public $orderLine;
	public $quantity;
	public $units;
	public $inventoryDetail;
	public $description;
	public $serialNumbers;
	public $binNumbers;
	public $expirationDate;
	public $taxCode;
	public $taxRate1;
	public $taxRate2;
	public $grossAmt;
	public $tax1Amt;
	public $rate;
	public $amount;
	public $options;
	public $department;
	public $class;
	public $location;
	public $customer;
	public $landedCostCategory;
	public $isBillable;
	public $billVarianceStatus;
	public $billreceiptsList;
	public $amortizationSched;
	public $amortizStartDate;
	public $amortizationEndDate;
	public $amortizationResidual;
	public $landedCost;
	public $customFieldList;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"vendorName" => "string",
		"line" => "integer",
		"orderDoc" => "integer",
		"orderLine" => "integer",
		"quantity" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"description" => "string",
		"serialNumbers" => "string",
		"binNumbers" => "string",
		"expirationDate" => "dateTime",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"grossAmt" => "float",
		"tax1Amt" => "float",
		"rate" => "string",
		"amount" => "float",
		"options" => "CustomFieldList",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"customer" => "RecordRef",
		"landedCostCategory" => "RecordRef",
		"isBillable" => "boolean",
		"billVarianceStatus" => "TransactionBillVarianceStatus",
		"billreceiptsList" => "RecordRefList",
		"amortizationSched" => "RecordRef",
		"amortizStartDate" => "dateTime",
		"amortizationEndDate" => "dateTime",
		"amortizationResidual" => "string",
		"landedCost" => "LandedCost",
		"customFieldList" => "CustomFieldList",
	);
}

