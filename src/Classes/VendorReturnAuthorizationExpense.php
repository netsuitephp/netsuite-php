<?php namespace Fungku\NetSuite\Classes;

class VendorReturnAuthorizationExpense {
	public $orderLine;
	public $line;
	public $category;
	public $account;
	public $amount;
	public $taxCode;
	public $taxRate1;
	public $taxRate2;
	public $tax1Amt;
	public $grossAmt;
	public $memo;
	public $department;
	public $class;
	public $location;
	public $customer;
	public $isBillable;
	public $amortizationSched;
	public $amortizStartDate;
	public $amortizationEndDate;
	public $amortizationResidual;
	public $customFieldList;
	static $paramtypesmap = array(
		"orderLine" => "integer",
		"line" => "integer",
		"category" => "RecordRef",
		"account" => "RecordRef",
		"amount" => "float",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"tax1Amt" => "float",
		"grossAmt" => "float",
		"memo" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"customer" => "RecordRef",
		"isBillable" => "boolean",
		"amortizationSched" => "RecordRef",
		"amortizStartDate" => "dateTime",
		"amortizationEndDate" => "dateTime",
		"amortizationResidual" => "string",
		"customFieldList" => "CustomFieldList",
	);
}

