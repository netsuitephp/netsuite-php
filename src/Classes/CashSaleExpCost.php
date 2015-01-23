<?php

class CashSaleExpCost {
	public $apply;
	public $doc;
	public $line;
	public $billedDate;
	public $jobDisp;
	public $employeeDisp;
	public $categoryDisp;
	public $memo;
	public $department;
	public $class;
	public $location;
	public $originalAmount;
	public $amount;
	public $taxableDisp;
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
		"jobDisp" => "string",
		"employeeDisp" => "string",
		"categoryDisp" => "string",
		"memo" => "string",
		"department" => "string",
		"class" => "string",
		"location" => "string",
		"originalAmount" => "float",
		"amount" => "float",
		"taxableDisp" => "string",
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

