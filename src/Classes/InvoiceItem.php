<?php namespace Fungku\NetSuite\Classes;

class InvoiceItem {
	public $job;
	public $item;
	public $line;
	public $description;
	public $amount;
	public $isTaxable;
	public $options;
	public $deferRevRec;
	public $quantity;
	public $currentPercent;
	public $units;
	public $inventoryDetail;
	public $serialNumbers;
	public $binNumbers;
	public $price;
	public $rate;
	public $percentComplete;
	public $quantityOnHand;
	public $quantityAvailable;
	public $quantityOrdered;
	public $quantityRemaining;
	public $quantityFulfilled;
	public $amountOrdered;
	public $department;
	public $orderLine;
	public $licenseCode;
	public $class;
	public $location;
	public $revRecSchedule;
	public $revRecStartDate;
	public $revRecEndDate;
	public $grossAmt;
	public $costEstimateType;
	public $costEstimate;
	public $excludeFromRateRequest;
	public $catchUpPeriod;
	public $tax1Amt;
	public $taxCode;
	public $taxRate1;
	public $taxRate2;
	public $giftCertFrom;
	public $giftCertRecipientName;
	public $giftCertRecipientEmail;
	public $giftCertMessage;
	public $giftCertNumber;
	public $shipGroup;
	public $itemIsFulfilled;
	public $shipAddress;
	public $shipMethod;
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
		"description" => "string",
		"amount" => "float",
		"isTaxable" => "boolean",
		"options" => "CustomFieldList",
		"deferRevRec" => "boolean",
		"quantity" => "float",
		"currentPercent" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"serialNumbers" => "string",
		"binNumbers" => "string",
		"price" => "RecordRef",
		"rate" => "string",
		"percentComplete" => "float",
		"quantityOnHand" => "float",
		"quantityAvailable" => "float",
		"quantityOrdered" => "float",
		"quantityRemaining" => "float",
		"quantityFulfilled" => "float",
		"amountOrdered" => "float",
		"department" => "RecordRef",
		"orderLine" => "integer",
		"licenseCode" => "string",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"revRecStartDate" => "dateTime",
		"revRecEndDate" => "dateTime",
		"grossAmt" => "float",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"excludeFromRateRequest" => "boolean",
		"catchUpPeriod" => "RecordRef",
		"tax1Amt" => "float",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"giftCertFrom" => "string",
		"giftCertRecipientName" => "string",
		"giftCertRecipientEmail" => "string",
		"giftCertMessage" => "string",
		"giftCertNumber" => "string",
		"shipGroup" => "integer",
		"itemIsFulfilled" => "boolean",
		"shipAddress" => "RecordRef",
		"shipMethod" => "RecordRef",
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

