<?php

class InvoiceTime {
	public $apply;
	public $doc;
	public $line;
	public $billedDate;
	public $employeeDisp;
	public $itemDisp;
	public $jobDisp;
	public $department;
	public $class;
	public $location;
	public $quantity;
	public $rate;
	public $unitDisp;
	public $amount;
	public $memo;
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
		"employeeDisp" => "string",
		"itemDisp" => "string",
		"jobDisp" => "string",
		"department" => "string",
		"class" => "string",
		"location" => "string",
		"quantity" => "string",
		"rate" => "float",
		"unitDisp" => "string",
		"amount" => "float",
		"memo" => "string",
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

