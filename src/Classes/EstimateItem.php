<?php

namespace Fungku\NetSuite\Classes;

class EstimateItem {
	public $job;
	public $item;
	public $line;
	public $expandItemGroup;
	public $quantityAvailable;
	public $quantityOnHand;
	public $quantity;
	public $units;
	public $description;
	public $serialNumbers;
	public $price;
	public $rate;
	public $amount;
	public $options;
	public $revRecTermInMonths;
	public $department;
	public $class;
	public $location;
	public $isTaxable;
	public $altSalesAmt;
	public $fromJob;
	public $grossAmt;
	public $isEstimate;
	public $subscription;
	public $tax1Amt;
	public $taxCode;
	public $costEstimateType;
	public $costEstimate;
	public $excludeFromRateRequest;
	public $taxRate1;
	public $taxRate2;
	public $shipGroup;
	public $itemIsFulfilled;
	public $shipAddress;
	public $shipMethod;
	public $expectedShipDate;
	public $chargeType;
	public $customFieldList;
	static $paramtypesmap = array(
		"job" => "RecordRef",
		"item" => "RecordRef",
		"line" => "integer",
		"expandItemGroup" => "boolean",
		"quantityAvailable" => "float",
		"quantityOnHand" => "float",
		"quantity" => "float",
		"units" => "RecordRef",
		"description" => "string",
		"serialNumbers" => "string",
		"price" => "RecordRef",
		"rate" => "string",
		"amount" => "float",
		"options" => "CustomFieldList",
		"revRecTermInMonths" => "integer",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"isTaxable" => "boolean",
		"altSalesAmt" => "float",
		"fromJob" => "boolean",
		"grossAmt" => "float",
		"isEstimate" => "boolean",
		"subscription" => "RecordRef",
		"tax1Amt" => "float",
		"taxCode" => "RecordRef",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"excludeFromRateRequest" => "boolean",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"shipGroup" => "integer",
		"itemIsFulfilled" => "boolean",
		"shipAddress" => "RecordRef",
		"shipMethod" => "RecordRef",
		"expectedShipDate" => "dateTime",
		"chargeType" => "RecordRef",
		"customFieldList" => "CustomFieldList",
	);
}

