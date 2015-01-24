<?php namespace Fungku\NetSuite\Classes;

class OpportunityItem {
	public $job;
	public $item;
	public $line;
	public $quantityAvailable;
	public $quantityOnHand;
	public $quantity;
	public $units;
	public $description;
	public $price;
	public $rate;
	public $amount;
	public $altSalesAmt;
	public $revRecTermInMonths;
	public $options;
	public $fromJob;
	public $department;
	public $isEstimate;
	public $location;
	public $class;
	public $costEstimateType;
	public $costEstimate;
	public $grossAmt;
	public $tax1Amt;
	public $taxCode;
	public $taxRate1;
	public $taxRate2;
	public $expectedShipDate;
	public $customFieldList;
	static $paramtypesmap = array(
		"job" => "RecordRef",
		"item" => "RecordRef",
		"line" => "integer",
		"quantityAvailable" => "float",
		"quantityOnHand" => "float",
		"quantity" => "float",
		"units" => "RecordRef",
		"description" => "string",
		"price" => "RecordRef",
		"rate" => "string",
		"amount" => "float",
		"altSalesAmt" => "float",
		"revRecTermInMonths" => "integer",
		"options" => "CustomFieldList",
		"fromJob" => "boolean",
		"department" => "RecordRef",
		"isEstimate" => "boolean",
		"location" => "RecordRef",
		"class" => "RecordRef",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"grossAmt" => "float",
		"tax1Amt" => "float",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"expectedShipDate" => "dateTime",
		"customFieldList" => "CustomFieldList",
	);
}

