<?php namespace Fungku\NetSuite\Classes;

class CashSaleItemCost {
	public $apply;
	public $doc;
	public $line;
	public $billedDate;
	public $itemDisp;
	public $memo;
	public $jobDisp;
	public $department;
	public $class;
	public $location;
	public $unitDisp;
	public $options;
	public $itemCostCount;
	public $quantity;
	public $serialNumbers;
	public $cost;
	public $amount;
	public $revRecSchedule;
	public $revRecStartDate;
	public $revRecEndDate;
	public $grossAmt;
	public $tax1Amt;
	public $taxCode;
	public $taxRate1;
	public $taxRate2;
	static $paramtypesmap = array(
		"apply" => "boolean",
		"doc" => "integer",
		"line" => "integer",
		"billedDate" => "dateTime",
		"itemDisp" => "string",
		"memo" => "string",
		"jobDisp" => "string",
		"department" => "string",
		"class" => "string",
		"location" => "string",
		"unitDisp" => "string",
		"options" => "CustomFieldList",
		"itemCostCount" => "string",
		"quantity" => "string",
		"serialNumbers" => "string",
		"cost" => "float",
		"amount" => "float",
		"revRecSchedule" => "RecordRef",
		"revRecStartDate" => "dateTime",
		"revRecEndDate" => "dateTime",
		"grossAmt" => "float",
		"tax1Amt" => "float",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
	);
}

