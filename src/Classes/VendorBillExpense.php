<?php

namespace Fungku\NetSuite\Classes;

class VendorBillExpense {
	public $orderDoc;
	public $orderLine;
	public $line;
	public $category;
	public $account;
	public $amount;
	public $tax1Amt;
	public $memo;
	public $grossAmt;
	public $department;
	public $class;
	public $location;
	public $customer;
	public $isBillable;
	public $taxCode;
	public $taxRate1;
	public $taxRate2;
	public $amortizationSched;
	public $amortizStartDate;
	public $amortizationEndDate;
	public $amortizationResidual;
	public $customFieldList;
	static $paramtypesmap = array(
		"orderDoc" => "integer",
		"orderLine" => "integer",
		"line" => "integer",
		"category" => "RecordRef",
		"account" => "RecordRef",
		"amount" => "float",
		"tax1Amt" => "float",
		"memo" => "string",
		"grossAmt" => "float",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"customer" => "RecordRef",
		"isBillable" => "boolean",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"amortizationSched" => "RecordRef",
		"amortizStartDate" => "dateTime",
		"amortizationEndDate" => "dateTime",
		"amortizationResidual" => "string",
		"customFieldList" => "CustomFieldList",
	);
}

