<?php

class CashSaleItem {
	public $job;
	public $item;
	public $line;
	public $quantityAvailable;
	public $quantityOnHand;
	public $quantityFulfilled;
	public $quantity;
	public $units;
	public $inventoryDetail;
	public $serialNumbers;
	public $binNumbers;
	public $description;
	public $price;
	public $rate;
	public $amount;
	public $orderLine;
	public $licenseCode;
	public $isTaxable;
	public $options;
	public $deferRevRec;
	public $currentPercent;
	public $department;
	public $percentComplete;
	public $class;
	public $location;
	public $revRecSchedule;
	public $revRecStartDate;
	public $revRecEndDate;
	public $grossAmt;
	public $costEstimateType;
	public $excludeFromRateRequest;
	public $catchUpPeriod;
	public $costEstimate;
	public $amountOrdered;
	public $tax1Amt;
	public $quantityOrdered;
	public $quantityRemaining;
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
		"quantityAvailable" => "float",
		"quantityOnHand" => "float",
		"quantityFulfilled" => "float",
		"quantity" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"serialNumbers" => "string",
		"binNumbers" => "string",
		"description" => "string",
		"price" => "RecordRef",
		"rate" => "string",
		"amount" => "float",
		"orderLine" => "integer",
		"licenseCode" => "string",
		"isTaxable" => "boolean",
		"options" => "CustomFieldList",
		"deferRevRec" => "boolean",
		"currentPercent" => "float",
		"department" => "RecordRef",
		"percentComplete" => "float",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"revRecStartDate" => "dateTime",
		"revRecEndDate" => "dateTime",
		"grossAmt" => "float",
		"costEstimateType" => "ItemCostEstimateType",
		"excludeFromRateRequest" => "boolean",
		"catchUpPeriod" => "RecordRef",
		"costEstimate" => "float",
		"amountOrdered" => "float",
		"tax1Amt" => "float",
		"quantityOrdered" => "float",
		"quantityRemaining" => "float",
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

