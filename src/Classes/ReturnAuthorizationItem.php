<?php

namespace Fungku\NetSuite\Classes;

class ReturnAuthorizationItem {
	public $job;
	public $item;
	public $orderLine;
	public $line;
	public $quantity;
	public $quantityReceived;
	public $quantityBilled;
	public $units;
	public $inventoryDetail;
	public $description;
	public $serialNumbers;
	public $price;
	public $rate;
	public $amount;
	public $options;
	public $revRecTermInMonths;
	public $deferRevRec;
	public $isClosed;
	public $isDropShipment;
	public $catchUpPeriod;
	public $department;
	public $costEstimateType;
	public $costEstimate;
	public $class;
	public $location;
	public $revRecSchedule;
	public $revRecStartDate;
	public $revRecEndDate;
	public $taxCode;
	public $taxRate1;
	public $taxRate2;
	public $tax1Amt;
	public $grossAmt;
	public $isTaxable;
	public $giftCertFrom;
	public $giftCertRecipientName;
	public $giftCertRecipientEmail;
	public $giftCertMessage;
	public $giftCertNumber;
	public $vsoeSopGroup;
	public $vsoeIsEstimate;
	public $vsoePrice;
	public $vsoeAmount;
	public $altSalesAmt;
	public $vsoeAllocation;
	public $vsoeDeferral;
	public $vsoePermitDiscount;
	public $vsoeDelivered;
	public $customFieldList;
	static $paramtypesmap = array(
		"job" => "RecordRef",
		"item" => "RecordRef",
		"orderLine" => "integer",
		"line" => "integer",
		"quantity" => "float",
		"quantityReceived" => "float",
		"quantityBilled" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"description" => "string",
		"serialNumbers" => "string",
		"price" => "RecordRef",
		"rate" => "string",
		"amount" => "float",
		"options" => "CustomFieldList",
		"revRecTermInMonths" => "integer",
		"deferRevRec" => "boolean",
		"isClosed" => "boolean",
		"isDropShipment" => "boolean",
		"catchUpPeriod" => "RecordRef",
		"department" => "RecordRef",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"revRecStartDate" => "dateTime",
		"revRecEndDate" => "dateTime",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"tax1Amt" => "float",
		"grossAmt" => "float",
		"isTaxable" => "boolean",
		"giftCertFrom" => "string",
		"giftCertRecipientName" => "string",
		"giftCertRecipientEmail" => "string",
		"giftCertMessage" => "string",
		"giftCertNumber" => "string",
		"vsoeSopGroup" => "VsoeSopGroup",
		"vsoeIsEstimate" => "boolean",
		"vsoePrice" => "float",
		"vsoeAmount" => "float",
		"altSalesAmt" => "float",
		"vsoeAllocation" => "float",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"customFieldList" => "CustomFieldList",
	);
}

