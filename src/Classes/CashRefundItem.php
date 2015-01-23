<?php

class CashRefundItem {
	public $job;
	public $item;
	public $line;
	public $orderLine;
	public $quantity;
	public $units;
	public $inventoryDetail;
	public $binNumbers;
	public $serialNumbers;
	public $description;
	public $price;
	public $rate;
	public $amount;
	public $taxCode;
	public $taxRate1;
	public $taxRate2;
	public $tax1Amt;
	public $grossAmt;
	public $isTaxable;
	public $options;
	public $department;
	public $class;
	public $location;
	public $revRecSchedule;
	public $revRecStartDate;
	public $revRecEndDate;
	public $catchUpPeriod;
	public $deferRevRec;
	public $giftCertFrom;
	public $costEstimateType;
	public $costEstimate;
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
	public $chargeType;
	public $chargesList;
	public $customFieldList;
	static $paramtypesmap = array(
		"job" => "RecordRef",
		"item" => "RecordRef",
		"line" => "integer",
		"orderLine" => "integer",
		"quantity" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"binNumbers" => "string",
		"serialNumbers" => "string",
		"description" => "string",
		"price" => "RecordRef",
		"rate" => "string",
		"amount" => "float",
		"taxCode" => "RecordRef",
		"taxRate1" => "string",
		"taxRate2" => "string",
		"tax1Amt" => "float",
		"grossAmt" => "float",
		"isTaxable" => "boolean",
		"options" => "CustomFieldList",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"revRecStartDate" => "dateTime",
		"revRecEndDate" => "dateTime",
		"catchUpPeriod" => "RecordRef",
		"deferRevRec" => "boolean",
		"giftCertFrom" => "string",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
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
		"chargeType" => "RecordRef",
		"chargesList" => "RecordRefList",
		"customFieldList" => "CustomFieldList",
	);
}

