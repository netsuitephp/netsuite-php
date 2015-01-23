<?php

class CreditMemoItem {
	public $job;
	public $item;
	public $orderLine;
	public $line;
	public $quantity;
	public $description;
	public $binNumbers;
	public $price;
	public $rate;
	public $amount;
	public $isTaxable;
	public $options;
	public $taxCode;
	public $taxRate1;
	public $taxRate2;
	public $tax1Amt;
	public $grossAmt;
	public $department;
	public $class;
	public $location;
	public $costEstimateType;
	public $costEstimate;
	public $revRecSchedule;
	public $revRecStartDate;
	public $revRecTermInMonths;
	public $revRecEndDate;
	public $units;
	public $inventoryDetail;
	public $serialNumbers;
	public $deferRevRec;
	public $giftCertFrom;
	public $giftCertRecipientName;
	public $giftCertRecipientEmail;
	public $giftCertMessage;
	public $giftCertNumber;
	public $vsoeSopGroup;
	public $vsoeIsEstimate;
	public $vsoePrice;
	public $vsoeAmount;
	public $vsoeAllocation;
	public $vsoeDeferral;
	public $vsoePermitDiscount;
	public $vsoeDelivered;
	public $catchUpPeriod;
	public $chargeType;
	public $chargesList;
	public $customFieldList;
	static $paramtypesmap = array(
		"job" => "RecordRef",
		"item" => "RecordRef",
		"orderLine" => "integer",
		"line" => "integer",
		"quantity" => "float",
		"description" => "string",
		"binNumbers" => "string",
		"price" => "RecordRef",
		"rate" => "string",
		"amount" => "float",
		"isTaxable" => "boolean",
		"options" => "CustomFieldList",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"tax1Amt" => "float",
		"grossAmt" => "float",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"revRecSchedule" => "RecordRef",
		"revRecStartDate" => "dateTime",
		"revRecTermInMonths" => "integer",
		"revRecEndDate" => "dateTime",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"serialNumbers" => "string",
		"deferRevRec" => "boolean",
		"giftCertFrom" => "string",
		"giftCertRecipientName" => "string",
		"giftCertRecipientEmail" => "string",
		"giftCertMessage" => "string",
		"giftCertNumber" => "string",
		"vsoeSopGroup" => "VsoeSopGroup",
		"vsoeIsEstimate" => "boolean",
		"vsoePrice" => "float",
		"vsoeAmount" => "float",
		"vsoeAllocation" => "float",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"catchUpPeriod" => "RecordRef",
		"chargeType" => "RecordRef",
		"chargesList" => "RecordRefList",
		"customFieldList" => "CustomFieldList",
	);
}

